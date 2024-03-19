
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Portal CMS</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{url('app.css')}}">

        <script src="{{asset('app.js')}}"></script>
        <script src="https://kit.fontawesome.com/824fcf09e8.js" crossorigin="anonymous"></script>
 
    </head>
    <body>
        <!-- dashboard header -->
        <header class="console-header">
            <div class="topContainer">
                <div class="site-logo">
                    <!-- mobile menu -->
                    <div id="mobile-menu">
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="logo-img"><img src="/images/logo.png" alt="logo" class="logo"></div>
                    <h1 class="header-title">Project Portal</h1>
                </div>

                <div class="navContainer">
                    @if (Auth::check())
                        <p>Welcome back</p> <strong class="userName">{{auth()->user()->first}} {{auth()->user()->last}} </strong>
                        <a href="/console/logout" class="nav1">
                        <i class="fas fa-sign-out-alt"></i>
                        </a> 
                    @else
                        <a href="/">Return to HomePage</a>
                    @endif
                </div>
            </div>

        </header>
 
    <div class="main-container">
        <div id="side-navi">
            <ul class="side-nav-list">
            @if (Auth::check())
                <li class="nav-list-name">
                    <strong class="userName">{{auth()->user()->first}} {{auth()->user()->last}} </strong>
                </li>
                @endif
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
                <!-- Section settings -->
                <li><a href="/console/projects/list">
                    <i class="fas fa-tasks"></i>
                    Projects</a>
                </li>

                <li><a href="/console/showcases/list">
                    <i class="fas fa-tasks"></i>
                    Showcases</a>
                </li>

                <li><a href="/console/works/list">
                    <i class="fas fa-tasks"></i>
                    Works</a>
                </li>

                <li><a href="/console/types/list">
                    <i class="fas fa-tasks"></i>
                    Types</a>
                </li>

                <li><a href="/console/skills/list">
                    <i class="fas fa-tasks"></i>
                    Skills</a>
                </li>

                <li><a href="/console/educations/list">
                    <i class="fas fa-tasks"></i>
                    Educations</a>
                </li>

                <li><a href="/console/users/list">
                    <i class="fas fa-tasks"></i>
                    Users</a>
                </li>

                <li><a href="/console/stacks/list">
                    <i class="fas fa-tasks"></i>
                    Stacks</a>
                </li>

                <li><a href="/console/contacts/list">
                    <i class="fas fa-tasks"></i>
                    Contacts</a>
                </li>

                <li><a href="/console/scores/list">
                    <i class="fas fa-tasks"></i>
                    Scores</a>
                </li>
                

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