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

<style>
.task-section{
    margin: 1em auto;
    width: 80vw;
}
input:focus {
    outline: none;
}
.task-input-container{
    display:flex;
    justify-content:center;
}
.task-input{
  max-width: 20vw;
  text-align: center;
  border: 1px solid;
  border-radius: 5px;
  display: flex;
}
.fa-pencil-alt{
    margin-left: 1em;
    align-self: center;
}
.task-title{
  border: none;
  width: 18vw;
  padding: 10px;
}
.task-btn{
  background-color: #0056b3; 
    color: #fff; 
    padding: 20px 22px;
    border: none;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    border-radius: 5px;
}
.task-btn::before {
    content: "\271A"; /* Unicode for plus sign (+) */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 24px; 
}
.task-btn:hover {
    background-color: #007bff; 
    color: #fff; 
}
.task-edit-btn{
    padding:0 10px 0 60px;
}

.completed {
    text-decoration: line-through;
    color: grey;
}
.task-th-modify{
    padding-left: 0 !important;
}
.taskTitle {
    font-size:2em;
    font-weight: bold;
    text-align: center;
    margin-top: 1em;
    margin-bottom: 0;
    color: #00263b;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
}

.container {
    background-color: white;
    margin: 1em;
    padding: 1em;
    border-radius: 15px;
}

.banner {
    background-color: #5bc0de;
    color: #fff;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
    font-weight: bold;
}

.banner th {
    padding: 12px 24px;
    text-align: center;
    text-transform: uppercase;
    font-size: 14px;
}

.addBtn {
    padding: 12px 24px;
    font-size: 16px;
    font-weight: bold;
    letter-spacing: 2px;
    border: 2px solid #007bff;
    color: #007bff;
    background-color: transparent;
    text-align: center;
    text-decoration: none;
    transition: all 0.3s ease;
    border-radius: 15px;
}

.addBtn:hover {
    background-color: #007bff;
    color: #fff;
}

table {
    width: 80%;
    border-collapse: collapse;
    margin-bottom: 1.5em;
    margin:0 auto;
}

th {
    font-weight: bold;
    text-align: left;
    color: #fff;
    padding: 10px;
}

td {
    border: 1px solid #ddd;
    padding: 0.5em;
    font-size: 1em;
}

a {
    color: #f44336;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
