<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'arena_id', 'date', 'time_from', 'time_to','confirmation_status', 'instructor_needed'];
    
    protected $attributes = [
       // 'confirmation_status' => 'pending', // Default value
    ];


    public function user()
{
    return $this->belongsTo('App\Models\User', 'user_id');
}


    public function arena()
    {
        return $this->belongsTo(Arena::class);
    }
}