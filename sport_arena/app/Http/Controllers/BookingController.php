<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Arena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{
    public function create(Request $request)
    {
        // Fetch the selected arena by ID
        $arena = Arena::findOrFail($request->query('arena_id'));
        
        return view('bookings.create', compact('arena'));
    }

    public function store(Request $request)
    {
        //dd($request->arena_id);
       try {
           $validatedData = $request->validate([
                'date' => 'required|date',
                'time_from' => 'required|date_format:H:i',
                'time_to' => 'required|date_format:H:i',
                'instructor_needed' => 'boolean',
                'arena_id' => 'required|exists:arenas,id',
            ]);
            
            $booking = new Booking();
            $booking->user_id = Auth::id();
            //$booking->arena_id = $validatedData['arena_id'];
            $booking->arena_id = $request->arena_id;
            //$booking->date = $validatedData['date'];
            $booking->date = $request->date;
            //$booking->time_from = $validatedData['time_from'];
            $booking->time_from = $request->time_from;
           // $booking->time_to = $validatedData['time_to'];
            $booking->time_to = $request->time_to;
            $booking->confirmation_status = 'pending';
            //$booking->instructor_needed = $validatedData['instructor_needed'] ?? 0;
            $booking->instructor_needed = $request-> instructor_needed;
            //$booking->confermation_status = 'pending';

            $booking->save();
    
            return redirect()->route('bookings.index')->with('success', 'Booking submitted successfully!');
        } catch (\Exception $e) {
          //  dd($request->arena_id);
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
