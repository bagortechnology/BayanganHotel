<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Hotel Admin</a> 
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="bx bxs-dashboard bx-tada-hover"></i> <span>Dashboard</span></a></li>

            <li class="{{ Request::is('admin/setting') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_setting') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Setting"><i class="bx bx-cog bx-tada-hover"></i> <span>Setting</span></a></li>

            <li class="{{ Request::is('admin/edit-profile') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_profile') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Edit Profile"><i class="bx bx-user-plus bx-tada-hover"></i> <span>Edit Profile</span></a></li>

            <li class="{{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View Website"><i class="fa fa-eye"></i> <span>View Website</span></a></li>

            <li class="{{ Request::is('admin/customers') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_customer') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Customers"><i class="bx bxs-user-rectangle bx-tada-hover"></i> <span>Customers</span></a></li>

            <li class="{{ Request::is('admin/order/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_orders') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Bookings"><i class="bx bxs-book bx-tada-hover"></i> <span>Bookings</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/amenity/view')||Request::is('admin/room/view') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="bx bx-hotel bx-tada-hover"></i><span>Room Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/amenity/view') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_amenity_view') }}"><i class="fa fa-angle-right"></i> Amenities</a></li>

                    <li class="{{ Request::is('admin/room/view') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_room_view') }}"><i class="fa fa-angle-right"></i> Rooms</a></li>
                </ul>
            </li>


            <li class="{{ Request::is('admin/datewise-rooms') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_datewise_rooms') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="bx bx-calendar-star bx-tada-hover"></i> <span>Datewise Rooms</span></a></li>


            <li class="nav-item dropdown {{ Request::is('admin/page/about')||Request::is('admin/page/terms')||Request::is('admin/page/privacy')||Request::is('admin/page/contact')||Request::is('admin/page/photo-gallery')||Request::is('admin/page/video-gallery')||Request::is('admin/page/faq')||Request::is('admin/page/blog')||Request::is('admin/page/room')||Request::is('admin/page/cart')||Request::is('admin/page/checkout')||Request::is('admin/page/payment')||Request::is('admin/page/signup')||Request::is('admin/page/signin')||Request::is('admin/page/forget-password')||Request::is('admin/page/reset-password') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="bx bxs-parking bx-tada-hover"></i><span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/page/about') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_about') }}"><i class="fa fa-angle-right"></i> About</a></li>

                    <li class="{{ Request::is('admin/page/terms') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_terms') }}"><i class="fa fa-angle-right"></i> Terms and Conditions</a></li>

                    <li class="{{ Request::is('admin/page/privacy') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_privacy') }}"><i class="fa fa-angle-right"></i> Privacy Policy</a></li>

                    <li class="{{ Request::is('admin/page/contact') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_contact') }}"><i class="fa fa-angle-right"></i> Contact</a></li>

                    <li class="{{ Request::is('admin/page/photo-gallery') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_photo_gallery') }}"><i class="fa fa-angle-right"></i> Photo Gallery</a></li>

                    <li class="{{ Request::is('admin/page/video-gallery') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_video_gallery') }}"><i class="fa fa-angle-right"></i> Video Gallery</a></li>

                    <li class="{{ Request::is('admin/page/faq') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_faq') }}"><i class="fa fa-angle-right"></i> FAQ</a></li>

                    <li class="{{ Request::is('admin/page/blog') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_blog') }}"><i class="fa fa-angle-right"></i> Blog</a></li>

                    <li class="{{ Request::is('admin/page/room') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_room') }}"><i class="fa fa-angle-right"></i> Room</a></li>

                    <li class="{{ Request::is('admin/page/cart') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_cart') }}"><i class="fa fa-angle-right"></i>Bookings</a></li>

                    <li class="{{ Request::is('admin/page/checkout') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_checkout') }}"><i class="fa fa-angle-right"></i> Checkout</a></li>

                    <li class="{{ Request::is('admin/page/payment') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_payment') }}"><i class="fa fa-angle-right"></i> Payment</a></li>

                    <li class="{{ Request::is('admin/page/signup') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_signup') }}"><i class="fa fa-angle-right"></i> Sign Up</a></li>

                    <li class="{{ Request::is('admin/page/signin') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_signin') }}"><i class="fa fa-angle-right"></i> Sign In</a></li>

                    <li class="{{ Request::is('admin/page/forget-password') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_forget_password') }}"><i class="fa fa-angle-right"></i> Forget Password</a></li>

                    <li class="{{ Request::is('admin/page/reset-password') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_page_reset_password') }}"><i class="fa fa-angle-right"></i> Reset Password</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is('admin/subscriber/show')||Request::is('admin/subscriber/send-email') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="bx bx-conversation bx-tada-hover"></i><span>Subscribers</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('admin/subscriber/show') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_subscriber_show') }}"><i class="fa fa-angle-right"></i> All Subscribers</a></li>

                    <li class="{{ Request::is('admin/subscriber/send-email') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_subscriber_send_email') }}"><i class="fa fa-angle-right"></i> Send Email</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is('admin/photo/*')||Request::is('admin/video/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="bx bx-camera-home bx-tada-hover"></i><span>Gallery</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('admin/photo/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_photo_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Photo Gallery"><i class="fa fa-angle-right"></i> <span>Photos</span></a></li>

                     <li class="{{ Request::is('admin/video/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_video_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Video Gallery"><i class="fa fa-angle-right"></i> <span>Videos</span></a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is('admin/slide/*')||Request::is('admin/feature/*')||Request::is('admin/testimonial/*') ? 'active' : ''}}">
                <a href="#" class="nav-link has-dropdown"><i class="bx bx-home-smile bx-tada-hover"></i><span>Home Section</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('admin/slide/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_slide_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Slide"><i class="fa fa-angle-right"></i> <span>Slides</span></a></li>

                    <li class="{{ Request::is('admin/feature/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_feature_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Feature"><i class="fa fa-angle-right"></i> <span>Features</span></a></li>
        
                    <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_testimonial_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Testimonial"><i class="fa fa-angle-right"></i> <span>Testimonials</span></a></li>
                </ul>
            </li>


            <li class="{{ Request::is('admin/post/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_post_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Post"><i class="bx bxs-pencil bx-tada-hover"></i> <span>Articles</span></a></li>
            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="FAQ"><i class="bx bx-question-mark bx-tada-hover"></i> <span>FAQ</span></a></li>
            <li class="{{ Request::is('admin/logout') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_logout') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Logout"><i class="bx bx-log-out bx-rotate-180" style="color: #ff0000"></i> <span>Logout</span></a></li>






            

        </ul>
    </aside>
</div>