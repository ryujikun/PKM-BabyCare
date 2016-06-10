<!DOCTYPE html>
<html lang="en">
<head>

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
<body>

@include('partials.nav-auth')
@yield('content')

<main>
</main>



        <!-- Footer -->
@include('includes.footer')
@include('includes.scripts')

@yield('custom_foot')
</body>
</html>
