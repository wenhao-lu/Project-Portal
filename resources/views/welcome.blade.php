@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')

<section class="intro">
        
    <h2 class="intro-text">Introduction</h2>

    <p class="intro-text-1">
    Welcome to our Private Family Portal - an exclusive space dedicated to the well-being and togetherness of our cherished family members. 
    Here, within the secure confines of our virtual home, we unite to cultivate healthier, happier lives. 
    Our Family Portal is not just a platform; it's a digital haven where only our closest family members can connect, share, and thrive. 
    </p><p class="intro-text-2">This is where we collectively manage our personal goals, track fitness progress, explore wholesome recipes, and coordinate family activities with the utmost privacy and care. 
    Our shared journey towards well-being begins here, within the embrace of our family's love and support. 
    </p><p class="intro-text-3">As we embark on this intimate voyage, we'll strengthen our bonds, celebrate our achievements, and cherish the shared moments that define our unique family. 
    Welcome to a world where family comes first, and our collective health and happiness take center stage.
    </p>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    @foreach ($projects as $project)

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3>{{$project->title}}</h3>

            </div>
            
            @if ($project->image)
                <div class="w3-container w3-margin-top">
                    <img src="{{asset('storage/'.$project->image)}}" width="200">
                </div>
            @endif

            <div class="w3-container w3-padding">

                @if ($project->url)
                    View Project: <a href="{{$project->url}}">{{$project->url}}</a>
                @endif

                <p>
                    Posted: {{$project->created_at->format('M j, Y')}}
                    <br>
                    Type: {{$project->type->title}}
                </p>

                <a href="/project/{{$project->slug}}" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    @endforeach

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

</section>

@endsection
