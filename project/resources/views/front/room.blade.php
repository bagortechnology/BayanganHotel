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

<div class="home-rooms" style="background-color: #E38B29">
    <div class="container">
        <div class="row">
            @foreach($room_all as $item)
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
    </div>
</div>
@endsection