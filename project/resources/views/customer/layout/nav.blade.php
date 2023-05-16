<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li>
        <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
          <i class="fa fa-bars"></i>
        </a>
      </li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right btn-block justify-content-end">
    <li class="nav-item">
      <a href="{{ route('home') }}" class="btn btn-warning">Return Home</a>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle nav-link-lg nav-link-user" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        @if(Auth::guard('customer')->user()->photo == '')
        <img alt="image" src="{{ asset('uploads/default.png') }}" class="rounded-circle mr-1">
        @else
        <img alt="image" src="{{ asset('uploads/'.Auth::guard('customer')->user()->photo) }}" class="rounded-circle mr-1">
        @endif
        <div class="d-sm-none d-lg-inline-block">{{ Auth::guard('customer')->user()->name }}</div>
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
        <li><a href="{{ route('customer_profile') }}" class="dropdown-item has-icon"><i class="fa fa-user"></i> Edit Profile</a></li>
        <li><a href="{{ route('customer_logout') }}" class="dropdown-item has-icon text-danger"><i class="fa fa-sign-out"></i> Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
