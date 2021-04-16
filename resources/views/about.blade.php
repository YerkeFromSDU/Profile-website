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
<div class="about" id="abou">
        <div class="cont">
            <div class="logo">
                <img src="img\logo.jpg" alt="">
            </div>
            <h4>{{ __('lang.hi') }}</h4>
            <p>{{ __('lang.abot') }}</p>
        </div>
    </div>
    <div class="work" id="work">
        <h1>{{ __('lang.can') }}</h1>
        <div class="design">
            <div class="logo">
                <img src="img\boi.jpg" alt="">
            </div>
            <div class="text">
                <h4>{{ __('lang.design') }}</h4>
                <p>{{ __('lang.style') }}</p>
            </div>
        </div>
        <div class="teach">
            <div class="text">
                <h4>{{ __('lang.teach') }}</h4>
                <p>{{ __('lang.help') }}
                </p>
            </div>
            <div class="logo">
                <img src="img\li.jpg" alt="">
            </div> 
        </div>
    </div>
    <div class="note" id="notes">
        <h1>{{ __('lang.note1') }}</h1>
        <h4>{{ __('lang.note2') }}</h4>
        <p>{{ __('lang.note3') }}</p>
        <button><a href="mailto:190103406@.gmail.com">{{ __('lang.note4') }}</a></button>
    </div>
</body>
</html>