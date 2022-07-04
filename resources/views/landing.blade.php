<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyTutor Landing</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <style>
            @media screen and (max-width: 768px) {.w3-container {width: 100%;}}
            @media screen and (min-width: 768px) {.w3-container {width: 700px; margin: 0 auto;}}
            .w3-bar .w3-button {padding: 16px;}
        </style>
    </head>

    <body>
        <div class="w3-bar w3-amber w3-round w3-card-4">
            <a href="landing" class="w3-button w3-hover-none w3-padding-16 w3-large">MyTutor</a>
            <a href="register" class="w3-right w3-bar-item w3-button w3-padding-16 w3-hover-none w3-border-amber w3-bottombar w3-hover-border-white w3-hover-text-white w3-normal"><i class="fa fa-user"></i> Register</a>
            <a href="login" class="w3-right w3-bar-item w3-button w3-padding-16 w3-hover-none w3-border-amber w3-bottombar w3-hover-border-white w3-hover-text-white w3-normal">Login</a>
        </div>   

        <div class="w3-display-container">
            <div class="w3-text-white" style="height:25vw;
                background-position: center;
                background-size: cover;
                background-image: url('/images/landing.png');
                background-repeat:no-repeat;
                max-height: 100%;">
                <h1 style="font-size:4vw;margin-left:32px;line-height:1.4"><br><b>Do the impossible</b></h1>
                <h1 style="font-size:2vw;margin-left:32px;line-height:1.4">Take learning as a kind of living habits</h1>
                <p><a href="#" class="w3-button w3-amber w3-hover-opacity-off" style="margin-left:32px;font-size: 1.4vw;">Learn more and start today</a></p>
            </div> 
        </div>

        <div class="w3-display-container w3-light-grey w3-hide-small" style="height:20vw;">
            <div class="w3-row-padding">
                <div class="w3-col w3-third">
                    <img class="w3-image w3-round " style="margin-left:32px;padding:16px;" src="/images/demo.png" alt="Demo">
                </div>
                <div class="w3-col w3-twothird">
                    <h3 style="font-size:2vw;margin-left:32px"><br><b>WE KNOW TEACH</b></h3>
                    <p style="font-size:1vw;margin-left:32px;line-height:2;">This is the introduction of website MyTutor, this is just a demo content.This is the introduction of website MyTutor, this is just a demo content.This is the introduction of website MyTutor, this is just a demo content.</p>
                </div>
            </div>
        </div>

        <div class="w3-display-container w3-light-grey w3-hide-medium w3-hide-large" style="height: 38vw;">
            <div class="w3-row">
                <div class="w3-col">
                    <img class="w3-image w3-round w3-padding" style="alignment:center; margin-left:16px;width:50%;" src="/images/demo.png" alt="Demo">
                </div>
                <div>
                    <h3 style="font-size:2vw;margin-left:16px"><br><b>WE KNOW TEACH</b></h3>
                    <p style="font-size:1vw;margin-left:16px;line-height:2;">This is the introduction of website MyTutor, this is just a demo content.This is the introduction of website MyTutor, this is just a demo content.This is the introduction of website MyTutor, this is just a demo content.</p>
                </div>
            </div>
        </div>
    </body>
</html>