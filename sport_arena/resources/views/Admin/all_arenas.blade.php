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
                    <h1>ALL ARENAS</h1>
                </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-bordered">
                            <thead>
                                <th>S/N</th>
                                <th>Arena Id</th>
                                <th>Arena name</th>
                                <th>Location</th>
                                <th>Contact</th>
                                <th>Action</th>
                                <!-- <th colspan="2">Action</th> -->
                            </thead>
                            <tbody>
                            @if (count($allarenas) > 0)
                            @foreach ($allarenas as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->arena_name}}</td>
                                <td>{{$item->location}}</td>
                                <td>{{$item->contact}}</td>
                                <td><a href="/deletearena/{{$item->id}}" class="btn btn-danger btn-sm">Delete</td>
                                <!-- <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</td>
                                <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</td> -->
                            </tr>
                            @endforeach  
                            @else
                                <tr>
                                    <td colspan="6">No Arenas Found!</td>
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
