@extends ('layout.console')
@section ('content')

<section class="main-content">
    <!-- 
    <p class="mainTitle">Content Management System</p>
    <p class="mainTitle">Control Panel</p>
    -->

    <ul id="consoleMain">
        <!--
        <li><a href="/console/projects/list">Projects</a></li>
        <li><a href="/console/types/list">Types</a></li>
        <li><a href="/console/skills/list">Skills</a></li>
        <li><a href="/console/educations/list">Educations</a></li>
        <li><a href="/console/users/list">Users</a></li>
        <li><a href="/console/stacks/list">Stacks</a></li>
        -->
        <!--
        <li><a href="/console/tips/list">Tips</a></li>
        <li><a href="/console/tasks/list">To-Do</a></li>
        -->
        
    </ul>

    <div class="widgets-container">
        <div class="widget-tips widget-card">
            <div class="card-img">
                <img src="/images/card-img-1.png" alt="card-img-1" class="card-img-1">
            </div>
            <p class="card-sub-title">Everyday Tips</p>

        @php
            $latestTip = App\Models\Tip::latest()->first(); 
        @endphp

        @if ($latestTip)
            <p class="card-text-1"><a href="/console/tips/list">{{ $latestTip->title }}</a></p>
            <p class="card-text-2">{{ $latestTip->content }}</p>
            <p class="card-text-3 userName">{{ $latestTip->user->first }}</p>
        @else
            <p>No tips available at the moment.</p>
        @endif
        </div>

        <div class="widget-tasks widget-card">
            <div class="card-img">
                <img src="/images/card-img-2.png" alt="card-img-2" class="card-img-2">
            </div>
            <p class="card-sub-title">To-Do List</p>

        @php
            $latestTask = App\Models\Task::latest()->first(); 
        @endphp

        @if ($latestTask)
            <p class="card-text-1"><a href="/console/tasks/list">Things To Do</a></p>
            <p class="card-text-2">{{ $latestTask->title }}</p>
            <p class="card-text-3">{{ $latestTask->created_at->format('H:i, M j, Y')}}</p>
        @else
            <p>No tasks available at the moment.</p>
        @endif
        </div>



    <!--  project widget 
        <div class="widget-projects widget-card">
        @php
            $latestProject = App\Models\Project::latest()->first(); 
        @endphp

        @if ($latestProject)
            <p class="card-text-1">{{ $latestProject->title }}</p>
            <hr>
            <p class="card-text-2">{{ $latestProject->content }}</p>
        @else
            <p>No projects available at the moment.</p>
        @endif
        </div>
    -->


    </div>



</section>

@endsection

