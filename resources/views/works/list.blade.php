@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="projectTitle">Manage Works</p>

    <table class="projectTable">
        <tr class="banner">
            <th></th>
            <th>Company</th>
            <th>Position</th>
            <th>Duration</th>
            <th>Live</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($works as $work)
            <tr>
                <td>
                    @if ($work->image)
                        <img src="{{asset('storage/'.$work->image)}}" width="200">
                    @endif
                </td>
                <td>{{$work->title}}</td>
                <td>{{$work->position}}</td>
                <td>{{$work->duration}}</td>
                <td>
                    <a href="/work/{{$work->url}}">
                        {{$work->url}}
                    </a>
                </td>
                <td><a href="/console/works/image/{{$work->id}}">Image</a></td>
                <td><a href="/console/works/edit/{{$work->id}}">Edit</a></td>
                <td><a href="/console/works/delete/{{$work->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <div class="button-wrap">
      <a href="/console/works/add" class="cms-button left-button">New Work</a>
      <a href="/console/portfolioCMS/index" class="cms-button">Return Back</a>
    </div>
    </div>

</section>

@endsection

<style>
.projectTitle{
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
/* Define the title styles */
h2 {
  font-size: 36px;
  margin-bottom: 20px;
  color: #333;
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

/* Define the table image styles */
td img {
  max-width: 200px;
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
