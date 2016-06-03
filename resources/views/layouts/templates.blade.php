<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.scripts')
    @include('includes.header')

</head>
<body>

    @include('partials.nav')

    @yield('content')



  <!-- Footer -->
  @include('includes.footer')

  @yield('custom_foot')
  </body>
</html>
