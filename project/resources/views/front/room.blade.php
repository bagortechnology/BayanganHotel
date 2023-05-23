@extends('front.layout.app')

@section('main_content')
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $global_page_data->room_heading }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="home-rooms_all">
    <div class="container my-3">
        @foreach($room_all as $item)
        <div class="row">
            <div class="col-md-4 mb-3 mx-lg-0">
                <img src="{{ asset('uploads/' .$item->featured_photo) }}" class="img-fluid" alt="Room Image">
              </div>
              <div class="col-md-4 room-name mb-2">
                <h3 class="lead fs-4 fw-bold"><a href="{{ route('room_detail',$item->id) }}">{{ $item->name }}</a></h3>
                <div class="small fs-5">
                <div class="room-size">
                    <i class="bx bx-area"> {{ $item->size }}</i>
                </div>
                <div class="room-guest mb-2">
                    <i class="bx bx-group"> Good for {{ $item->total_guests }}  people</i>
                </div>
                <div class="bed mb-2">
                    <i class="bx bx-bed"> {{ $item->total_beds }}</i>
                </div>
               </div>
                <div class="small">Includes amenities afforded to lower room types.</div>
              </div>
              <div class="col-md-4">
                <h4>Price Details</h4>
                <p>Starting from $200 per night</p>
                <a href="{{ route('room_detail' ,$item->id) }}" class="btn btn-primary">SELECT ROOM</a>
              </div>
            </div>
        @endforeach
        </div>
</div>
@endsection