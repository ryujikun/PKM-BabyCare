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
    <div class="row" style="bottom:0!important; margin-top:35rem; background:none">
        <a class="col s12 l5 btn btn-large left" href="{{ url('register') }}">
            <strong>Register</strong>
        </a>

        <a   class="col s12 l5 btn btn-large right" href="{{ url('login') }}">
            <strong>Login</strong>
        </a>

    </div>
<!-- /.container -->
</div>
<!--/. Page content -->

@yield('custom_foot')



</body>

</html>