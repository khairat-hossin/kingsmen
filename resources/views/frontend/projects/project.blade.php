@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-projects-bg" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12 col-xl-12 col-lg-12text-white">
                    <h2 class="text-warning fw-light hero_subhead">Unlocking the Potential of Real Estate Projects
                        <span>.</span>
                    </h2>
                </div>
            </div>


            <div class="row"></div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= projects-under-development ======= -->
        <section class="projects">
            <h2 class="my-3 fw-bold text-black text-center">Projects Under-Development </h2>

            @if (count($projects) > 0)
                @foreach ($projects as $project)
                    <div class="container text-center card raw_card" data-aos="fade-up">
                        <div
                            class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
                            <div class="gx-5" style=" font-family: lato; text-align: justify; ">
                                <div>
                                    <img src="{{ $project->project_logo }}" class="img-fluid my-5">
                                    <p> {{ $project->home_page_header_title }} </p>
                                </div>
                            </div>
                            <div class="opportunity-slider swiper my-2">
                                <div class="swiper-wrapper align-items-center">
                                    @php
                                        $data = $project->home_page_photos_gallery;
                                        $photos = json_decode($data, true);
                                    @endphp

                                    @foreach ($photos as $photo)
                                        <div class="swiper-slide">
                                            <img src="{{ $photo }}" class="d-block w-100" alt="photo_gallery">
                                        </div>
                                    @endforeach
                                    <div class="my-3"> </div>
                                    <div class="row">
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-5">
                                <span>City: </span> Ashtarak City <br>
                                <span>Village: </span> Parpi<br>
                                <span>Available: </span> Private Homes <br>
                                <span>Starting Price: </span> 85,000 USD <br>
                                <a href="" class="btn mt-3">check project</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
    </main><!-- End #main -->
@endsection
