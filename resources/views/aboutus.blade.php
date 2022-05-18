@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="col-md-6 ">
      <img class="d-block w-100" src="{{ asset('/images/full-logo.png')}}" alt="fullLogo" 
      style="height: 300px;">
    </div>
    <div class="col-md-6 bg-right-image">
      <h2>
        We are childcare <br>
        professionals
      </h2>
      <p>
        We at Behave Care understand the importance of finding<br>
        a high-quality day care center for your little ones.
      </p>
      <button class="btn btn-default">Contact Us</button>
    </div>
  </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
            <h2>About Us</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="padding: 20px; font-size:14pt;">
            <p>
                Behave Care is a website that provides options regarding games or hobbies of children outside the home. Behave Care will help children to learn, play, and communicate with other children of the same age and have the same fun. In addition, Behave Care can also be used as a means to increase knowledge.
                <br><br>
                Even though they are outside the home, Behave Care keeps children safe, and is under the supervision of experienced people, and can also be supervised by their own parents.
            </p>
        </div>
    </div>
</div>

<div class="container">
  <div class="row text-center">
    <div class="col-lg-12">
      <h2>Vision and Mission</h2>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <div class="col-4"> 
        <img src="{{asset('/images/icon/icon-vision.png')}}">
        <h3 class="service-heading">Vision</h3>
        <h4 class="text-muted">Help parents who are busy but their children can still be cared for and your children can play while learning while parents are busy with their work.</h2>
      </div>
      <div class="col-4"> 
        <img src="{{asset('/images/icon/icon-mission.png')}}">
        <h3 class="service-heading">Mission</h3>
        <h4 class="text-muted">We will be a place that can offer activities for your children. and Behave Care also provides quality venues.</h2>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row text-center">
    <div class="col-lg-12">
      <h2>Founder</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-6 ">
        <img class="d-block w-100" src="{{ asset('/images/cynthia.jpeg')}}" alt="fullLogo" 
        style="height: 311px;">
      </div>
      <div class="col-md-6">
        <h2>
            <br>
          Cynthia Susanty Priyana
        </h2>
        <p>
            Mahasiswi Bina Nusantara University. Berbekal banyak pengalaman selama bekerja.
            Cynthia kemudian mencoba untuk mendirikan Behave Care pada tahun 2022 bersama teman kuliahnya.
          <br><br><br><br>
        </p>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-6">
        <h2>
        <br>
          Dina Silvia Sutarya
        </h2>
        <p>
          Mahasiswi Bina Nusantara University. Berbekal pengalaman sebagai pendidik (guru),
          Dina kemudian mencoba untuk mendirikan Behave Care pada tahun 2022 bersama teman kuliahnya.
          <br><br><br><br>
        </p>
      </div>  
      <div class="col-md-6 ">
        <img class="d-block w-100" src="{{ asset('/images/dina.jpeg')}}" alt="fullLogo" 
        style="height: 337px;">
      </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-6 ">
        <img class="d-block w-100" src="{{ asset('/images/dini.jpeg')}}" alt="fullLogo" 
        style="height: 337px;">
      </div>
      <div class="col-md-6">
        <h2>
        <br>
          Dini Suryani
        </h2>
        <p>
          Mahasiswi Bina Nusantara University. Berbekal banyak pengalaman selama bekerja.
          Dini kemudian mencoba untuk mendirikan Behave Care pada tahun 2022 bersama teman kuliahnya.
          <br><br><br><br><br>
        </p>
      </div>
    </div>
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