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
    </style>
  </head>
  <body>

        @include('Manager.header-manager')

        @include('Manager.sidebar-manager')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h1>All Bookings</h1>
          <table>
                <tr>
                <th>Payment ID</th>
                <th>Booking ID</th>
                <th>Payment Amount</th>
                <th>User ID</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time_From</th>
                <th>Time_To</th>
                <th>Status</th>
                <th>Status Update</th>
                </tr>
                     @foreach($data as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->booking_id}}</td>
                    <td>{{$data->payment_amount}}</td>
                    <td>{{$data->booking->user_id}}</td>
                    <td>{{$data->user->email}}</td>
                    <td>{{$data->booking->date}}</td>
                    <td>{{$data->booking->time_from}}</td>
                    <td>{{$data->booking->time_to}}</td>
                    <td>
                        @if($data->booking->confirmation_status == 'confirmed')

                        <span style="color: skyblue;">Confirmed</span>

                        @endif

                        @if($data->booking->confirmation_status == 'rejected')

                        <span style="color: red;">Rejected</span>

                        @endif

                        @if($data->booking->confirmation_status == 'pending')

                        <span style="color: yellow;">Pending</span>

                        @endif

                    </td>
                    <td><span style="padding-bottom: 10px;"><a class="btn btn-success" href="{{url('confirm_book',$data->booking_id)}}">Confirm</a></span>
                    <a style="padding-bottom: 10px;" href="/send-mail">send mail</a>   
                    <a class="btn btn-warning" href="{{url('reject_book',$data->booking_id)}}">Reject</a>
                </td>
                </tr>
                    @endforeach
            </table>
            </div>    
        </div>
    </div>
     <!--JavaScript files-->
    @include('Manager.js-manager')
  </body>
</html>