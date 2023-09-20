@extends ('layout.console')
@extends ('layout.sideNav')
@section ('content')

<section class="w3-padding">
<div class="container">
    <h2 class="title">Add Education</h2>

    <form method="post" action="/console/educations/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="degree">Degree:</label>
            <input type="text" name="degree" id="degree" value="{{old('degree')}}" required>
            
            @if ($errors->first('degree'))
                <br>
                <span class="w3-text-red">{{$errors->first('degree')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="major">Major:</label>
            <input type="text" name="major" id="major" value="{{old('major')}}">

            @if ($errors->first('major'))
                <br>
                <span class="w3-text-red">{{$errors->first('major')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="school">School:</label>
            <input type="text" name="school" id="school" value="{{old('school')}}" required>
            
            @if ($errors->first('school'))
                <br>
                <span class="w3-text-red">{{$errors->first('school')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="date">Start Date:</label>
            <input type="date" name="date" id="date" value="{{old('date')}}" required>
            
            @if ($errors->first('date'))
                <br>
                <span class="w3-text-red">{{$errors->first('date')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="course">Course:</label>
            <input type="text" name="course" id="course" value="{{old('course')}}" required>

            @if ($errors->first('course'))
                <br>
                <span class="w3-text-red">{{$errors->first('course')}}</span>
            @endif
        </div>

        <button type="submit" class="addBtn">Add Education</button>

    </form>

    <a href="/console/educations/list">Back to Education List</a>
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