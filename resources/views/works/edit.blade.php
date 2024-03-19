@extends ('layout.console')
@section ('content')

<section class="w3-padding">
<div class="container">
    <h2 class="title">Edit Work</h2>

    <form method="post" action="/console/works/edit/{{$work->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Company:</label>
            <input type="text" name="title" id="title" value="{{old('title', $work->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="position">Position:</label>
            <input type="text" name="position" id="position" value="{{old('position', $work->position)}}">

            @if ($errors->first('position'))
                <br>
                <span class="w3-text-red">{{$errors->first('position')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="duration">Duration:</label>
            <input type="text" name="duration" id="duration" value="{{old('duration', $work->duration)}}">

            @if ($errors->first('duration'))
                <br>
                <span class="w3-text-red">{{$errors->first('duration')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">Live:</label>
            <input type="text" name="url" id="url" value="{{old('url', $work->url)}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="slug">GitHub:</label>
            <input type="text" name="slug" id="slug" value="{{old('slug', $work->slug)}}">

            @if ($errors->first('slug'))
                <br>
                <span class="w3-text-red">{{$errors->first('slug')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="subtitle">Subtitle:</label>
            <textarea name="subtitle" id="subtitle" >{{old('subtitle', $work->subtitle)}}</textarea>

            @if ($errors->first('subtitle'))
                <br>
                <span class="w3-text-red">{{$errors->first('subtitle')}}</span>
            @endif
        </div>
        
        <!-- Descriptions -->
        <div class="w3-margin-bottom">
            <label for="content1">Content1:</label>
            <textarea name="content1" id="content1" >{{old('content1', $work->content1)}}</textarea>

            @if ($errors->first('content1'))
                <br>
                <span class="w3-text-red">{{$errors->first('content1')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content2">Content2:</label>
            <textarea name="content2" id="content2" >{{old('content2', $work->content2)}}</textarea>

            @if ($errors->first('content2'))
                <br>
                <span class="w3-text-red">{{$errors->first('content2')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content3">Content3:</label>
            <textarea name="content3" id="content3" >{{old('content3', $work->content3)}}</textarea>

            @if ($errors->first('content3'))
                <br>
                <span class="w3-text-red">{{$errors->first('content3')}}</span>
            @endif
        </div>

        <!-- Stacks -->
        <div class="w3-margin-bottom">
            <label for="stack1">Stack1:</label>
            <input type="text" name="stack1" id="stack1" value="{{old('stack1', $work->stack1)}}">

            @if ($errors->first('stack1'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack1')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="stack2">Stack2:</label>
            <input type="text" name="stack2" id="stack2" value="{{old('stack2', $work->stack2)}}">

            @if ($errors->first('stack2'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack2')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="stack3">Stack3:</label>
            <input type="text" name="stack3" id="stack3" value="{{old('stack3', $work->stack3)}}">

            @if ($errors->first('stack3'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack3')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="stack4">Stack4:</label>
            <input type="text" name="stack4" id="stack4" value="{{old('stack4', $work->stack4)}}">

            @if ($errors->first('stack4'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack4')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="stack5">Stack5:</label>
            <input type="text" name="stack5" id="stack5" value="{{old('stack5', $work->stack5)}}">

            @if ($errors->first('stack5'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack5')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="stack6">Stack6:</label>
            <input type="text" name="stack6" id="stack6" value="{{old('stack6', $work->stack6)}}">

            @if ($errors->first('stack6'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack6')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="stack7">Stack7:</label>
            <input type="text" name="stack7" id="stack7" value="{{old('stack7', $work->stack7)}}">

            @if ($errors->first('stack7'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack7')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="stack8">Stack8:</label>
            <input type="text" name="stack8" id="stack8" value="{{old('stack8', $work->stack8)}}">

            @if ($errors->first('stack8'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack8')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="stack9">Stack9:</label>
            <input type="text" name="stack9" id="stack9" value="{{old('stack9', $work->stack9)}}">

            @if ($errors->first('stack9'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack9')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="stack10">Stack10:</label>
            <input type="text" name="stack10" id="stack10" value="{{old('stack10', $work->stack10)}}">

            @if ($errors->first('stack10'))
                <br>
                <span class="w3-text-red">{{$errors->first('stack10')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="type_id">Type:</label>
            <select name="type_id" id="type_id">
                <option></option>
                @foreach($types as $type)
                    <option value="{{$type->id}}"
                        {{$type->id == old('type_id', $work->type_id) ? 'selected' : ''}}>
                        {{$type->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('type_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('type_id')}}</span>
            @endif
        </div>

        <button type="submit" class="addBtn">Edit Work</button>

    </form>

    <a href="/console/works/list">Back to Work List</a>
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
