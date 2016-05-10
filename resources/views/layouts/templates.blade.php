<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.header')

</head>
<body>

    @include('partials.nav')

    @yield('content')



  <!-- Footer -->
  @include('includes.footer')
  @include('includes.scripts')

  @yield('custom_foot')
  </body>
</html>
