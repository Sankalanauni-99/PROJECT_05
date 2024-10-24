@extends('layout')
@section('title', 'Booking')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
@endsection
<h1>Booking Form</h1>
        <form action="/bookings" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
    
            <label for="date">Date of Booking:</label>
            <input type="date" id="date" name="date" required>
    
            <label for="time_from">Time From:</label>
            <input type="time" id="time_from" name="time_from" required>

            <label for="time_from">Time From:</label>
            <input type="time" id="time_from" name="time_from" required>
    
            <div class="radio-group">
                <label>Do you need Instructor:</label>
                <label>
                    <input type="radio" name="instructor_needed" value="yes" required> Yes
                </label>
                <label>
                    <input type="radio" name="instructor_needed" value="no"> No
                </label>
            </div>
            <input type="submit" value="Book Now">
    
    
        </form>
    
    