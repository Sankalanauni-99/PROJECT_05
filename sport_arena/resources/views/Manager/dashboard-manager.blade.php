<<<<<<< Updated upstream
<x-app-layout>
<h1>Manager</h1>
</x-app-layout>
=======
<!DOCTYPE html>
<html>
  <head> 
        @include('Manager.css-manager')
  </head>
  <body>

        @include('Manager.header-manager')

        @include('Manager.sidebar-manager')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
                @include('Manager.body-manager')
            </div>    
        </div>
    </div>
    <!-- JavaScript files-->
    @include('Manager.js-manager')
  </body>
</html>
>>>>>>> Stashed changes
