<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Suan Thiha Nyan/ My Portfolio website</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/common.css') }}" rel="stylesheet">
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('font/fontawesome-free-6.0.0-beta3-web/css/all.min.css') }}" rel="stylesheet">

    </head>
    <body>
      <div class="div-banner-website">
        <div class="div-li-banner">
          <ul class="ul-alltabs">
            <li>Home</li>
            <li>About</li>
            <li>Project and Work Experiences</li>
            <li>My high-level educational paths</li>
            <li>Contact Me</li>
            <li></li>
          </ul>

        </div>
      </div>

      <div class="div-background-index">
        <div class="div-">
          <button class="btn-about-index">About Me</button>
        </div>
      </div>
    </body>
</html>
