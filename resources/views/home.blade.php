@extends('layouts.app')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('/images/sliders/h1-slider-backround-1.jpg')}}" alt="First slide">
      <div class="carousel-caption">
        <h1>
          We are childcare <br>
          professionals
        </h1>
        <p>
          We at Behave Care understand the importance of finding<br>
          a high-quality day care center for your little ones.
        </p>
        <button class="btn btn-default">Contact Us</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/images/sliders/h1-slider-backround-2.jpg')}}" alt="Second slide">
      <div class="carousel-caption">
        <h1>
          A warm, nurturing<br>
          environment 
        </h1>
        <p>
          our goal is to provide supreme child care & to maintain<br>
          a wonderful atmosphere that kids will enjoy.
        </p>
        <button class="btn btn-default">Contact Us</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/images/sliders/h1-slider-backround-3.jpg')}}" alt="Third slide">
      <div class="carousel-caption">
        <h1>
          Committed to <br>
          care & education
        </h1>
        <p>
          our caregivers adore working with kids & are highly trained <br>
          professionals who excel at what they do.
        </p>
        <button class="btn btn-default">Contact Us</button>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row text-center">
  <div class="col-md-10 col-md-offset-1">
    <div class="col-6 col-md-4"> 
      <img src="{{asset('/images/icon/icon-with-text-1.png')}}">
      <h3 class="service-heading">Baby Sitting</h3>
      <h4 class="text-muted">Lorem ipsum dolor sit amet velit , elitni legro int dolor.</h2>
    </div>
    <div class="col-6 col-md-4"> 
      <img src="{{asset('/images/icon/icon-with-text-2-100x100.png')}}">
      <h3 class="service-heading">Baby Shower</h3>
      <h4 class="text-muted">Lorem ipsum dolor sit amet velit , elitni legro int dolor.</h2>
    </div>
    <div class="col-6 col-md-4"> 
      <img src="{{asset('/images/icon/icon-with-text-3.png')}}">
      <h3 class="service-heading">Full-Time Nanny</h3>
      <h4 class="text-muted">Lorem ipsum dolor sit amet velit , elitni legro int dolor.</h2>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="col-md-6 ">
      <img class="d-block w-100" src="{{asset('/images/sliders/outside-3.jpg')}}" alt="Img">
    </div>
    <div class="col-md-6 bg-right-image">
      <h2><br>
        We are childcare <br>
        professionals
      </h2>
      <p>
        We at Behave Care understand the importance of finding<br>
        a high-quality day care center for your little ones.
        <br><br>
      </p>
      <button class="btn btn-default">Contact Us</button>
      <br>
    </div>
  </div>
</div>
<div class="container">
  <div class="row text-center">
    <div class="col-lg-12">
      <h2>Recommended Activities</h2>
      <h4>Find activity for your children</h4>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-10 col-md-offset-1">
      @foreach($places as $place)
      <div class="col-6 col-md-4">
        <a href="/content/{{ $place->kategori }}/{{ $place->id }}"><img class="d-block w-100" src="{{asset($place->file_path)}}" style="padding-left: 10px; padding-right: 10px;"></a>
      </div>
      @endforeach
  </div>
</div>
<div class="container">
  <div class="row text-center">
    <div class="col-lg-12">
      <h2>Our Location</h2>
    </div>
  </div>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="col-md-6 bg-right-image">
      <h3>
        Jl. Rasuna Said, RT.005/RW.001, Pakojan, Kec. Pinang, Kota Tangerang, Banten 15117
      </h3>
    </div>
    <div class="col-md-6">
      <div id="map"></div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function initMap(){
    const myLatLng = { lat: -6.213490, lng: 106.647893}
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 20,
      center: myLatLng,
      gestureHandling: "cooperative",
    });

    new google.maps.Marker({
      position: myLatLng,
      map,
    });
  }
  window.initMap = initMap;
</script>

<script async defer 
  src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"
  type="text/javascript"></script>
@endsection