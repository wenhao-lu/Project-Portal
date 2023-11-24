@extends ('layout.console')

@section ('content')

<section class="w3-padding">
<div class="container">
    <h2 class="title">Edit Task</h2>

    <form method="post" action="/console/tasks/edit/{{$task->id}}" novalidate class="w3-margin-bottom">
        
        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Task:</label>
            <input type="title" name="title" id="title" value="{{old('title', $task->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="completed">Completed:</label>
            <select name="completed" id="completed" required>
                <option value="1" {{ $task->completed ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$task->completed ? 'selected' : '' }}>No</option>
            </select>

            @if ($errors->first('completed'))
                <br>
                <span class="w3-text-red">{{$errors->first('completed')}}</span>
            @endif
        </div>

        
        <button type="submit" class="addBtn">Update Task</button>

    </form>

        <div class="back-btn">
            <a href="/console/tasks/list">Back to To-Do List</a>
        </div>
    </div>
</section>

@endsection


<style>
.title {
    font-size: 36px;
    font-weight: bold;
    text-align: center;
    margin-top: 1em;
    margin-bottom: 1em;
    color: #00263b;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
}

.container {
    min-width: 81%;
    max-width: 83%;
    margin-left: 15em;
    background-color: white;
    padding: 1em;
    border-radius: 15px;
}
form{
    text-align: center;
    font-size:1.5rem;
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
  border-radius:15px;
}

.addBtn:hover {
  background-color: #007bff;
  color: #fff;
}

a {
    color: #f44336;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
.back-btn{
   text-align: center;
   font-size:1rem;
   font-weight: bold;
}

</style>
