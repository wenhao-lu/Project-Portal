@extends ('layout.console')
@section ('content')

<section class="w3-padding">
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


<style>
.title {
    font-size: 36px;
    font-weight: bold;
    text-align: center;
    margin-top: 1em;
    margin-bottom: 1em;
    color: #00263b;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
}

.container {
    min-width: 81%;
    max-width: 83%;
    margin-left: 15em;
    background-color: white;
    padding: 1em;
    border-radius: 15px;
}

.banner {
    background-color: #5bc0de;
    color: #fff;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
    font-weight: bold;
}

.banner th {
    padding: 12px 24px;
    text-align: center;
    text-transform: uppercase;
    font-size: 14px;
}

.addBtn {
  padding: 12px 24px;
  font-size: 16px;
  font-weight: bold;
  letter-spacing: 2px;
  border: 2px solid #007bff;
  color: #007bff;
  background-color: transparent;
  text-align: center;
  text-decoration: none;
  transition: all 0.3s ease;
  border-radius:15px;
}

.addBtn:hover {
  background-color: #007bff;
  color: #fff;
}

/* Define the table styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
}

/* Define the table header styles */
th {
    font-weight: bold;
    text-align: left;
    color: #fff;
    padding: 10px;
}

/* Define the table cell styles */
td {
    border: 1px solid #ddd;
    padding: 10px;
}

/* Define the table link styles */
a {
    color: #f44336;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
