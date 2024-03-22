@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="title">Manage Scores</p>

    <table>
        <tr class="banner">
            <th>Name</th>
            <th>Level</th>
            <th>Points</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($scores as $score)
            <tr>
                <td>{{$score->name}}</td>
                <td>{{$score->level}}</td>
                <td>{{$score->points}}</td>
                <td><a href="/console/scores/edit/{{$score->id}}">Edit</a></td>
                <td><a href="/console/scores/delete/{{$score->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/scores/add" class="addBtn">New Score</a>
    </div>
</section>

@endsection

