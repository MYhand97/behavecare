<nav class="navbar navbar-default navbar-static-top">
    <div class="container text-center">
        <div class="navbar-header">
        
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('/images/logo-01.jpg')}}" class="logo-image">
            </a>
        </div>
        
        <div class="collapse navbar-collapse" style="background : white" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class='{{ ($title === "Home") ? "active" : "" }}'><a href="/">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        Features
                    </a>
                    <ul style="font-size: 12px;" class="dropdown-menu">
                        <li><a href="/content/outdoor">Outdoor</a></li>
                        <li><a href="/content/seni">Seni</a></li>
                        <li><a href="/content/musik">Musik</a></li>
                        <li><a href="/content/olahraga">Olahraga</a></li>
                        <li><a href="/content/meetandplay">Meet and Play</a></li>
                        <li><a href="/content/sosial">Sosial</a></li>
                        <li><a href="/content/other">Other</a></li>
                    </ul>
                </li>
                <li class='{{ ($title === "About Us") ? "active" : "" }}'><a href="/aboutus">About Us</a></li>
                <li>
                    <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('search')}}">
                        <input class="form-control" type="text" placeholder="Search" name="query" id="query">
                        <button style="font-size: 12px; margin-top: 7px; margin-left: 10px;" class="btn" type="submit" >Search</button>
                    </form>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                
                <li><button class="btn btn-outline"
                onclick='window.location.href="/login"'>Log In</button></li>
                <li><button class="btn btn-default"
                onclick='window.location.href="/register"'>Register</button></li>
                
                @else
                <li class="dropdown">
                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    <img class="img-thumbnail img-circle" src="{{ auth()->user()->file_path }}" alt="" 
                    style="width: 50px; margin-right: 5px;">{{ auth()->user()->name }} <span class="caret"></span>
                    </a>

                    <ul style="font-size: 12px;" class="dropdown-menu">
                        <li>
                            <a href="/update">
                                Update
                            </a>
                            <a href="/logout">
                                Log Out
                            </a>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>