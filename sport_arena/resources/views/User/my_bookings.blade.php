<x-app-layout>
    
<!DOCTYPE html>
<html>
  <head> 
    @include('User.css')
  </head>
  <body>
    


    @include('User.sidebar')
      <div class="page-content">
        <div class="page-header">
            <div class="container-fluid"> 

            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif

                <div class="card-header">
                    MY BOOKINGS
                </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-bordered">
                            <thead>
                                <th>S/N</th>
                                <th>Booking Id</th>
                                <th>Arena name</th>
                                <th>Date</th>
                                <th>Time From</th>
                                <th>Time To</th>
                                <th>Action</th>
                                <!-- <th colspan="2">Action</th> -->
                            </thead>
                            <tbody>
                            @if (count($myBookings) > 0)
                            @foreach ($myBookings as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->arena->arena_name ?? 'N/A' }}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->time_from}}</td>
                                <td>{{$item->time_to}}</td>
                                <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</td>
                                <!-- <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</td>
                                <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</td> -->
                            </tr>
                            @endforeach  
                            @else
                                <tr>
                                    <td colspan="7">No Booking Found!</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>

            </div> 
      </div>
    </div>
    <!-- JavaScript files-->
    @include('User.js')
  </body>
</html>
</x-app-layout>
