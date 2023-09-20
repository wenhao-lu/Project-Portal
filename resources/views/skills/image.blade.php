@extends ('layout.console')
@extends ('layout.sideNav')
@section ('content')

<section class="w3-padding">
<div class="container">
    <h2 class="title">Skill Image</h2>

    <div class="w3-margin-bottom">
        @if($skill->image)
            <img src="{{asset('storage/'.$skill->image)}}" width="200">
        @endif
    </div>

    <form method="post" action="/console/skills/image/{{$skill->id}}" novalidate class="w3-margin-bottom" enctype="multipart/form-data">

        @csrf

        <div class="w3-margin-bottom">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" value="{{old('image')}}" required>
            
            @if ($errors->first('image'))
                <br>
                <span class="w3-text-red">{{$errors->first('image')}}</span>
            @endif
        </div>

        <button type="submit" class="addBtn">Add Image</button>

    </form>

    <a href="/console/skills/list">Back to Skill List</a>
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

.addBtn {
  padding: 12px 24px;
  font-size: 16px;
  font-weight: bold;
  letter-spacing: 2px;
  border: 2px solid #007bff;
  color: #007bff;
  background-color: transparent;
  text-align: center;
}
.addBtn:hover {
  background-color: #007bff;
  color: #fff;
}
</style>