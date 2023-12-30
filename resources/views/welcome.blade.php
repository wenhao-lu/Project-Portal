@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')


<section class="project-container">


    @foreach ($projects as $project)

    <div class="project-grid-item">
        <div class="project-card">
                @if ($project->image)
                    <div class="project-image">
                        <a href="{{$project->url}}" target="_blank">
                            <img src="{{asset('storage/'.$project->image)}}">
                        </a>
                    </div>
                @endif

            <div class="project-title">
                {{$project->title}}
            </div>

            <div class="project-content">
                {{$project->content}}
            </div>

            <div class="project-link-container">
                <div class="project-link">
                    <a href="{{$project->url}}"   target="_blank">
                        <img src="{{asset('storage/live.png')}}" alt="live-link" />
                    </a>
                </div>
                <div class="project-link">
                    <a href="{{$project->slug}}"  target="_blank">
                        <img src="{{asset('storage/github.png')}}" alt="github-link" />
                    </a>
                </div>
          </div>



        </div>


    </div>    



    @endforeach

</section>

<hr>

<section class="w3-padding">
    <h2 class="contact-text">Contact Me</h2>
    <div class="contact-link-container">
        
        <div class="contact-link">
            <a href="mailto:wenhaolu.kevin@gmail.com"  target="_blank">
                <img src="{{asset('storage/mail1.png')}}" alt="email-link" />
            </a>
        </div>

        <div class="contact-link">
            <a href="https://www.linkedin.com/in/kevin-l-6290b2145/"  target="_blank">
                <img src="{{asset('storage/linkedin.png')}}" alt="linkedin-link" />
            </a>
        </div>

    </div>    

</section>

@endsection
