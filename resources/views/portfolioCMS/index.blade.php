@extends ('layout.console')

@section ('content')

<section class="cms-section">
    <div class="container">
      <p class="cmsTitle">Portfolio Content Management System</p>
      <div class="cms-sector-container">
      <div class="cms-sector-wrap">
          <a href="{{ url('/console/projects/list') }}" class="cms-sector-link">
            <p class="cms-sector-title">Projects</p>
            <img src="/images/project.png" alt="cms-icon-project" class="cms-sector-icon">
          </a>
        </div>
        <div class="cms-sector-wrap">
          <a href="{{ url('/console/skills/list') }}" class="cms-sector-link">
            <p class="cms-sector-title">Skills</p>
            <img src="/images/skill.png" alt="cms-icon-skill" class="cms-sector-icon">
          </a>
        </div>
        <div class="cms-sector-wrap">
          <a href="{{ url('/console/stacks/list') }}" class="cms-sector-link">
            <p class="cms-sector-title">Stacks</p>
            <img src="/images/stack.png" alt="cms-icon-stack" class="cms-sector-icon">
          </a>
        </div>
        <div class="cms-sector-wrap">
          <a href="{{ url('/console/educations/list') }}" class="cms-sector-link">
            <p class="cms-sector-title">Educations</p>
            <img src="/images/education.png" alt="cms-icon-education" class="cms-sector-icon">
          </a>
        </div>
        <div class="cms-sector-wrap">
          <a href="{{ url('/console/types/list') }}" class="cms-sector-link">
            <p class="cms-sector-title">Types</p>
            <img src="/images/type.png" alt="cms-icon-type" class="cms-sector-icon">
          </a> 
        </div>
        <div class="cms-sector-wrap">
          <a href="{{ url('/console/showcases/list') }}" class="cms-sector-link">
            <p class="cms-sector-title">Showcases</p>
            <img src="/images/contact.png" alt="cms-icon-contact" class="cms-sector-icon">
          </a>
        </div>
        <div class="cms-sector-wrap">
          <a href="{{ url('/console/works/list') }}" class="cms-sector-link">
            <p class="cms-sector-title">Works</p>
            <img src="/images/user.png" alt="cms-icon-user" class="cms-sector-icon">
          </a>
        </div>
        <div class="cms-sector-wrap">
          <a href="{{ url('/console/contacts/list') }}" class="cms-sector-link">
            <p class="cms-sector-title">Contacts</p>
            <img src="/images/contact.png" alt="cms-icon-contact" class="cms-sector-icon">
          </a>
        </div>
      </div>
      <div class="button-wrap">
        <a href="/console/dashboard" class="cms-button">Back to Dashboard</a>
      </div>
    </div>
</section>

@endsection
