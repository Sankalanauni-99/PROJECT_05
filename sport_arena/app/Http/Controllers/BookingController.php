<?php




namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'=>'required',
            'date' => 'required|date',
            'time_from' => 'required',
            'time_to'=>'required',
            'instructor_needed'=>'required'
        ]);

        
        Booking::create($validatedData);


     
        return redirect('/booking')->with('success', 'Booking has been made successfully!');
    }
}