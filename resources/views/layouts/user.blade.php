<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
  @include('includes.scripts')
</head>

<body>
  <!-- Navigation -->
  @include('partials.nav')

  <!-- Page content -->
  <div class="container page-content">
    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/project1.png">
            <span class="card-title">Video Maker</span>
          </div>
          <div class="card-content">
            <p>Some things just look better in motion and in the highly competitive world of fashion, finding an edge over the competition...</p>
          </div>
          <div class="card-action">
            <a href="http://mdbootstrap.com/product/magic-portfolio-for-video-maker/">
              <button type="button" class="btn btn-info waves-effect waves-light">Read more</button>
            </a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/project3.png">
            <span class="card-title">Creative Agency</span>
          </div>
          <div class="card-content">
            <p>Did you know that a strong brand is absolutely essential for generating sales and growth on Social Media? You may...</p>
          </div>
          <div class="card-action">
            <a href="http://mdbootstrap.com/product/magic-portfolio-for-creative-agency">
              <button type="button" class="btn btn-info waves-effect waves-light">Read more</button>
            </a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/project4.png">
            <span class="card-title">Photographer Portfolio</span>
          </div>
          <div class="card-content">
            <p>Photography is an art of observation. It’s about finding something interesting an ordinary place… I’ve found it has little to do with ...</p>
          </div>
          <div class="card-action">
            <a href="http://mdbootstrap.com/product/magic-portfolio-photographer/">
              <button type="button" class="btn btn-info waves-effect waves-light">Read more</button>
            </a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  </div>
  <!--/. Page content -->

  <!-- Footer -->
  @include('includes.footer')

  @yield('custom_foot')



</body>

</html>