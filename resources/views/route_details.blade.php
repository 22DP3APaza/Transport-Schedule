<!DOCTYPE html>
<html>

<head>
    <Title>Graphics</Title>
    <link rel="stylesheet" href="{{asset('assets/routes.css')}}">
</head>
<body>
            <header>
                <div class='main'></div>
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    </div>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/bus">Bus</a></li>
                        <li><a href="/train">train</a></li>
                        <li><a href="/tram">tram</a></li>
                        <li><a href="/trolleybus">trolleybus</a></li>
                        <li><a href="#">contacts</a></li>
                        @guest
                        <li><a href="/signin" class='login'>Login</a></li>
                        @endguest
                        <li class = 'navbar-text'>@auth{{auth()->user()->name}} @endauth
                        @auth
                        <a href="/logout" id="signout">Sign Out </a>
                        @endauth
                    </ul>
            </header>
        <div class = 'middle'>
            <h2>{{ $route->route_long_name }}</h2>
        </div>
</body>
</html>

