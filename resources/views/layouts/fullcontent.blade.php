@extends('layouts.app')

@section('content')
@include('partials.content_form_errors')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-4 col-md-offset-1">
            <img class="d-block w-100" src="{{ asset($places->file_path) }}" alt="fullLogo" 
            style="height: 300px;">
        </div>
        <div class="col-md-6">
            <h2>
                {{ $places->nama }}
            </h2>
            <p>
                Rp {{ $places->harga }} /day or Rp {{ $places->harga_paket }} /week<br>
                {{ $places->full_ket }}
            </p>
            @guest
                <a href="/buy/content/{{ $places->id }}/error" class="btn btn-default">Book Now</a>
            @else
                <a href="/buy/content/{{ $places->id }}" class="btn btn-default">Book Now</a>
            @endguest
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-12">
                <p>{{ $places->short_ket }}</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
            <h2>Capture Moment</h2>
        </div>
        <div class="col-md-10 col-md-offset-1">
            @foreach($captures as $capture)
                @if($capture->id_barang == $places->id)
                    <div class="col-6 col-md-4"> 
                        <img class="d-block w-100" src="{{ asset($capture->file_path) }}" style="padding-left: 10px; padding-right: 10px;">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
            <h2>Review</h2>
        </div>
        <div class="col-md-10 col-md-offset-1">
            @foreach($reviews as $review)
                @if($review->id_barang == $places->id)
                    <div class="col-6 col-md-4"> 
                        <h6>{{ $review->created_at }}</h6>
                        <h6>{{ $review->nama }}</h6>
                        <h4>{{ $review->comment }}</h4>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-6 bg-right-image" style="height: 500px;">
            <div style="margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                <h3>
                    {{ $places->alamat }}
                </h3>
            </div>
        </div>
        <div class="col-md-6">
            <img class="d-block w-100" src="{{ asset($places->gmaps) }}" alt="fullLogo" style="height: 500px; width: auto;">
        </div>
    </div>
</div>
@endsection