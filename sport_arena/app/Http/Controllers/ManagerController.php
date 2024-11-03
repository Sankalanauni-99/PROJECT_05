<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Booking;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;






class ManagerController extends Controller
{
   public function all_bookings()
   {
  //$data = Booking::all();
   //return view('Manager.all_bookings',compact('data'));
   $data = Payment::select('id','booking_id','user_id','payment_amount')->get();
   return view('Manager.all_bookings',compact('data'));
   }

   public function confirmed_bookings()
   {
    $data = Payment::select('id','user_id','booking_id')->get();
   return view('Manager.confirmed_bookings',compact('data'));

   }

   public function rejected_bookings()
   {
    $data = Payment::select('id','user_id','booking_id')->get();
   return view('Manager.rejected_bookings',compact('data'));

   }

   public function confirm_book($booking_id)
   {
        $data = Booking::find($booking_id);
        $data->confirmation_status='confirmed';
        $data->save();
        return redirect()->back();
   }

   public function reject_book($booking_id)
   {
        $data = Booking::find($booking_id);
        $data->confirmation_status='rejected';
        $data->save();
        return redirect()->back();
   }

   public function delete_book($booking_id)
   {
        $data = Booking::find($booking_id);
        $data->delete();
        return redirect()->back();
   }
}
