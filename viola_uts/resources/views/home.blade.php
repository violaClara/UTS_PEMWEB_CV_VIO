@extends('app')


@section('content')
<!-- HERO SECTION START -->
<section class="hero-section d-flex align-items-center" id="intro">
   <div class="intro_text">
      <svg viewBox="0 0 1320 300">
         <text x="50%" y="50%" text-anchor="middle">HI</text>
      </svg>
   </div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="hero-content-box">
               <span class="hero-sub-title">I am {{ $profile->name }}</span>
               <h1 class="hero-title">{{ $profile->subtitle }}</h1>

               <div class="hero-image-box d-md-none text-center">
                  <img src="{{ asset($profile->photo) }}" alt="Profile Image" />
               </div>

               <p class="lead">{{ $profile->description }}</p>
               <div class="button-box d-flex flex-wrap align-items-center">
                  <a href="{{ $profile->cv_link }}" class="btn tj-btn-secondary">Download CV <i class="flaticon-download"></i></a>
                  <ul class="ul-reset social-icons">
                     @foreach($socialLinks as $platform => $link)
                     <li>
                        <a href="{{ $link }}"><i class="fa-brands fa-{{ $platform }}"></i></a>
                     </li>
                     @endforeach
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-6 d-none d-md-block">
            <div class="hero-image-box text-center">
               <img src="{{ asset($profile->photo) }}" alt="Profile Image" />
            </div>
         </div>
      </div>
      <div class="funfact-area">
         <div class="row">
            <div class="col-6 col-lg-3">
               <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="{{ $profile->years_experience }}">0</span></div>
                  <div class="text">Years of <br />Experience</div>
               </div>
            </div>
            <div class="col-6 col-lg-3">
               <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="{{ $profile->projects_completed }}">0</span>+</div>
                  <div class="text">Project <br />Completed</div>
               </div>
            </div>
            <div class="col-6 col-lg-3">
               <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="{{ $profile->tech_skills }}">0</span>+</div>
                  <div class="text">Tech <br />Skills</div>
               </div>
            </div>
            <div class="col-6 col-lg-3">
               <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                  <div class="number"><span class="odometer" data-count="{{ $profile->licenses_certifications }}">0</span></div>
                  <div class="text">Licenses <br />& Certifications</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- HERO SECTION END -->

@endsection
