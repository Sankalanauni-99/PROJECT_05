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
            @include('Admin.boady')
            </div> 
      </div>
    </div>
    <!-- JavaScript files-->
    @include('Admin.js')
  </body>
</html>
</x-app-layout>

