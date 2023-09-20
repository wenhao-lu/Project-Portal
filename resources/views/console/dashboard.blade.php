@extends ('layout.console')
@extends ('layout.sideNav')
@section ('content')

<section class="w3-padding">

    <p class="mainTitle">Content Management System</p>
    <p class="mainTitle">Control Panel</p>

    <ul id="consoleMain">
        <li><a href="/console/projects/list">Projects</a></li>
        <li><a href="/console/types/list">Types</a></li>
        <li><a href="/console/skills/list">Skills</a></li>
        <li><a href="/console/educations/list">Educations</a></li>
        <li><a href="/console/users/list">Users</a></li>
        <li><a href="/console/stacks/list">Stacks</a></li>
    </ul>

</section>

@endsection


<style>
    .mainTitle{
        font-size: 48px;
  font-weight: bold;
  text-align: center;
  margin-top: 50px;
  margin-bottom: 30px;
  text-shadow: 2px 2px 2px #333;
  color: #3e50f5;
  letter-spacing: 2px;

    }
    #consoleMain {
        display: flex;
        margin: 5em 0 0 13em;
        margin-top: 2em;
    }
    
    #consoleMain li {
        background-color: #f8f8f8;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin: 10px;
        padding: 20px;
        width: 250px;
        text-align: center;
        position: relative;
        transition: all 0.3s ease-in-out;
    }
    
    #consoleMain li:before {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: -1;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        opacity: 0;
        transition: all 0.3s ease-in-out;
    }
    
    #consoleMain li:hover:before {
        opacity: 1;
    }
    
    #consoleMain li:hover {
        background-color: #333;
        color: #fff;
        transform: translateY(-5px);
    }
    
    #consoleMain li:hover a {
        color: #fff;
    }
    
    #consoleMain a {
        color: #333;
        font-size: 1.2rem;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }
    
    #consoleMain li:nth-child(1) {
        background-image: linear-gradient(to bottom right, #FF6633, #FFB399);
    }
    
    #consoleMain li:nth-child(2) {
        background-image: linear-gradient(to bottom right, #FFB399, #FF33FF);
    }
    
    #consoleMain li:nth-child(3) {
        background-image: linear-gradient(to bottom right, #1E90FF, #0066CC);
    }
    
    #consoleMain li:nth-child(4) {
        background-image: linear-gradient(to bottom right, #1E90FF, #00FF99);
    }
    
    #consoleMain li:nth-child(5) {
        background-image: linear-gradient(to bottom right, #FF6633, #FFB399);
    }
    #consoleMain li:nth-child(6) {
        background-image: linear-gradient(to bottom right, #FF6633, #FFB399);
    }
    
    
    #consoleMain li:nth-child(1):before {
        background-image: linear-gradient(to bottom right, #FF6633, #FFB399);
    }
    
    #consoleMain li:nth-child(2):before {
        background-image: linear-gradient(to bottom right, #FFB399, #FF33FF);
    }
    
    #consoleMain li:nth-child(3):before {
        background-image: linear-gradient(to bottom right, #1E90FF, #0066CC);
    }
    
    #consoleMain li:nth-child(4):before {
        background-image: linear-gradient(to bottom right, #1E90FF, #00FF99);
    }
    
    #consoleMain li:nth-child(5):before {
        background-image: linear-gradient(to bottom right, #FF6633, #FFB399);
    }
    #consoleMain li:nth-child(6):before {
        background-image: linear-gradient(to bottom right, #FF6633, #FFB399);
    }
</style>

