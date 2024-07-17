@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container"> 
    <p class="title">Manage Users</p>

    <table>
        <tr class="banner">
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td>{{$user->first}} {{$user->last}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td><a href="/console/users/edit/{{$user->id}}">Edit</a></td>
                <td><a href="/console/users/delete/{{$user->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/users/add" class="addBtn">New User</a>
    </div>
</section>

@endsection

