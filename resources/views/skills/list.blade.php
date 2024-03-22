@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="title">Manage Skills</p>

    <table>
        <tr class="banner">
            <th></th>
            <th>Name</th>
            <th>URL</th>
            <th>Percent</th>
            <th>Logo</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($skills as $skill)
            <tr>
                <td>
                    @if ($skill->image)
                        <img class="skillLogo" src="{{asset('storage/'.$skill->image)}}">
                    @endif
                </td>
                <td>{{$skill->name}}</td>
                <td>{{$skill->url}}</td>
                <td>{{$skill->percent}}</td>
                <td><a href="/console/skills/image/{{$skill->id}}">Image</a></td>
                <td><a href="/console/skills/edit/{{$skill->id}}">Edit</a></td>
                <td><a href="/console/skills/delete/{{$skill->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/skills/add" class="addBtn">New Skill</a>
    </div>
</section>

@endsection

