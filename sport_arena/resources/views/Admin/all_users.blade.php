<x-app-layout>
    
<!DOCTYPE html>
<html>
  <head> 
    @include('Admin.css')
  </head>
  <body>
    


    @include('Admin.sidebar')
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
                    <h1>ALL USERS</h1>
                </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-bordered">
                            <thead>
                                <th>S/N</th>
                                <th>User Id</th>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Action</th>
                                <!-- <th colspan="2">Action</th> -->
                            </thead>
                            <tbody>
                            @if (count($allusers) > 0)
                            @foreach ($allusers as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td><a href="/deleteuser/{{$item->id}}" class="btn btn-danger btn-sm">Delete</td>
                                <!-- <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</td>
                                <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</td> -->
                            </tr>
                            @endforeach  
                            @else
                                <tr>
                                    <td colspan="5">No Users Found!</td>
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
