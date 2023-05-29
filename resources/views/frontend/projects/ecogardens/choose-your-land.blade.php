@extends('frontend.projects.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12 col-sm-12 col-xl-8 col-lg-8 mt-5">
                  <h1 class="text-white text-center fw-lighter text-uppercase lh-base mt-2 fw-light">Choose Your Land <span>!</span></h1>
              </div>
          </div>
      </div>
</section>
<!-- End Hero -->



<main>
  <section>
    <div class="container" data-aos="fade-up">
        <div class="row row-cols-1">
            @if ($projects->interactive_map)
                <h3 class="text-center">INTERACTIVE MAP</h3>
                <iframe src="{{ $projects->interactive_map }}" allow="geolocation" allowfullscreen width="720" height="550" frameborder="0" title="DD" loading="lazy" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            @endif
        </div>
    </div>
</section>
</main>
@endsection
