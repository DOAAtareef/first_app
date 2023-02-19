<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <style>
        body,h1 {font-family: "Raleway", sans-serif}
        body, html {height: 100%}
        .bgimg {
          background-image: url('forestbridge.jpg');
          min-height: 100%;
          background-position: center;
          background-size: cover;
        }
        </style>

    </head>

    <body>
        <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
            <div class="w3-display-topleft w3-padding-large w3-xlarge">
                <a href="{{ route('signup') }}"> Signup </a> |
                <a href="{{ route('users.index') }}"> Users </a>  |
                <a href="#"> Blogs </a>
            </div>

            <div class="w3-display-middle">
              <h1 class="w3-jumbo w3-animate-top">COMING SOON</h1>
              <hr class="w3-border-grey" style="margin:auto;width:40%">
              <p class="w3-large w3-center">35 days left</p>
            </div>

          </div>

      </body>


</html>
