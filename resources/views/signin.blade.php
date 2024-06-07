<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/signin.css')}}">
</head>
<body>
    <div class ='mt-5'>
        @if($errors->any())
            <div class="col-12">
                @foreach ( $errors->all() as $error )
                    <div class = 'alert alert-danger'>{{$error}}</div>
                @endforeach
            </div>
        @endif

        @if(session()->has('error'))
            <div class = 'alert alert-danger'>{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
            <div class = 'alert alert-success'>{{session('success')}}</div>
        @endif
    </div>

    <form action="{{route('signin.post')}}" method="POST">
        @csrf
        <div class="login-box">
            <div class='login-header'>
                <header>Login</header>
            </div>

            <div class='input-box'>
                <input type="text" name="email" class="input-field" placeholder="Email" autocomplete="off" required>
            </div>
            <div class='input-box'>
                <input type="password" name="password" class="input-field" placeholder="Password" autocomplete="off" required>
            </div>

            <div class="forgot">
                <section>
                    <input type="checkbox" id="check">
                    <label for="check">Remember me</label>
                </section>
                <section>
                    <a href="#">Forgot password</a>
                </section>
            </div>
            <div class="input-submit">
                <button class="submit-btn" id="submit" type="submit"></button>
                <label for="submit">Sign in</label>
            </div>

    </form>
        <div class="sign-up-link">
            <p>Don't have acoount?<a href="/signup">Sign up</a></p>
            <p>Go home?<a href="/">Home</a></p>
        </div>
    </div>
</body>
</html>
