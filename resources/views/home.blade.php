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
                    <a class="nav__link" href="{{ route('home') }}">Home</a>
                    <a class="nav__link" href="{{ route('about') }}">About</a>
                    <a class="nav__link" href="{{ route('contacts') }}">Contacts</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="container1">
        <div class="hello">
           <h1>I'm Yerke. </h1>
            <p>Future software engineer and web designer.</p> 
        </div>
        <div class="photo">
            <img src="{{asset('img\work1.png')}}" alt="">
        </div>
    </div>
</body>
</html>