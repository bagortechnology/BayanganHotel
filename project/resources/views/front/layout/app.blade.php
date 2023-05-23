<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>Bayangan Resort</title>        
		
        <link rel="icon" type="image/png" href="{{ asset('uploads/'.$global_setting_data->favicon) }}">

        @include('front.layout.styles')

        @include('front.layout.scripts')        
        

        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&display=swap" rel="stylesheet">
        
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $global_setting_data->analytic_id }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ $global_setting_data->analytic_id }}');
        </script>

        <style>
            .main-nav nav .navbar-nav .nav-item a:hover,
            .main-nav nav .navbar-nav .nav-item:hover a,
            .slide-carousel.owl-carousel .owl-nav .owl-prev:hover, 
            .slide-carousel.owl-carousel .owl-nav .owl-next:hover,
            .home-feature .inner .icon i,
            .home-rooms .inner .text .price,
            .home-rooms .inner .text .button a,
            .blog-item .inner .text .button a,
            .room-detail-carousel.owl-carousel .owl-nav .owl-prev:hover, 
            .room-detail-carousel.owl-carousel .owl-nav .owl-next:hover {
                color: {{ $global_setting_data->theme_color_1 }};
            }

            .slider .text .button a:hover{
                background-color: {{ $global_setting_data->theme_color_2 }}!important;
            }

            .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover,
            .primary-color {
                color: {{ $global_setting_data->theme_color_1 }}!important;
            }

            .testimonial-carousel .owl-dots .owl-dot,
            .footer ul.social li a,
            .footer input[type="submit"],
            .scroll-top,
            .room-detail .right .widget .book-now {
                background-color: {{ $global_setting_data->theme_color_1 }};
            }

            .slider .text .button a:hover,
            .search-section button[type="submit"],
            .bg-website {
                background-color: {{ $global_setting_data->theme_color_1 }}!important;
            }

            .slide-carousel.owl-carousel .owl-nav .owl-prev:hover, 
            .slide-carousel.owl-carousel .owl-nav .owl-next:hover,
            .search-section button[type="submit"],
            .room-detail-carousel.owl-carousel .owl-nav .owl-prev:hover, 
            .room-detail-carousel.owl-carousel .owl-nav .owl-next:hover,
            .room-detail .amenity .item {
                border-color: {{ $global_setting_data->theme_color_1 }}!important;
            }

            .home-feature .inner .icon i,
            .slider .text .button a,
            .home-rooms .inner .text .button a,
            .blog-item .inner .text .button a,
            .home-rooms .big-button a,
            .room-detail .amenity .item,
            .cart .table-cart tr th {
                background-color: {{ $global_setting_data->theme_color_2 }}!important;
            }

            .home-rooms .inner .text .button a:hover,
            .blog-item .inner .text .button a:hover {
                background-color: {{ $global_setting_data->theme_color_1 }}!important;
                color: {{ $global_setting_data->theme_color_2 }};
            }

            .home-rooms .big-button a {
                border-color: {{ $global_setting_data->theme_color_2 }} !important;
            }
        </style>

    </head>
    <body>
        
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-side">
                        <ul>

                            @if($global_setting_data->top_bar_phone != '')
                            <li class="phone-text">{{ $global_setting_data->top_bar_phone }}</li>
                            @endif
                            
                            @if($global_setting_data->top_bar_email != '')
                            <li class="email-text">{{ $global_setting_data->top_bar_email }}</li>
                            @endif

                        </ul>
                    </div>
                    <div class="col-md-6 right-side">
                        <ul class="right">

                            @if($global_page_data->cart_status == 1)
                            <li class="menu"><a href="{{ route('cart') }}">{{ $global_page_data->cart_heading }} @if(session()->has('cart_room_id'))<sup>{{ count(session()->get('cart_room_id')) }}</sup>@endif</a></li>
                            @endif

                            @if($global_page_data->checkout_status == 1)
                            <li class="menu"><a href="{{ route('checkout') }}">{{ $global_page_data->checkout_heading }}</a></li>
                            @endif


                            @if(!Auth::guard('customer')->check())

                                @if($global_page_data->signup_status == 1)
                                <li class="menu"><a href="{{ route('customer_signup') }}">{{ $global_page_data->signup_heading }}</a></li>
                                @endif

                                @if($global_page_data->signin_status == 1)
                                <li class="menu"><a href="{{ route('customer_login') }}">{{ $global_page_data->signin_heading }}</a></li>
                                @endif

                            @else   

                                <li class="menu"><a href="{{ route('customer_home') }}">Dashboard</a></li>

                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area sticky-top" id="stickymenu">

            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('uploads/'.$global_setting_data->favicon) }}" alt="logo">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('uploads/'.$global_setting_data->logo) }}" alt="">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">        
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                                </li>

                                @if($global_page_data->about_status == 1)
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">{{ $global_page_data->about_heading }}</a>
                                </li>
                                @endif

                                <li class="nav-item">
                                    <a href="javascript:void;" class="nav-link dropdown-toggle">Your Stay</a>
                                    <ul class="dropdown-menu">
                                        @foreach($global_room_data as $item)
                                        <li class="nav-item">
                                            <a href="{{ route('room_detail',$item->id) }}" class="nav-link">{{ $item->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>


                                @if($global_page_data->photo_gallery_status == 1 || $global_page_data->video_gallery_status == 1)
                                <li class="nav-item">
                                    <a href="javascript:void;" class="nav-link dropdown-toggle">Gallery</a>
                                    <ul class="dropdown-menu">

                                        @if($global_page_data->photo_gallery_status == 1)
                                        <li class="nav-item">
                                            <a href="{{ route('photo_gallery') }}" class="nav-link">{{ $global_page_data->photo_gallery_heading }}</a>
                                        </li>
                                        @endif
                                        
                                        @if($global_page_data->video_gallery_status == 1)
                                        <li class="nav-item">
                                            <a href="{{ route('video_gallery') }}" class="nav-link">{{ $global_page_data->video_gallery_heading }}</a>
                                        </li>
                                        @endif

                                    </ul>
                                </li>
                                @endif


                                @if($global_page_data->blog_status == 1)
                                <li class="nav-item">
                                    <a href="{{ route('blog') }}" class="nav-link">{{ $global_page_data->blog_heading }}</a>
                                </li>
                                @endif

                                @if($global_page_data->contact_status == 1)
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">{{ $global_page_data->contact_heading }}</a>
                                </li>
                                @endif

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

        
        @yield('main_content')


       

    <footer>
        <section class="footer relative overflow-hidden">
            <div class="footer_content">
                <div class="row">
                    <div class="col col-lg-4" style="padding: 5rem 0; background: #FEFAE0;">
                        <div class="p-5 d-flex flex-column gap-3 text-center justify-content-center align-items-center">
                            <div class="logo d-flex flex-column">
                                <a href="/index.php" class="logo">
                                    <img src="./uploads/Bayangan Hotel Logo.png" alt="" width="140" height="150">
                                </a>
                                <span>Bayangan hotel</span>
                            </div>
                        
                        </div>
                    </div>
                    <div class=" col-md-12 col-lg-8" style="padding: 5rem 0; background: #1A5F7A;">
                        <div class="row px-5">
                            <div class="col-md-6 p-0">
                                <ul class="list-unstyled plan d-flex justify-content-center flex-column gap-2">
                                    <h4 class="plan_footer" style="border-left: 5px solid #E38B29; color:#FEFAE0; padding-left: .8rem;">PLAN YOUR VISIT</h4>
                                    <li class="nav-item"><a href="#" class="nav-link" style="color:#FEFAE0;">Getting here</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link" style="color:#FEFAE0;">Visitor services</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link" style="color:#FEFAE0;">About</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link" style="color:#FEFAE0;">Contact us</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link" style="color:#FEFAE0;">Careers</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link" style="color:#FEFAE0;">FAQ</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link" style="color:#FEFAE0;">Terms of use</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link" style="color:#FEFAE0;">Privacy notice</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 p-0 mt-4 mt-md-0">
                                <div class="d-flex flex-column gap-4">
                                    <ul class="list-unstyled">
                                        <h4 class="hotel_footer" style="border-left: 5px solid #E38B29; color:#FEFAE0; padding-left: .8rem;">HOTEL RESERVATIONS</h4>
                                        <li class="nav-item d-flex gap-2">
                                            
                                            <span class="text-white"">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px; padding-right: .4rem" class="ionicon" viewBox="0 0 512 512"><path d="M451 374c-15.88-16-54.34-39.35-73-48.76-24.3-12.24-26.3-13.24-45.4.95-12.74 9.47-21.21 17.93-36.12 14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48 5.41-23.23 14.79-36c13.22-18 12.22-21 .92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9 44 119.9 47 108.83 51.6A160.15 160.15 0 0083 65.37C67 76 58.12 84.83 51.91 98.1s-9 44.38 23.07 102.64 54.57 88.05 101.14 134.49S258.5 406.64 310.85 436c64.76 36.27 89.6 29.2 102.91 23s22.18-15 32.83-31a159.09 159.09 0 0013.8-25.8C465 391.17 468 391.17 451 374z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                1111-222-333</span>
                                        </li>
                                        <li class="nav-item d-flex gap-2">
                                            
                                            <span class="text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px; padding-right: .4rem" class="ionicon" viewBox="0 0 512 512"><rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 160l144 112 144-112"/></svg>
                                                bayangan@example.com</span>
                                        </li>
                                    </ul>
                                    <div class="subscribe input-group">
                                        <form action="{{ route('subscriber_send_email') }}" method="post" class="form_subscribe_ajax">
                                        @csrf
                                        <div class="input-group">
                                            <span class="text-danger error-text email_error"></span>
                                            <input type="text" name="email" class="border-0 py-2" style="padding-left: .4rem" placeholder="email">
                                            <input type="submit" class="border-0 py-2" value="Subscribe Now" style="background-color: #E38B29; color: #FEFAE0">
                                        </div>
                                
                            </form>
                                    </div>
                                </div>
                                <div>
                                    <p class="subscribing-info col-lg-8 mt-4" style="font-size:10px; letter-spacing:0.15em">*By subscribing, you agree to receive marketing email messages from Bayangan Hotel 
                                    and Beach Resort at the email address provided. Unsubscribe at any time. View our 
                                    Privacy Policy and Terms of Services</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <div class="d-flex justify-content-center align-items-center">
        <p class="m-0 py-2 w-100 text-center" style="font-size: 12px;background-color: #406b7c; color: #ffffff ">© 2023 Bayangan Hotel and Beach Resort. All rights Reserved.</p>
    </div>
    
    

        <script>
            (function($){
                $(".form_subscribe_ajax").on('submit', function(e){
                    e.preventDefault();
                    $('#loader').show();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        beforeSend:function(){
                            $(form).find('span.error-text').text('');
                        },
                        success:function(data)
                        {
                            $('#loader').hide();
                            if(data.code == 0)
                            {
                                $.each(data.error_message, function(prefix, val) {
                                    $(form).find('span.'+prefix+'_error').text(val[0]);
                                });
                            }
                            else if(data.code == 1)
                            {
                                $(form)[0].reset();
                                iziToast.success({
                                    title: '',
                                    position: 'topRight',
                                    message: data.success_message,
                                });
                            }
                            
                        }
                    });
                });
            })(jQuery);
        </script>
        <div id="loader"></div>
		
   </body>
</html>