<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kevin Lu Projects</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{url('app.css')}}">

    <script src="{{url('app.js')}}"></script>
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

</head>
<body>

<header class="w3-padding">

    <div class="text-greeting">Welcome to My Portfolio of Projects</div>

</header>

<hr>

@yield('content')

<hr>



<footer class="w3-padding">

    @if (Auth::check())
    <div class="front-logged">
        You are logged in as <strong class="userName">{{auth()->user()->first}} {{auth()->user()->last}} </strong> | 
        <a href="/console/logout">Log Out</a> | 
        <a href="/console/dashboard">Dashboard</a>
    </div>
    @else
    <div class="front-login">
        <p>Log Into the CMS Dashboard</p>
        <a href="/console/login">Login</a>
    </div>    
    @endif

    <div class="copyright">
        <p>Copyright - Kevin(Wenhao) Lu {{date('Y')}}</p>
    <div>
</footer>

</body>
</html>