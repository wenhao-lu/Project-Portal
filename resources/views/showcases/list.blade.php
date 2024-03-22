@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="projectTitle">Manage Showcases</p>

    <table class="projectTable">
        <tr class="banner">
            <th></th>
            <th>Title</th>
            <th>Live</th>
            <th>GitHub</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($showcases as $showcase)
            <tr>
                <td>
                    @if ($showcase->image)
                        <img src="{{asset('storage/'.$showcase->image)}}" width="200">
                    @endif
                </td>
                <td>{{$showcase->title}}</td>
                <td>
                    <a href="/showcase/{{$showcase->url}}">
                        {{$showcase->url}}
                    </a>
                </td>
                <td>
                    <a href="/showcase/{{$showcase->slug}}">
                        {{$showcase->slug}}
                    </a>
                </td>
                <td>{{$showcase->created_at->format('M j, Y')}}</td>
                <td><a href="/console/showcases/image/{{$showcase->id}}">Image</a></td>
                <td><a href="/console/showcases/edit/{{$showcase->id}}">Edit</a></td>
                <td><a href="/console/showcases/delete/{{$showcase->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <div class="button-wrap">
      <a href="/console/showcases/add" class="cms-button left-button">New Showcase</a>
      <a href="/console/portfolioCMS/index" class="cms-button">Return Back</a>
    </div>
    </div>

</section>

@endsection
