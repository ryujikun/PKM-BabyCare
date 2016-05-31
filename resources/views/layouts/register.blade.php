<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body>
  <!-- Navigation -->
  @include('partials.nav')

  <!-- Page content -->
  <div class="container page-content">
    <div id="section1">
      <h2 class="doc-first">Register</h2>
      <div class="row">
        <form class="col-md-12">
          <div class="row">
              <input placeholder="Nama lengkap anda" name="name" id="Nama" type="text" class="validate">
              <label for="first_name">First Name</label>
          </div>
          <div class="row">
            <div class="input-field col-md-12">
              <input id="email" type="email" name='email' class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col-md-12">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container -->
  </div>
  <!--/. Page content -->

  <!-- Footer -->
  @include('includes.footer')
  @include('includes.scripts')

  @yield('custom-foot')



</body>

</html>