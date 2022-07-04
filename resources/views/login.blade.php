<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" style="css" href="../resources/css/app.css">
        <style>
            @media screen and (max-width: 768px) {.w3-container {width: 100%;}}
            @media screen and (min-width: 768px) {.w3-container {width: 700px;margin: 0 auto;}}
            html {background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url("/images/background.png");}
        </style>
    </head>

    <body>
        @if (session('save'))
        <script>alert("Success");</script>
        @endif

        @if (session('error'))
        <script>alert("Failed");</script>
        @endif

        <div class="w3-bar w3-amber w3-round w3-card-4">
            <a href="landing" class="w3-button w3-hover-none w3-padding-16 w3-large">MyTutor</a>
            <a href="register" class="w3-right w3-bar-item w3-button w3-padding-16 w3-hover-none w3-border-amber w3-bottombar w3-hover-border-white w3-hover-text-white w3-normal"><i class="fa fa-user"></i> Register</a>
            <a href="login" class="w3-right w3-bar-item w3-button w3-padding-16 w3-hover-none w3-border-amber w3-bottombar w3-hover-border-white w3-hover-text-white w3-normal">Login</a>
        </div> 

        <div class="w3-container">
            <div class="w3-padding">
            <div class="w3-container" style="padding:16px"></div>
                <div class="w3-card w3-round w3-white" style="border-radius:25px;">
                    <div class="w3-padding ">
                        <form action="{{ route('login.post') }}" method="post" accept-charset="UTF-8">
                            {{csrf_field()}}

                            <div>
                                <h3 class="w3-center"><b>Sign In</b></h3>
                                <img class="w3-image w3-round" style="padding:16px;" src="/images/login.png">

                                <p><input id="email" class="w3-input w3-round w3-border" placeholder="Email" type="email" name="email" required></p>
                                @if ($errors->has('email'))
                                <span class="w3-red">{{ $errors->first('email') }}</span>
                                @endif

                                <p><input id="pass" class="w3-input w3-round w3-border" placeholder="Password" type="password" name="password" required></p>
                                @if ($errors->has('password'))
                                <span class="w3-red">{{ $errors->first('password') }}</span>
                                @endif

                                <div class="w3-row">
                                    <input type="checkbox" name="remember"> Remember Me
                                    <button class="w3-button w3-round w3-right w3-amber">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>