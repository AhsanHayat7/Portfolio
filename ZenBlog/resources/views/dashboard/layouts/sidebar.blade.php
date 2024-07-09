<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{ route('home') }}">
        <img src="{{ asset('dashboard/assets/images/logo.svg') }}" alt="logo" />
      </a>
      <a class="sidebar-brand brand-logo-mini" href="{{ route('home') }}">
        <img src="{{ asset('dashboard/assets/images/logo-mini.svg') }}" alt="logo" />
      </a>
    </div>
    <ul class="nav flex-column">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle" src="{{ asset('dashboard/assets/images/faces/face15.jpg') }}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-dots-vertical"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profile-dropdown">
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-settings text-primary"></i>
              <span>Account settings</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-onepassword text-info"></i>
              <span>Change Password</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-calendar-today text-success"></i>
              <span>To-do list</span>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('home')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Post</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('table')}}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">All Post</span>
          </a>
      </li>
    </ul>
  </nav>
