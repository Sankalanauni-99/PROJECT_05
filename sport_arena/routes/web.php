<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
use App\Mail\FirstMail;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirects',[HomeController::class,'redirects']);

Route::get('/all_bookings',[ManagerController::class,'all_bookings']);

Route::get('/confirmed_bookings',[ManagerController::class,'confirmed_bookings']);

Route::get('/rejected_bookings',[ManagerController::class,'rejected_bookings']);

// Route::middleware('admin:admin')->group(function(){
//     Route::get('admin/login',[AdminController::class, 'loginForm']);
//     Route::post('admin/login',[AdminController::class, 'store'])->name('admin.login');
// });

// Route::middleware([
//     'auth:sanctum,admin',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('admin/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/booking', function () {
//     return view('booking');
// });

Route::get('/fitness', function () {
    return view('fitness_centers');
})->name('fitness_centers');

Route::get('/send-mail', function () {
    Mail::to('test@test.com')->send(new FirstMail());
});


Route::get('/indoor', function () {
    return view('indoor_stadiums');
});

// Route::get('/swimming', function () {
//     return view('swimming_pools');
// });

Route::get('/booking', [BookingController::class, 'create'])->name('booking');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');


Route::get('/confirm_book/{booking_id}', [ManagerController::class, 'confirm_book']);
Route::get('/reject_book/{booking_id}', [ManagerController::class, 'reject_book']);

Route::get('/delete_book/{booking_id}', [ManagerController::class, 'delete_book']);

Route::get('/my_bookings',[UserController::class,'my_bookings']);
Route::get('/confirm_bookings',[UserController::class,'confirm_bookings']);
Route::get('/reject_bookings',[UserController::class,'reject_bookings']);
Route::get('/pending_bookings',[UserController::class,'pending_bookings']);
Route::get('/delete/{id}',[UserController::class,'deleteBooking']);

>>>>>>> dcae1f07dca3223ddc230de5219de118ec2edd35
