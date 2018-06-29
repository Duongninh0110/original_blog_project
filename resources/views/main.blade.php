<!DOCTYPE html>
<html lang="en">
  <head>
    @include ('Partials._head')
  </head>

  <body>
    @include ('Partials._Nav')
    
    <div class="container">
      @include('Partials._Messages')
    
      @yield ('content')    
    
      @include ('Partials._Footer')

    </div> <!--end of container-->

    @include ('Partials._Javascript')

  </body>
</html>
