@extends ('layout.console')
@section ('content')

<section class="cms-section">
<div class="container">
    <h2 class="title">Edit Project</h2>

    <form method="post" action="/console/projects/edit/{{$project->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label class="formLabel" for="title">Title:</label>
            <input class="addInput" type="title" name="title" id="title" value="{{old('title', $project->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label class="formLabel" for="url">URL:</label>
            <input class="addInput" type="url" name="url" id="url" value="{{old('url', $project->url)}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label class="formLabel" for="slug">GitHub:</label>
            <input class="addInput" type="text" name="slug" id="slug" value="{{old('slug', $project->slug)}}" required>

            @if ($errors->first('slug'))
                <br>
                <span class="w3-text-red">{{$errors->first('slug')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label class="formLabel" for="content">Content:</label>
            <textarea class="addTextarea" name="content" id="content" required>{{old('content', $project->content)}}</textarea>

            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label class="formLabel" for="type_id">Type:</label>
            <select class="addInput" name="type_id" id="type_id">
                <option></option>
                @foreach($types as $type)
                    <option value="{{$type->id}}"
                        {{$type->id == old('type_id', $project->type_id) ? 'selected' : ''}}>
                        {{$type->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('type_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('type_id')}}</span>
            @endif
        </div>
        
            <button type="submit" class="addBtn">Edit Project</button>

    </form>
        <div class="backBtn">
            <a href="/console/projects/list">Back to Project List</a>
        </div>
    </div>
</section>

@endsection
