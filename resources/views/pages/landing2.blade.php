
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BabyCare</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ url('mdb.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ url('style.css') }}" rel="stylesheet">

    <style>

        .full-bg-img {
            background: url("{{ url('images/web/Web.png')  }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>

<body>

<!-- Intro image -->
<section class="full-bg-img">
    <div class="container">
        <div class="space-30"></div>
        <div class="space-30"></div>
        <div class="text-center" style="bottom:0!important">
            <div class="">
                <div class="animated fadeInDown white-text">
                    <h4>BabyCare</h4>
                    <a href="{{ url('register') }}" class="btn btn-default waves-effect waves-light">
                        <strong>
                            Register
                        </strong>
                    </a>
                    <a href="{{ url('login') }}" class="btn btn-primary waves-effect waves-light">
                        <strong>
                            Login
                        </strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/. Intro image -->


<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="{{ url('jquery.js') }}"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ url('bootstrap.min.js') }}"></script>

<!-- Material Design Bootstrap -->
<script type="text/javascript" src="{{ url('mdb.js') }}"></script>


</body>

</html>