<?php

namespace App\Http\Controllers;
use app\Models\Booking;
use app\Models\User;
use Illuminate\Http\Request;






class ManagerController extends Controller
{
   public function all_bookings()
   {
   // $data = bookings::select('id','user_id','date','time_from','time_to')->get();
   // return view('Manager.all_bookings',compact('data'));
   return view('Manager.all_bookings');
   }

   public function confirmed_bookings()
   {
    return view('Manager.confirmed_bookings');

   }
}
