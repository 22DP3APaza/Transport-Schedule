<!DOCTYPE html>
<html>
<head>
    <Title>Trolleybus</Title>
    <link rel="stylesheet" href="{{asset('assets/trolleybus.css')}}">
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
            <li class='active'><a href="/trolleybus">trolleybus</a></li>
            <li><a href="#">contacts</a></li>
            @guest
            <li><a href="/signin" class='login'>Login</a></li>
            @endguest
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
</body>
</html>

