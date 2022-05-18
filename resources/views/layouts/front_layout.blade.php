<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Domowe Przedszkole Kubusia Puchatka</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/storage/favicon_images/{{$site_settings->favicon_image}}">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="page-top" class="index">

    @include('front/header')


    <!-- Oferta Section -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Kilka słów wstępu</h2>
            <h3 id="citation" class="section-subheading text-muted">"Pozwól dzieciom błądzić i radośnie dążyć do poprawy."</h3>
            <h3 id="januszK" class="section-subheading text-muted">Janusz Korczak</h3>
          </div>
        </div>
        <div class="row text-justyify">
          <div class="col-sm-11 col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-xs-12 col-sm-9 col-md-7"> 
                <p id="intro" class="text-muted">
                W domowym przedszkolu Kubuś Puchatek zajęcia prowadzone są na podstawie założeń pedagogiki 
                <a class="page-scroll" href="#podstawy-programowe">montessori</a>. Naszym podopiecznym proponujemy zajęcia z muzyki,
                plastyki, matematyki. Prowadzimy ćwiczenia logopedyczne. Zajęcia prowadzimy w języku polskim lub angielskim.
                Nasz program świetnie rozwijają indywidualne potrzeby podopiecznych.
                Grupy w przedszkolu są nieliczne co pozwala na indywidualne dostosowanie profilu zajeć, zależnie od zainteresowań,
                potrzeb lub wieku dziecka. Do grup przyjmujemy dzieci w wieku od szesnastego miesiąca do pięciu lat.
                </p>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-4"> 
                <div class="gague-wrapper">
                  <div id="gague">
                  </div>
                </div>
                <h4 class="section-subheading text-muted">Liczba zadowolonych rodziców</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center">
        <div class="button-row">
          <div id="btn-wrap">
            <a id="btn-two" href="#podstawy-programowe" class="button-animated page-scroll">Więcej o programie</a>
            <a id="btn-one" href="#opini" class="button-animated page-scroll">Sprawdź Opinie</a>
          </div>
        </div>
      </div>
    </section>
    <div id="opini"></div><br />
    <!-- Opinie Slider -->
    <aside id="opinie" class="row bg-gray">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="carousel-caption">
              <p class="opinie-text"> 
              Polecam gorąco!</br>Doskonałe miejsce dla naszych maluchów, które zapewnia profesjonalną opiekę
              i super zabawę połączoną z edukacją a wszystko dzięki przesympatycznej Pani Kasi.
              </p>
              <div class="opinie-line"></div>
              <h4>Mama Joasi</h4>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <p class="opinie-text"> 
              Wpsaniałe przedszkole!</br> Jagoda uwielbia spędzać czas z dziećmi i Panią Kasią, która ma wiele pomysłów 
              i wielkie pokłady energii oraz cierpliwości do małych szkrabów.</br> Dziękujemy!!
              </p>
              <div class="opinie-line"></div>
              <h4>Mama Jagódki</h4>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <p class="opinie-text">
              Super przedszkole!</br>
              Mój Bartuś bardzo lubi do niego chodzić. Pani Kasia bardzo urozmaica dzieciom czas.
              Ma bardzo profesjonalne podejście do dzieci.</br>
              Serdecznie polecam.
              </p>
              <div class="opinie-line"></div>
              <h4>Mama Bartka</h4>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <!-- Podstawy Programowe -->
    <section id="podstawy-programowe">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Podstawy Programowe</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-10 col-md-offset-1">
            <div class="col-md-6"> 
              <span class="fa-stack fa-4x">
                <i id="clap" class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-signing fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Montessori</h4>
              <p class="text-muted">
              W naszym przedszkolu idziemy śladem montessoriańskiej pedagogiki, według której staramy się nie wyręczać dziecka
              a wspierać jego działania w poznawaniu i w rozumieniu otaczającego go świata tak aby było przekonane, że samo
              poznaje i odkrywa zasady rzeczywistego świata.
              </p>
            </div>
            <div class="col-md-6"> 
              <span class="fa-stack fa-4x">
                <i id="paint" class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Edukacja Artystyczna</h4>
              <p class="text-muted">
              Aktywność plastyczna jest fundamentem edukaji przedszkolnej. Zajęcia plastyczne w naszym przedszkolu 
              rozwijają wyobraźnię, intuicje, osobowość, wyzwalają inicjatywę twórczą dziecka. Techniki z jakimi dzieci
              sie spotykają to techniki rysunkowe, malarskie, wycinankowe, collage, formowanie i konstruowanie.
              </p>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-10 col-md-offset-1">
            <div class="col-md-6"> 
              <span class="fa-stack fa-4x">
                <i id="calc" class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-calculator fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Edukacja Matematyczna</h4>
              <p class="text-muted">W myśl zasady. iż "Matematyka królową nauk" w zajęciach przedszkolnych kładziemy nacisk na jak najlepsze przygotowanie naszych pupilów
              do puźniejszej edukacji matematycznej.
              Naszym celem jest kształtowanie umiejętności
              dodawania i odejmowania oraz manipulowania przedmiotami, przez rachowania na palcach i innych zbiorach.</p>
            </div>
            <div class="col-md-6"> 
              <span class="fa-stack fa-4x">
                <i id="leaf" class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-leaf fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">Edukacja przyrodnicza</h4>
              <p class="text-muted">
              Eksploracja i poznawanie przyrody dostarcza dziecku niezliczonych bodźców sprzyjajacych właściwemu rozwojowi umysłowemu 
              i emocjonalnemu oraz estetycznemu. Dlatego też w naszym przedszkolu staramy się
              zbliżyć dziecko do przyrody, pokazać elementarne prawa rozwoju roślin i zwierząt. 
              Ukakształtować jego opiekuńczy stosunek do świata bo w końcu mamy "tylko jedną Ziemię".
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- O mnie Section -->
    <section id="portfolio" class="bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">o mnie</h2>
            <h3 class="section-subheading text-muted">"Wychowanie dzieci to rodość."</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-11 col-lg-offset-1">
            <div class="row">
              <div class="col-md-4">
                <div class="team-member">
                  <img src="img/profilKasia.jpg" class="img-responsive img-circle" alt="">
                  <h4>Katarzyna Zygmunt</h4>
                  <p class="text-muted">Opiekun/Właściciel</p>
                  <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/DomowePrzedszkoleKubusPuchatek/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <p id="portfolio-text" class="text-muted">
                Witam, nazywam się Katarzyna Zygmunt i od 2011 roku prowadzę Domowe Przedszkole "Kubuś Puchatek".
                Praca jako opiekun  dzieci sprawiała mi zawsze wiele radości a od czasu kiedy załorzyłam przedszkole
                czuję się także zawodowo spełniona. 
                Ukończyłam kurs "Psychologia dziecka" oraz kurs "Nauka czytania i liczenia dzieci w wieku przedszkolnym".
                Posiadam także niezbędny  kurs "Pierwszej Pomocy". Jestem członkiem 
                Childminder Ireland oraz Fingal County Childcare jest powiadomione o mojej działalności.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Clients Aside -->
    <aside class="clients">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <a href="#">
              <img src="img/logos/kid-insurance.jpg" class="img-responsive img-centered" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-4">
            <a href="#">
              <img src="img/logos/childminding.jpg" class="img-responsive img-centered" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-4">
            <a href="#">
              <img src="img/logos/fingal.png" class="img-responsive img-centered" alt="">
            </a>
          </div>
        </div>
      </div>
    </aside>

    <!-- Galeria Section -->
    <section id="team" class="bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Galeria</h2>
          </div>
        </div>
        <div class="slider-for">
          <!-- <div><img  class="img-responsive" src="img/zdj1L.jpg" alt="1"></div> -->
          <!-- <div><img  class="img-responsive" src="img/zdj2L.jpg" alt="2"></div> -->
          <!-- <div><img  class="img-responsive" src="img/zdj3L.jpg" alt="3"></div> -->
          <!-- <div><img  class="img-responsive" src="img/zdj4L.jpg" alt="1"></div> -->
          <!-- <div><img  class="img-responsive" src="img/zdj2L.jpg" alt="2"></div> -->
          <!-- <div><img  class="img-responsive" src="img/zdj3L.jpg" alt="3"></div> -->
        </div>
        <div class="slider-nav">
          <!-- <div><img class="img-responsive" src="img/zdj1S.jpg" alt="1"></div> -->
          <!-- <div><img class="img-responsive" src="img/zdj2S.jpg" alt="2"></div> -->
          <!-- <div><img class="img-responsive" src="img/zdj3S.jpg" alt="3"></div> -->
          <!-- <div><img class="img-responsive" src="img/zdj4S.jpg" alt="1"></div> -->
          <!-- <div><img class="img-responsive" src="img/zdj2S.jpg" alt="2"></div> -->
          <!-- <div><img class="img-responsive" src="img/zdj3S.jpg" alt="3"></div> -->
        </div>
      </div>
    </section>


    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div id="contact-header" class="col-lg-12 text-center">
            <h2 class="section-heading">Kontakt</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="row">
                <div id="left" class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Imię *" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Addres Email *" id="email" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Telefon *" id="phone" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Wiadomość *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center form-group">
                    <div id="success"></div>
                    <button id="send-btn" type="submit" class="btn btn-block">Wyślij</button>
                  </div>
                </div>
                <div id="right" class="col-md-6">
                  <h3>Wiadomość</h3>
                  <p>Na wypadek jakichkolwiek wątpliwości lub pytań wypełnij proszę formularz i wyślij wiadomość.</p>
                  <h3>Zadzwoń lub Napisz</h3>
                  <p>085 752 0973</br>
                  kubuspuchatek@gmail.com</p>
                  <h3>pobierz formularz zgłoszeniowy</h3>
                  <div class="text-center">
                    <a id="download-btn" type="submit" class="btn">Pobierz</a>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section -->
    <section id="map">
      <div class="row">
        <div id="contact-header" class="col-lg-12 text-center">
          <h2 class="section-heading">Nasz Adres</h2>
          <h3>Domowe Przedszkole Kubuś Puchatek</h3>
          <p  id="address" class="text-muted">41 Cruise Park Dr, Tyrrelstown, Dublin 15</br>D15 NX58<p>
        </div>
      </div>
      <div id="gMap" style="width:100%; height:380px;">
      </div>
    </section>
    <a class="page-scroll" id="btn-top" href="#page-top"><i class="fa fa-chevron-up"></i></a>

    @include('front/footer')
    


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBenYYozoRSHZOkuBWvT0Dk3k3Z8FrGApQ&callback=initMap" async defer></script><!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/progressbar.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.js"></script>
    <script src="js/custom-agency.js"></script>

    <script>
    </script>
  </body>
</html>

