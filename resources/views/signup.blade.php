<!DOCTYPE html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="{{asset('assets/signin.css')}}">
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
</head>
<body>

    <form action="{{route('signup.post')}}" method="POST">
        @csrf
        <div class="login-box">
            <div class='login-header'>
                <header>Signup</header>
            </div>
            <div class='input-box'>
                <input type="text" class="input-field" placeholder="Username" name="username">
            </div>
            <div class='input-box'>
                <input type="text" class="input-field" placeholder="Email" name="email">
            </div>
            <div class='input-box'>
                <input type="password" class="input-field" placeholder="Password" name="password">
            </div>
            <div class='input-box'>
                <input type="password" class="input-field" placeholder="Confirm Password" name="password_confirmation">
            </div>
            <div class="forgot">
            </div>
            <div class="input-submit">
                <button class="submit-btn" id="submit"></button>
                <label for="submit">Sign up</label>

            </div>
    </form>
        <div class="sign-up-link">
            <p>Have an account?<a href="/signin">Login</a></p>
            <p>Go home?<a href="/">Home</a></p>
        </div>
    </div>
</body>
