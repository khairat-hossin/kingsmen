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
                        <span>.</span></h2>
                </div>
            </div>


            <div class="row"></div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= projects-under-development ======= -->
        <section class="projects">
            <h2 class="my-3 fw-bold text-black text-center">Projects Under-Development </h2>

            <div class="container text-center card raw_card" data-aos="fade-up">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
                    <div class="gx-5" style=" font-family: lato; text-align: justify; ">
                    @if (count($projects) > 0)
                    @foreach ($projects as $project)
                        <div>
                            <img src="{{ $project->project_logo }}" class="img-fluid my-5">
                            <p> {{ $project->home_page_header_title }} </p>
                        </div>
                    </div>
                    <div class="opportunity-slider swiper my-2">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ $project->home_page_photos_gallery }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/projects/p2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/projects/p3.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <div class="my-3"> </div>
                        <div class="row">
                            <div class="swiper-pagination"></div>
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
            </div>
            @endforeach
        @endif
            <div class="container text-center card raw_card" data-aos="fade-up">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
                    <div class="gx-5" style=" font-family: lato; text-align: justify; ">
                        <div>
                            <img src="assets/img/projects/green Hills logo copy.png" class="img-fluid my-5">
                            <p>
                                Green Hills Urban City is the perfect opportunity for individuals and families looking to
                                invest in their homeland. With its no down payment, 0% interest rate policy, this project
                                makes it easier for every young person or family – whether living in Armenia or abroad to
                                purchase land and build their dream home.<br>
                                InstagramInstagramFacebook<br>
                                Copywrite 2023 Kingsmen LLC<br>

                            </p>
                        </div>
                    </div>
                    <div class="opportunity-slider swiper my-2">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="assets/img/projects/g1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/projects/g2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/projects/g2.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <div class="my-3"> </div>
                        <div class="row">
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="my-5">
                            <span>City: </span> Ashtarak City <br>
                            <span>Available: </span> Private Homes , Lands<br>
                            <span>Starting Price: </span> 40,000 USD <br>
                            <a href="" class="btn mt-3">check project</a>
                        </div>
                    </div>
                </div>
            </div><!-- End  projects-under-development -->
    </main><!-- End #main -->
@endsection
