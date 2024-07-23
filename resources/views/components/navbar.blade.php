<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo" href="{{ route('user.user_dashboard') }}"><img src="{{ asset('assets/images/logo.svg')}}" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('user.user_dashboard') }}">
            <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /> </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <div class="search-field d-none d-md-block">
      <form class="d-flex align-items-center h-100" action="#">
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
          </div>
        </div>
      </form>
    </div>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile">
        <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img">
            <img src="{{ asset('assets/images/faces/face1.jpg')}}" alt="image">
            <span class="availability-status online"></span>
          </div>
          <div class="nav-profile-text">
            <p class="mb-1 text-black">{{ auth()->user()->name }}</p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-logout d-none d-lg-block">
        <a class="nav-link" href="#">
          <i class="mdi mdi-account-cog-outline"></i>
        </a>
      </li>
      <li class="nav-item nav-logout d-none d-lg-block">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="mdi mdi-power"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>