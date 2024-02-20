@extends ('layout.console')

@section ('content')

<section class="w3-padding">
<div class="container">
    <h2 class="title">Add Score</h2>

    <form method="post" action="/console/scores/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="level">Level:</label>
            <input type="text" name="level" id="level" value="{{old('level')}}">

            @if ($errors->first('level'))
                <br>
                <span class="w3-text-red">{{$errors->first('level')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="points">Points:</label>
            <input type="text" name="points" id="points" value="{{old('points')}}" required>

            @if ($errors->first('points'))
                <br>
                <span class="w3-text-red">{{$errors->first('points')}}</span>
            @endif
        </div>

        <button type="submit" class="addBtn">Add Score</button>

    </form>

    <a href="/console/scores/list">Back to Score List</a>
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
</style>