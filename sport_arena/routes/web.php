<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/redirects",[HomeController::class,"redirects"]);

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

Route::get('/booking', [BookingController::class, 'create'])->name('booking');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');