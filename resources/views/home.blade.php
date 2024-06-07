<!DOCTYPE html>
<html>

<head>
    <Title>Home</Title>
    <link rel="stylesheet" href="{{asset('assets/home.css')}}">
</head>
<body>
    <header>
        <div class='main'></div>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <ul>
            <li class='active'><a href="/">Home</a></li>
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
    <div class='middle'>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2 class='title'>Publisko transportu saraksti</h2>
                    <div class='inputbox'>
                        <input type="text" placeholder="No">
                    </div>
                    <div class='inputbox'>
                        <input type="text" placeholder="Uz">
                    </div>
                    <button type="submit" class="btn">Submit</button>

                </form>
            </div>
        </div>


        </div>
    </div>
    <div class="bg">
        <div class="row m-0 p-2">
            
        </div>
    </div>
</body>
</html>

