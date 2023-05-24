@extends('front.layout.app')

@section('main_content')
<div class="slider">
    <div class="slide-carousel owl-carousel">
        @foreach($slide_all as $item)
        <div class="item" style="background-image:url({{ asset('uploads/'.$item->photo) }});">
            <div class="bg"></div>
            <div class="text">
                <h2>{{ $item->heading }}</h2>
                <p>
                    {!! $item->text !!}
                </p>
                @if($item->button_text != '')
                <div class="button">
                    <a href="{{ $item->button_url }}">{{ $item->button_text }}</a>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

 
<div class="search-section">
    <div class="container">
        <form action="{{ route('cart_submit') }}" method="post">
            @csrf
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <select name="room_id" class="form-select">
                                <option value="">Select Room</option>
                                @foreach($room_all as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" name="checkin_checkout" class="form-control daterange1" placeholder="Checkin & Checkout">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="number" name="adult" class="form-control" min="1" max="30" placeholder="Adults">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="number" name="children" class="form-control" min="0" max="30" placeholder="Children">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a href=""><button type="submit" class="btn btn-primary">Search</button></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



@if($global_setting_data->home_feature_status == 'Show')
<div class="home-feature">
    <div class="container">
        <div class="row">
            
            @foreach($feature_all as $item)
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class = '{{ $item->icon }}'></i></div>
                    <div class="text">
                        <h2>{{ $item->heading }}</h2>
                        <p>
                            {!! $item->text !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endif



@if($global_setting_data->home_room_status == 'Show')
<div class="home-rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Rooms and Suites</h2>
            </div>
        </div>
        <div class="row">
            @foreach($room_all as $item)
            @if($loop->iteration>$global_setting_data->home_room_total) 
            @break
            @endif
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="{{ asset('uploads/'.$item->featured_photo) }}" alt="resort featured image" class="img-fluid rounded-top-2">
                    </div>
                    <div class="text">
                        <h2><a href="{{ route('room_detail',$item->id) }}">{{ $item->name }}</a></h2>
                        <div class="room-size">
                            <i class="bx bx-area"> {{ $item->size }}</i>
                        </div>
                        <div class="room-guest">
                            <i class="bx bx-group"> Good for {{ $item->total_guests }}  people</i>
                        </div>
                        <div class="bed">
                            <i class="bx bx-bed"> {{ $item->total_beds }}</i>
                        </div>
                        <div class="price lead">
                            <i class="bx bx-money"> ₱{{ number_format($item->price, 2, '.', ',') }}/day</i>  
                        </div>
                        <div class="button">
                            <a href="{{ route('room_detail',$item->id) }}" class="btn btn-primary text-white"><i class="fa fa-eye"></i> View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="big-button">
                    <a href="{{ route('room') }}" class="btn btn-primary">See All Rooms</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if($global_setting_data->home_testimonial_status == 'Show')
<div class="testimonial" style="background-image: url(uploads/happy-customers.jpg)">
    <div class="bg"></div>
    <div class="container"></div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Our Happy Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">
                    @foreach($testimonial_all as $item)
                    <div class="item">
                        <div class="photo">
                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="user photo" class="img-fluid rounded-circle">
                        </div>
                        <div class="text">
                            <h4>{{ $item->name }}</h4>
                            <p>{{ $item->designation }}</p>
                        </div>
                        <div class="description">
                            <p>
                                {!! $item->comment !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif


{{-- <section class="rooms" style="background: linear-gradient(to right,#FEFAE0,transparent),url('./uploads/DR_2.jpg');">
    <div class="container">
        <div class="rooms-content d-flex flex-column justify-content-center gap-4">
            <div class="title col-lg-3" style="border-left: 6px solid #E38B29; padding-left: .6rem; color:#1A5F7A">
                <h3 style="letter-spacing:0.15em; font-size:20px">ROOMS AND VILLAS</h3>
                <h2><em>Comfort away from home</em></h2>
            </div>
            <div class="col-lg-8">
                <p class="text-lg-start">
                    Bayangan Hotel and Beach Resort offers a selection of beautifully designed guest rooms, including accessible options.
                    Each guest room and suite is thoughtfully appointed with premium features such as granite countertops, luxurious linens, 
                    a 55" flat-screen TV, complimentary Wi-Fi, upscale bath amenities, and plush bathrobes. 
                    Moreover, the majority of rooms boast stunning views of the marina from private 
                    balconies or outdoor patio areas, providing a picturesque setting to relax and unwind.
                </p>
                <button class="btn btn_view rounded-0 text-white" style="background-color: #E38B29">BOOK ROOMS</button>
            </div>
        </div>
    </div>
</section> --}}


@if($global_setting_data->home_latest_post_status == 'Show')
<div class="blog-item">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Latest Posts</h2>
            </div>
        </div>
        <div class="row">

            @foreach($post_all as $item)
            @if($loop->iteration>$global_setting_data->home_latest_post_total) 
            @break
            @endif
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="{{ asset('uploads/'.$item->photo) }}" alt="blog featured image" class="img-fluid rounded">
                    </div>
                    <div class="text">
                        <h2><a href="{{ route('post',$item->id) }}">{{ $item->heading }}</a></h2>
                        <div class="short-des">
                            <p>
                                {!! $item->short_content !!}
                            </p>
                        </div>
                        <div class="button">
                            <a href="{{ route('post',$item->id) }}" class="btn btn-primary text-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@endif

<section class="weddings">
    <div>
        <div class="weddings__content d-flex flex-column flex-lg-row justify-content-center align-items-center">
            <div class="col p-0 left_content" style="background-image:url('./uploads/wedding.jpg');">
                <div class="overlay d-flex flex-column justify-content-center text-center align-items-center gap-4">
                    <h1 class="text-white">Weddings</h1>
                    <p class="w-75" style="color:white">Plan a sophisticated and memorable weddings both indoors and outdoors, offering spectacular views of the ocean, beaches, and landscapes of Labason, Zamboanga del Norte. Bayanagan Hotel and Beach Resort is a one-of-a-kind destination for your special day.</p>
                    <button class="btn view_details rounded-0 text-white" style="background-color: #E38B29">VIEW DETAILS</button>
                </div>
            </div>
            <div class="col right_content" style="background-image: url('./uploads/events.jpg') ">
                <div class="overlay d-flex flex-column justify-content-center text-center align-items-center gap-4">
                    <h1>Events</h1>
                    <p class="w-75">Ideal for your groups and events, Bayangan Hotel and Beach Resort features a professional function room with ocean views and has a beautiful patio on the beach.</p>
                    <button class="btn view_details rounded-0 text-white" style="background-color: #E38B29">VIEW DETAILS</button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="location" style="background-color: #FEFAE0; color: #1A5F7A">
    <div class="container">
        <div class="location_content d-flex flex-column justify-content-center gap-4" style="min-height: 100vh">
            <div class="title" style="border-left: 6px solid #E38B29; padding-left: .6rem">
                <h3 class="text-md-start" style="letter-spacing:0.15em; font-size:20px">LOCATION</h3>
                <h1 class="text-md-start">See Zamboanga del Norte</h1>
            </div>
            <div>
                <p class="text-md-start w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est veritatis
                    asperiores, delectus accusamus aut esse consectetur nisi, debitis quibusdam,
                    laborum unde atque excepturi maxime. Laboriosam, illum quia culpa quasi
                    doloremque iusto aperiam placeat omnis, obcaecati quae, fuga labore rem veniam?</p>
                    <button class="btn btn__explore rounded-0 text-white" style="background-color: #E38B29">Explore</button>
            </div>
            
        </div>
    </div>
</section> --}}

<div class="overflow-hidden">
        <div class="row d-flex flex-wrap gallery__content">
            <div class="col-6 col-md overflow-hidden p-0 ">
                <img src="{{ asset('uploads/hero_sec.jpg') }}" alt="" class="w-100 h-100">
            </div>
            <div class="col-6 col-md overflow-hidden d-flex justify-content-center align-items-center p-0 2nd_col" style="background-color: #FEFAE0; color:#1A5F7A">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="title" style="letter-spacing:0.15em; font-size:20px">GALLERY</div>
                    <h2 class="lead fs-3 fw-bold px-3">Catch a Glimpse</h2>
                    <a href="{{ route('photo_gallery') }}"><button class="btn btn-seemore rounded text-white" style="background-color: #E38B29">SEE MORE</button></a>
                </div>
            </div>
            <div class="col-6 col-md overflow-hidden p-0 ">
                <img src="{{ asset('uploads/diving.jpg') }}" alt="Diving" class="w-100 h-100">
            </div>
            <div class="col-6 col-md overflow-hidden p-0 ">
                <img src="{{ asset('uploads/dishImg.jpg') }}" alt="Cuisine" class="w-100 h-100">
            </div>
        </div>
</div>



@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}',
            });
        </script>
    @endforeach
@endif

@endsection