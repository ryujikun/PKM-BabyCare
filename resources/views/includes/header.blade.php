
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>
    @yield('page-title')
  </title>

  <!-- CSS  -->
  <link href="{{ url('assets/css/materialicons.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/ghpages-materialize.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/materialize.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

  <style>

    /* fallback */
    @font-face {
      font-family: 'Material Icons';
      font-style: normal;
      font-weight: 400;
      src: local('Material Icons'), local('MaterialIcons-Regular'), url({{ url('icon.woff2') }}) format('woff2');
    }

    .material-icons {
      font-family: 'Material Icons';
      font-weight: normal;
      font-style: normal;
      font-size: 24px;
      line-height: 1;
      letter-spacing: normal;
      text-transform: none;
      display: inline-block;
      white-space: nowrap;
      word-wrap: normal;
      direction: ltr;
      -webkit-font-feature-settings: 'liga';
      -webkit-font-smoothing: antialiased;
    }
  </style>