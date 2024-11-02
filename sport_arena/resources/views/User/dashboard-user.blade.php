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
            @include('User.boady')
            </div> 
      </div>
    </div>
    <!-- JavaScript files-->
    @include('User.js')
  </body>
</html>
</x-app-layout>
