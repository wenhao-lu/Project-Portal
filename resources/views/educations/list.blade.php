@extends ('layout.console')
@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="title">Manage Educations</p>

    <table>
        <tr class="banner">
            <th>Degree</th>
            <th>Major</th>
            <th>School</th>
            <th>Start Date</th>
            <th>Course</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($educations as $education)
            <tr>
                <td>{{$education->degree}}</td>
                <td>{{$education->major}}</td>
                <td>{{$education->school}}</td>
                <td>{{$education->date}}</td>
                <td>{{$education->course}}</td>
                <td><a href="/console/educations/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/educations/delete/{{$education->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/educations/add" class="addBtn">New Education</a>
    </div>
</section>

@endsection

