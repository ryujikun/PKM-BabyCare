<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    @include('includes.scripts')
    <style>
        body{
            background: url({{ url('images/web/Web.png') }}) no-repeat center center fixed!important;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .container{
            background: url({{ url('images/web/Web.png') }}) no-repeat center center fixed!important;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body>
        <!-- Page content -->
<div class="container">
    <div class="row" style="bottom:0!important; margin-top:38rem; background:none">
        <a class="col s5 l5 btn btn-large left white blue-text" href="{{ url('register') }}">
            <strong>Daftar</strong>
        </a>

        <a   class="col s5 l5 btn btn-large right white blue-text" href="{{ url('login') }}">
            <strong>Login</strong>
        </a>

    </div>
<!-- /.container -->
</div>
<!--/. Page content -->

@yield('custom_foot')



</body>

</html>