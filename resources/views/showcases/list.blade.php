@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
    <p class="projectTitle">Manage Showcases</p>

    <table class="projectTable">
        <tr class="banner">
            <th></th>
            <th>Title</th>
            <th>Live</th>
            <th>GitHub</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($showcases as $showcase)
            <tr>
                <td>
                    @if ($showcase->image)
                        <img src="{{asset('storage/'.$showcase->image)}}" width="200">
                    @endif
                </td>
                <td>{{$showcase->title}}</td>
                <td>
                    <a href="/showcase/{{$showcase->url}}">
                        {{$showcase->url}}
                    </a>
                </td>
                <td>
                    <a href="/showcase/{{$showcase->slug}}">
                        {{$showcase->slug}}
                    </a>
                </td>
                <td>{{$showcase->created_at->format('M j, Y')}}</td>
                <td><a href="/console/showcases/image/{{$showcase->id}}">Image</a></td>
                <td><a href="/console/showcases/edit/{{$showcase->id}}">Edit</a></td>
                <td><a href="/console/showcases/delete/{{$showcase->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <div class="button-wrap">
      <a href="/console/showcases/add" class="cms-button left-button">New Showcase</a>
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
