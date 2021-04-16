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
    <div class="footer">
        <div class="contImg">
            <img src="{{asset('img\cont.png')}}" alt="">
        </div>
        <div class="links">
            <div>
                <h2>{{ __('lang.link') }}</h2>
            </div>
            <div class="ins">
            
                <a href="https://www.instagram.com/_freedom_child_/">{{ __('lang.inta') }}</a>
                <a href="https://twitter.com/Kena47850438">{{ __('lang.twit') }}</a>
                <a href="mailto:190103406@.gmail.com">{{ __('lang.mail') }}</a>
            </div>
            <p>{{ __('lang.right') }}</p>
            </div>
        </div>
</body>
</html>

