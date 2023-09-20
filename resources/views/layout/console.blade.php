
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CMS Laravel Backend</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{url('app.css')}}">

        <script src="{{url('app.js')}}"></script>

    <style>
      body {
      background-color: #eee;
      font-family: "Nunito",sans-serif;
    }

    header {
      background-color: #333;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
    }

    h1 {
      font-size: 36px;
      font-weight: bold;
      margin: 0;
    }

    nav {
      display: flex;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin-left: 10px;
    }

    hr {
      border: none;
      border-top: 2px solid #333;
      margin: 30px 0;
    }

    .message {
      background-color: #f44336;
      color: #fff;
      padding: 10px;
      margin: 20px 0;
      text-align: center;
      font-weight: bold;
    }

    .content {
      background-color: #fff;
      padding: 20px;
      margin: 0 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .userName{
        background-image: linear-gradient(45deg, #ff00ff, #00ffff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
    }
    .topContainer{
        display:flex;
        flex-flow: column;
        align-items: center;
        width: 100%;
    }
    .head{
        text-align: center;
        font-size: 48px;
        font-weight: bold;
        background: linear-gradient(to right, #00c6ff, #0072ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-top: 0;
        padding-top: 10px;
    }
    .nav1{
        margin-right: 6em;
        margin-left: 6em;
        text-decoration: none;
    }
    .nav1:hover, .nav2:hover, .nav3:hover {
        color: #007bff;
        cursor: pointer;
    }
    .nav2{
        margin-right: 6em;
        text-decoration: none;
    }
    .nav3{
        text-decoration: none;
    }
    

    </style>
        
    </head>
    <body>

        <header class="w3-padding">
            <div class="topContainer">
                <h1 class="head">Portfolio Console</h1>

                <div class="navContainer">
                    @if (Auth::check())
                        Welcome back <strong class="userName">{{auth()->user()->first}} {{auth()->user()->last}} </strong>
                        <a href="/console/logout" class="nav1">Log Out</a> 
                        <a href="/console/dashboard" class="nav2">Dashboard</a>  
                        <a href="/" class="nav3">Home Page</a>
                    @else
                        <a href="/">Return to My Portfolio</a>
                    @endif
                </div>
            </div>

        </header>

        @if (session()->has('message'))
            <div class="w3-padding w3-margin-top w3-margin-bottom">
                <div class="w3-red w3-center w3-padding">{{session()->get('message')}}</div>
            </div>
        @endif

        @yield ('content')

    </body>
</html>