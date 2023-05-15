<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('customer_home') }}">My Account</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('customer_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('customer/home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('customer_home') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
            <li class="{{ Request::is('customer/edit-profile') ? 'active' : '' }}"><a class="nav-link" href="{{ route('customer_profile') }}"><i class="fa fa-user-circle-o"></i> <span>My Profile</span></a></li>
            <li class="{{ Request::is('customer/order/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('customer_order_view') }}"><i class="fa fa-address-book-o"></i> <span>My Bookings</span></a></li>
            <li class="{{ Request::is('customer/logout') ? 'active' : '' }}"><a class="nav-link" href="{{ route('customer_logout') }}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>



        </ul>
    </aside>
</div>