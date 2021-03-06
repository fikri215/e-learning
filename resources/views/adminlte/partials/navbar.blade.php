<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      @if (Route::has('login'))
      @auth
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/home') }}" class="nav-link">Home</a>
      </li>
      @else
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('login') }}" class="nav-link">Login</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('register') }} " class="nav-link">Register</a>
      </li>
      @endif
      @endauth
      @endif
    </ul>
  </nav>