@extends('app')


@section('content')

<!-- PORTFOLIO SECTION START -->
<section class="portfolio-section" id="works-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-header text-center">
               <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Recent Works</h2>
               <p class="wow fadeInUp" data-wow-delay=".4s">
                  We transform your vision into a technology that captivates both you and your audience,
                  bringing your ideas to life in an inspiring way.
               </p>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
            <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s">
               <div class="button-group filter-button-group">
                  <button data-filter="*" class="active">All</button>
                  <button data-filter=".website">Website</button>
                  <button data-filter=".app">APP</button>
                  <button data-filter=".game">Games</button>
                  <button data-filter=".iot">IOT</button>
                  <div class="active-bg"></div>
               </div>
            </div>

            <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
               <div class="portfolio-sizer"></div>
               <div class="gutter-sizer"></div>



               <!-- Portfolio Items -->
               @foreach($projects as $project)
               <div class="portfolio-item {{ $project->category }}">
                  <div class="image-box">
                     <img src="{{ asset($project->image_path) }}" alt="{{ $project->title }}" />
                  </div>
                  <div class="content-box">
                     <h3 class="portfolio-title">{{ $project->title }}</h3>
                     <p>{{ $project->description }}</p>
                     <i class="flaticon-up-right-arrow"></i>
                     <a data-mfp-src="#portfolio-wrapper" class="portfolio-link" href="{{ $project->link }}"></a>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!-- PORTFOLIO SECTION END -->

@endsection