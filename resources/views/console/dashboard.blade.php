@extends ('layout.console')
@section ('content')

<section class="main-content">
    <div class="section-title-container">
        <p class="section-title">DASHBOARD</p>
    </div>    
    <div class="widgets-container">
        <!-- Widget 1 -->
        <div class="widget-tasks widget-card">
            <div class="card-img">
                <a href="/console/portfolioCMS/index">
                    <img src="/images/card-img-1.webp" alt="card-img-1" class="card-img-1">
                </a>
            </div>
            <p class="card-sub-title">Portfolio CMS</p>

            <p class="card-text-1"><a href="/console/portfolioCMS/index">Content Management</a></p>
            <div class="card-text-wrap">
                <ul>
                    <li>Skills</li>
                    <li>Stacks</li>
                    <li>Projects</li>
                    <li>Educations</li>
                </ul>
                <ul>
                    <li>Types</li>
                    <li>Showcases</li>
                    <li>Scores</li>
                    <li>Contacts</li>
                </ul>
            </div>
            

        </div>

        <!-- Widget 2 -->
        <div class="widget-tips widget-card">
            <div class="card-img">
                <img src="/images/card-img-2.webp" alt="card-img-2" class="card-img-2">
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

        <!-- Widget 3 -->
        <div class="widget-tasks widget-card">
            <div class="card-img">
                <a href="/console/tasks/list">
                    <img src="/images/card-img-3.webp" alt="card-img-3" class="card-img-3">
                </a>
            </div>
            <p class="card-sub-title">To-Do List</p>

        @php
            $latestTasks = App\Models\Task::where('user_id', Auth::user()->id)
                ->latest()
                ->take(3)
                ->get();
        @endphp

        @if ($latestTasks->count() > 0)
        <p class="card-text-1"><a href="/console/tasks/list">Things To Do</a></p>
            @foreach ($latestTasks as $task)
            <div class="task-wrap">
                <i class="fas fa-star-half-alt"></i>
                <p class="card-text-2">{{ $task->title }}</p>
            </div>
            @endforeach
        @else
            <p>No tasks available at the moment.</p>
        @endif
        </div>

        

        <!-- Widget 4 -->
        <div class="widget-tasks widget-card">
            <div class="card-img">
                <a href="/console/tasks/list">
                    <img src="/images/card-img-4.webp" alt="card-img-4" class="card-img-4">
                </a>
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
    </div>



</section>

@endsection

