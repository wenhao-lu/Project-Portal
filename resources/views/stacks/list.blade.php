@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="title">Manage Stacks</p>

    <table>
        <tr class="banner">
            <th>Name</th>
            <th>URL</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($stacks as $stack): ?>
            <tr>
                <td>{{$stack->title}}</td>
                <td>{{$stack->url}}</td>
                <td><a href="/console/stacks/edit/{{$stack->id}}">Edit</a></td>
                <td><a href="/console/stacks/delete/{{$stack->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/stacks/add" class="addBtn">New Stack</a>
    </div>
</section>

@endsection
