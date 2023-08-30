<!DOCTYPE html>
<html lang="en">
  <head>
    @include('Layouts._header')
  </head>
  <body>
    <div class="container-scroller">
     @include('Layouts._sideNavBar')
      <div class="container-fluid page-body-wrapper">
      @include('Layouts._navbar')
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')  
          </div>
         @include('Layouts._footer')
        </div>
      </div>
    </div>
    @include('Layouts._scripts')
  </body>
</html>