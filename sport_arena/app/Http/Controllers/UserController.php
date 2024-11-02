<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use app\Models\User;

class UserController extends Controller
{
    public function my_bookings(){
        $myBookings = Booking::where('user_id', auth()->id())
        ->with('arena:id,arena_name')
        ->select('id','arena_id','date','time_from', 'time_to')
        ->get();

        return view('User.my_bookings', compact('myBookings'));
    }

    public function confirm_bookings(){
        $confirmBookings = Booking::where('user_id',auth()->id())
        ->where('confirmation_status', 'confirmed')
        ->with('arena:id,arena_name')
        ->select('id','arena_id','date','time_from', 'time_to')
        ->get();

        return view('User.confirm_bookings',compact('confirmBookings'));
    }

    public function reject_bookings(){
        $rejectBookings = Booking::where('user_id',auth()->id())
        ->where('confirmation_status', 'rejected')
        ->with('arena:id,arena_name')
        ->select('id','arena_id','date','time_from', 'time_to')
        ->get();

        return view('User.reject_bookings',compact('rejectBookings'));
    }

    public function pending_bookings(){
        $pendingBookings = Booking::where('user_id',auth()->id())
        ->where('confirmation_status', 'pending')
        ->with('arena:id,arena_name')
        ->select('id','arena_id','date','time_from', 'time_to')
        ->get();

        return view('User.pending_bookings',compact('pendingBookings'));
    }

    // public function deleteBooking($id){
    //     try{
    //         Booking::where('id',$id)->delete();
    //         return redirect('/my_bookings')->with('success','Booking Deleted Successfully');
    //     } catch (\Exception $e) {
    //         return redirect('/my_bookings')->with('fail',$e->getMessage());
    //     }   
    // }

    public function deleteBooking($id){
        try {
            // Find the booking by ID
            $booking = Booking::where('id', $id)->where('confirmation_status', 'pending')->first();
    
            // Check if booking exists and has 'pending' status
            if ($booking) {
                $booking->delete();
                return redirect('/my_bookings')->with('success', 'Booking Deleted Successfully');
            } else {
                return redirect('/my_bookings')->with('fail', 'Only pending bookings can be deleted.');
            }
        } catch (\Exception $e) {
            return redirect('/my_bookings')->with('fail', $e->getMessage());
        }
    }
    
}
