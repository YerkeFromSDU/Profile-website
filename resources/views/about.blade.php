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
<div class="about" id="abou">
        <div class="cont">
            <div class="logo">
                <img src="img\logo.jpg" alt="">
            </div>
            <h4>Hi</h4>
            <p>I'm a web designer and student of SDU. I have passion for web design and just love to create something beautiful.</p>
        </div>
    </div>
    <div class="work" id="work">
        <h1>What can I do</h1>
        <div class="design">
            <div class="logo">
                <img src="img\boi.jpg" alt="">
            </div>
            <div class="text">
                <h4>Design what you want!</h4>
                <p>I love simple and minimalistic style. So people can focus on message.</p>
            </div>
        </div>
        <div class="teach">
            <div class="text">
                <h4>Teach you.</h4>
                <p>I am on second course, so I can help you with JAVA, HTML, CSS and such struggling
                    subjects. I guarantee that we will upgrade your brain.
                </p>
            </div>
            <div class="logo">
                <img src="img\li.jpg" alt="">
            </div> 
        </div>
    </div>
    <div class="note" id="notes">
        <h1>I can help.</h1>
        <h4>I'm currently available for English teaching also.</h4>
        <p>If you want improve your English till Advanced, think you need my help with something, just get in touch.</p>
        <button><a href="mailto:190103406@.gmail.com">MESSAGE ME</a></button>
    </div>
</body>
</html>