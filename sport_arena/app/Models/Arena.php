<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model
    // protected $table = 'arenas';

    // Specify the fillable fields to allow mass assignment
    protected $fillable = [
        'arena_name',        // Add the name of the arena
        'location',    // Add the location of the arena
        'contact',     // Add the contact number of the arena
        'open_time',   // Add the opening time of the arena
        'close_time',  // Add the closing time of the arena
    ];

    // Define relationships if any
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
