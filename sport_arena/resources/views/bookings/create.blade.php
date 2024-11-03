@extends('layout')
@section('title', 'Booking Form')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
@endsection
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<p>Booking Form</p>
    <div class="container">
        <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="arena_id" value="{{ $arena->id }}">
                    <label for="name">Name:</label>
            <p1>{{ auth()->user()->name }}</p1> <!-- Display user name -->
            <br>
            <label for="email">Email:</label>
            <p1>{{ auth()->user()->email }}</p1> <!-- Display user email -->
            <br>
            
                    <label for="date">Date of Booking:</label>
                    <input type="date" id="date" name="date" required>
            
                    <label for="time_from">Time From:</label>
                    <input type="time" id="time_from" name="time_from" required>

                    <label for="time_to">Time To:</label>
                    <input type="time" id="time_to" name="time_to" required>
            
                    <div class="radio-group">
                        <label>Do you need Instructor:</label>
                        <label>
                            <input type="radio" name="instructor_needed" value=1 required> Yes
                        </label>
                        <label>
                            <input type="radio" name="instructor_needed" value=0> No
                        </label>
                    </div>
                    <input type="submit" value="Book Now">
            
            
        </form>
</div>
        @endsection
    
    