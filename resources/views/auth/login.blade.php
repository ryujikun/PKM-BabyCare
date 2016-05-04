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
                    <div style=''>
                        <div class="animated fadeInDown">
                              <h4>Login</h4>
                              <form class="col-md-4 ">
                                  <div class="input-field ">
                                    <input id="email" type="email" class="validate">
                                    <label>Email</label>
                                  </div>
                                  <div class="input-field">
                                    <input id="password" type="password" class="validate">
                                    <label>Password</label>
                                  </div>
                              </form>
                            
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