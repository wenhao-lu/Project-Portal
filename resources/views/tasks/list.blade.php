@extends('layout.console')

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // click event handler to all checkboxes with class 'task-checkbox'
        $('.task-checkbox').on('click', function () {
            const taskId = $(this).data('task-id');
            const isCompleted = $(this).prop('checked');

            // Send an AJAX request to update the task's status
            $.ajax({
                type: 'POST',
                url: '/console/tasks/toggle', 
                data: {
                    taskId: taskId,
                    isCompleted: isCompleted,
                    _token: '{{ csrf_token() }}', 
                },
                success: function (response) {
                    const label = $(`label[for="task-${taskId}"]`);
                    label.toggleClass('completed', isCompleted);
                },
            });
        });
    });
</script>



<section class="task-section">
    <div class="container">
        <p class="taskTitle">To Do List</p>
        <p class="task-user">For
        <strong class="userName">{{auth()->user()->first}} {{auth()->user()->last}} </strong>
        </p>
        <form method="post" action="/console/tasks/add" novalidate class="w3-margin-bottom">

@csrf

<div class="task-input-container">
<div class="task-input">
<i class="fas fa-pencil-alt"></i>
<label for="title"></label>
    <input class="task-title" placeholder="Add a New Task" type="text" name="title" id="title" value="{{old('title')}}" required>
    
    @if ($errors->first('title'))
        <br>
        <span class="w3-text-red">{{$errors->first('title')}}</span>
    @endif
</div>

<button type="submit" class="task-btn"></button>
</div>


</form>

        <table class="taskTable">
            <tr class="banner">
                <th>Title</th>
                <th>Created</th>
                <th></th>
                <th class="task-th-modify">Modify</th>
                <th>Status</th>
            </tr>
            @foreach ($tasks as $task)
                <tr>
                    <td>            
                        <input
                            type="checkbox"
                            class="task-checkbox"
                            id="task-{{ $task->id }}"
                            data-task-id="{{ $task->id }}"
                            {{ $task->completed ? 'checked' : '' }}
                        >
                        <label
                            for="task-{{ $task->id }}"
                            class="{{ $task->completed ? 'completed' : '' }}"
                        >
                        {{ $task->title }}
                        </label>
                    </td>

                    <td>{{$task->created_at->format('H:i, M j, Y')}}</td>
                    <td><a href="/console/tasks/edit/{{$task->id}}">Edit</a></td>
                    <td><a href="/console/tasks/delete/{{$task->id}}">Delete</a></td>
                    <td>{{$task->completed? 'Completed':'Pending'}}</td>
                </tr>
            @endforeach
        </table>


    </div>
</section>

@endsection

