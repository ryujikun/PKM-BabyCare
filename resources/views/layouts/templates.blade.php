<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.scripts')
    @include('includes.header')

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

    </style>

</head>
<body class="site">

    @include('partials.nav')
    @yield('content')
    <main>
</main>

  <!-- Footer -->
  @include('includes.footer')

  @yield('custom_foot')
  </body>
</html>
