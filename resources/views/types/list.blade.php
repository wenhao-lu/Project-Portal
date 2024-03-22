@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="title">Manage Types</p>

    <table>
        <tr class="banner">
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($types as $type): ?>
            <tr>
                <td>{{$type->title}}</td>
                <td><a href="/console/types/edit/{{$type->id}}">Edit</a></td>
                <td><a href="/console/types/delete/{{$type->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/types/add" class="addBtn">New Type</a>
    </div>
</section>

@endsection
