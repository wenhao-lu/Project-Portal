@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="title">Manage Contacts</p>

    <table>
        <tr class="banner">
            <th></th>
            <th>Name</th>
            <th>email</th>
            <th>Msg</th>
            <th></th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->msg}}</td>
                <td><a href="/console/contacts/edit/{{$contact->id}}">Edit</a></td>
                <td><a href="/console/contacts/delete/{{$contact->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/contacts/add" class="addBtn">New Contact</a>
    </div>
</section>

@endsection

