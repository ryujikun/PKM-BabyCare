<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')

    <link rel='stylesheet' href='{{ url("assets/css/loginstyle.css") }}'
</head>

<body>

<div id="main-carousel" class="carousel slide carousel-fade carousel-bg">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item active">
                <div class="carousel-caption">
                    <div class="verticalcenter">
                        <div class="animated fadeInDown">
                            <h4>Material Design for Bootstrap</h4>
                            <h5>The best and free framework for Bootstrap</h5>
                            <a href="http://mdbootstrap.com/material-design-for-bootstrap/" target="_blank" class="btn btn-default btn-stc waves-effect waves-light"><i class="fa fa-download right"></i>Get started</a>
                            <a href="http://mdbootstrap.com/product/material-design-for-bootstrap-pro/" target="_blank" class="btn btn-primary btn-etc waves-effect waves-light"><i class="fa fa-star right"></i>Go Pro</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.First slide -->

        </div>
        <!-- /.carousel-inner -->


  <!-- Footer -->
  @include('includes.scripts')



</body>

</html>