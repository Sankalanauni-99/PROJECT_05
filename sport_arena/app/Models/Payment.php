<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['booking_id','user_id', 'payment_amount', 'payment_date', 'payment_time', 'payment_method'];
    
    public function booking()
    {
        return $this->hasOne('App\Models\Booking','id','booking_id');

    }

    // public function user()
    // {
    //     return $this->hasOne('App\Models\User','id','user_id');

    //  }

   // In App\Models\Payment.php
public function user()
{
    return $this->belongsTo('App\Models\User', 'user_id');
}

}