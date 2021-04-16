<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styleH.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <title>CV</title>
</head>
<body>

    <div class="header">
        <div class="container">
            <div class="logo">
                <img src="{{asset('img\logo.jpg')}}" alt="">
            </div> 
            <div class="link">
                <nav class="nav" id="nav">
                    <a class="nav__link" href="{{ route('home') }}">{{ __('lang.home') }}</a>
                    <a class="nav__link" href="{{ route('about') }}">{{ __('lang.about') }}</a>
                    <a class="nav__link" href="{{ route('contacts') }}">{{ __('lang.contacts') }}</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="container1">
        <div class="hello">
           <h1>{{ __('lang.name') }} </h1>
            <p>{{ __('lang.prof') }}</p> 
        </div>
        <div class="photo">
            <img src="{{asset('img\work1.png')}}" alt="">
        </div>
    </div>
</body>
</html>