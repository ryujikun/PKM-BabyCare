<nav class="light-blue lighten-1" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">


      @if(!Auth::user())
          <li><a href="{{ url('/login') }}">Log In</a>
          <li><a href="{{ url('/register') }}">Register</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
          <li><a href="{{ url('/login') }}">Log In</a>
          <li><a href="{{ url('/register') }}">Register</a></li>
      </ul>
      @elseif(Auth::user()->isMommy())
      <li><a href="{{ url('dokterpeduli') }}">Dokter Peduli</a></li>
      <li><a href="{{ url('explore') }}">Explore</a></li>
      <li><a href="{{ url('babyzone') }}">Zona Bayi</a></li>
      <li><a href="{{ url('motherzone') }}">Zona Ibu</a></li>
      <li><a href="{{ url('pertumbuhanku') }}">Pertumbuhanku</a></li>
      <li><a href="{{ url('ibusiaga') }}">Ibu Siaga</a></li>
        <li><a href="{{ url('logout') }}">Logout</a></li>
    </ul>

    <ul id="nav-mobile" class="side-nav">
      <li><a href="{{ url('dokterpeduli') }}">Dokter Peduli</a></li>
      <li><a href="{{ url('explore') }}">Explore</a></li>
      <li><a href="{{ url('babyzone') }}">Zona Bayi</a></li>
      <li><a href="{{ url('motherzone') }}">Zona Ibu</a></li>
      <li><a href="{{ url('pertumbuhanku') }}">Pertumbuhanku</a></li>
      <li><a href="{{ url('ibusiaga') }}">Ibu Siaga</a></li>
        <li><a href="{{ url('logout') }}">Logout</a></li>
    </ul>
      @elseif(Auth::user()->isDoctor())
      <li><a href="{{ url('questions/answer') }}">Jawab Pertanyaan</a></li>
      <li><a href="{{ url('questions') }}">Daftar Pertanyaan</a></li>
      <li><a href="{{ url('logout') }}">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
      <li><a href="{{ url('questions/answer') }}">Jawab Pertanyaan</a></li>
      <li><a href="{{ url('questions') }}">Daftar Pertanyaan</a></li>
      <li><a href="{{ url('logout') }}">Logout</a></li>
      </ul>
    @elseif(Auth::user()->isKader())
      <li><a href="{{ url('babydata') }}">Masukkan Data Bayi</a></li>
      <li><a href="{{ url('logout') }}">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
      <li><a href="{{ url('babydata') }}">Masukkan Data Bayi</a></li>
      <li><a href="{{ url('logout') }}">Logout</a></li>
      </ul>
    @endif
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>