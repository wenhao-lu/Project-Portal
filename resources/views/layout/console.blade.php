
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Portal CMS</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{url('app.css')}}">

        <script src="{{url('app.js')}}"></script>
 
    </head>
    <body>
        <!-- dashboard header -->
        <header class="console-header">
            <div class="topContainer">
                <h1 class="header-title">Application Console</h1>

                <div class="navContainer">
                    @if (Auth::check())
                        Welcome back <strong class="userName">{{auth()->user()->first}} {{auth()->user()->last}} </strong>
                        <a href="/console/logout" class="nav1">Log Out</a> 
                        <a href="/console/dashboard" class="nav2">Dashboard</a>  
                        <a href="/" class="nav3">Home Page</a>
                    @else
                        <a href="/">Return to HomePage</a>
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