
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Portal CMS</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{url('app.css')}}">

        <script src="{{url('app.js')}}"></script>
        <script src="https://kit.fontawesome.com/824fcf09e8.js" crossorigin="anonymous"></script>
 
    </head>
    <body>
        <!-- dashboard header -->
        <header class="console-header">
            <div class="topContainer">
                <div class="site-logo">
                    <div class="logo-img"><img src="/images/logo.png" alt="logo" class="logo"></div>
                    <h1 class="header-title">Project Portal</h1>
                </div>
                <div class="navContainer">
                    @if (Auth::check())
                        Welcome back <strong class="userName">{{auth()->user()->first}} {{auth()->user()->last}} </strong>
                        <a href="/console/logout" class="nav1">
                        <i class="fas fa-sign-out-alt"></i>
                        </a> 
                        <!--<a href="/console/dashboard" class="nav2">Dashboard</a>  -->
                        <!--<a href="/" class="nav3">Home Page</a>-->
                    @else
                        <a href="/">Return to HomePage</a>
                    @endif
                </div>
            </div>

        </header>
 
    <div class="main-container">
        <div class="side-navi">
            <ul class="side-nav-list">
                <!--
                <li><a href="/console/projects/list">Manage Projects</a></li>
                <li><a href="/console/types/list">Manage Types</a></li>
                <li><a href="/console/users/list">Manage Users</a></li>
                <li><a href="/console/skills/list">Manage Skills</a></li>
                <li><a href="/console/educations/list">Manage Educations</a></li>
                <li><a href="/console/stacks/list">Manage Stacks</a></li>
                -->
                <li><a href="/" class="nav3">
                    <i class="fas fa-home"></i>    
                    Home Page</a></li>
                <li><a href="/console/dashboard" class="nav2">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard</a></li>
                <li><a href="/console/tips/list">
                    <i class="fas fa-lightbulb"></i>
                    Daily Tips</a></li>
                <li><a href="/console/tasks/list">
                    <i class="fas fa-tasks"></i>
                    To-Do List</a></li>
                <li><a href="/console/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    Log Out</a></li>
            </ul>
        </div>
        
        @if (session()->has('message'))
            <div class="msg-div">
                <div class="event-msg">{{session()->get('message')}}</div>
            </div>
        @endif

        @yield ('content')

    </div>





    </body>
</html>