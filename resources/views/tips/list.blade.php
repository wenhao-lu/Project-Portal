@extends ('layout.console')
@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="title">Manage Tips</p>

    <table class="tipTable">
        <tr class="banner">
            <th>Author</th>
            <th>Title</th>
            <th>content</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($tips as $tip)
            <tr>
                <td class="userName">{{$tip->user->first}}</td>
                <td>{{$tip->title}}</td>
                <td>{{$tip->content}}</td>
                <td>{{$tip->created_at->format('M j, Y')}}</td>
                <td><a href="/console/tips/edit/{{$tip->id}}">Edit</a></td>
                <td><a href="/console/tips/delete/{{$tip->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/tips/add" class="addBtn">New Tip</a>
    </div>

</section>

@endsection
