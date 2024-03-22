@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="title">Manage Works</p>

    <table class="projectTable">
        <tr class="banner">
            <th></th>
            <th>Company</th>
            <th>Position</th>
            <th>Duration</th>
            <th>Live</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($works as $work)
            <tr>
                <td>
                    @if ($work->image)
                        <img src="{{asset('storage/'.$work->image)}}" width="200">
                    @endif
                </td>
                <td>{{$work->title}}</td>
                <td>{{$work->position}}</td>
                <td>{{$work->duration}}</td>
                <td>
                    <a href="/work/{{$work->url}}">
                        {{$work->url}}
                    </a>
                </td>
                <td><a href="/console/works/image/{{$work->id}}">Image</a></td>
                <td><a href="/console/works/edit/{{$work->id}}">Edit</a></td>
                <td><a href="/console/works/delete/{{$work->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <div class="button-wrap">
      <a href="/console/works/add" class="cms-button left-button">New Work</a>
      <a href="/console/portfolioCMS/index" class="cms-button">Return Back</a>
    </div>
    </div>

</section>

@endsection
