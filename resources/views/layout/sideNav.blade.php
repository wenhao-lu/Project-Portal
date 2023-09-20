
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
#dashboard {
        list-style-type: none;
        margin: 9em 0 0 0;
        padding: 0;
        width: 200px;
        background-color: white;
        position: fixed;
        overflow-x: hidden;
        transition: width 0.5s;
        height: 75vh;
        border-radius:15px;
    }

    #dashboard li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color 0.5s;
        margin-top:2em;
    }

    #dashboard li a:hover {
        background-color: #555;
        color: white;
    }
	</style>


        </head>
    <body>
<div class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/skills/list">Manage Skills</a></li>
        <li><a href="/console/educations/list">Manage Educations</a></li>
        <li><a href="/console/stacks/list">Manage Stacks</a></li>
        <li><a href="/console/logout">Log Out</a></li>
    </ul>

</div>

</body>
</html>

