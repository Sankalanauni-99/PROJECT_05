

<!DOCTYPE html>
<html>
  <head> 
  <style>
        
        .container-fluid{
            background-color:white;

        }
        .page-header{
            background-color:white;

        }
        .page-content{
            background-color:white;

        }
    </style>
        @include('Manager.css-manager')
  </head>
  <body>

        @include('Manager.header-manager')

        @include('Manager.sidebar-manager')
      <div class="page-content">
        
          <div class="container-fluid">
          <p style="font-size: 7vw; font-weight: bold;">Play Space</p>
            </div>    
        
    </div>
    <!-- JavaScript files-->
    @include('Manager.js-manager')
  </body>
</html>
