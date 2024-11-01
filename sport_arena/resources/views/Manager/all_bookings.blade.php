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
    </style>
  </head>
  <body>

        @include('Manager.header-manager')

        @include('Manager.sidebar-manager')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <table>
                <tr>
                <th>Booking ID</th>
                <th>User ID</th>
                <th>Date</th>
                <th>Time_From</th>
                <th>Time_To</th>
                </tr>
                    @foreach($data as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->user_id}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time_from}}</td>
                    <td>{{$data->time_to}}</td>

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