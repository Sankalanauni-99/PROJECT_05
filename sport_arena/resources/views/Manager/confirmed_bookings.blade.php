<!DOCTYPE html>
<html>
  <head> 
        @include('Manager.css-manager')
        <style>
        table
        {
            border:1px solid darkblue;
            margin:auto;
            width: 1000px;

        }
        th
        {
            color:darkblue;
            font-weight:bold;
            font-size:18px;
            text-align:center;
            background-color:white;
            padding:10px;

        }
        td
        {
            color:gray;
            font-weight:bold;
            
            text-align:center;
            
            padding:10px;

        }
        .container-fluid{
            background-color:white;

        }
        .page-header{
            background-color:white;

        }
    </style>
  </head>
  <body>

        @include('Manager.header-manager')

        @include('Manager.sidebar-manager')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Confirmed Bookings</h1>
          <table>
                <tr>
                <th>Payment ID</th>
                <th>Booking ID</th>
                <th>User ID</th>
                <th>Email</th>
                <th>Booked Date</th>
                <th>Time_From</th>
                <th>Time_To</th>
                <th>Instructor Needed?</th>
                <th>Delete Booking</th>
                </tr>
                     @foreach($data as $data)
                      @if($data->booking->confirmation_status == 'confirmed')
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->booking_id}}</td>
                    <td>{{$data->booking->user_id}}</td>
                    <td>{{$data->user->email}}</td>
                    <td>{{$data->booking->date}}</td>
                    <td>{{$data->booking->time_from}}</td>
                    <td>{{$data->booking->time_to}}</td>
                    <td>{{$data->booking->instructor_needed}}</td>
                    <td><a onclick="return confirm('Are you sure to delete this?');"class="btn btn-danger" href="{{url('delete_book',$data->booking_id)}}">Delete</a>
                </td>
                </tr>
                      @endif
                    @endforeach
            </table>
            </div>    
        </div>
    </div>
     <!--JavaScript files-->
    @include('Manager.js-manager')
  </body>
</html>