 @extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-services" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12 col-sm-12 col-xl-12 col-lg-12">
                    <h2 class="text-center  hero_subhead text-uppercase lh-base mt-5 text-warning fw-light">
                        {{ $banner_text }}<span>.</span></h2>
                </div>
            </div>

            <div class="row"></div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <h2 class="text-center mt-3">{{ $title }}</h2>


        <section class="py-2">

            <div id="service_cards" class="container border border-warning border-2 raw_card" data-aos="fade-up">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 m-auto g-4">
                    @if($services)
                        @foreach ($services as $service)
                            <div class="col text-justify text-white">
                                <div class="card h-100 bg-dark">
                                    <h2 class="card-title fw-semibold text-center">{{ $service->solution_title }}</h2>
                                    <img src="{{ $service->solution_image }}" class="card-img-top img-fluid"
                                        style="height:auto; width: auto;" alt="image">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <h4 class="mb-3">
                                            {{ $service->solution_summary }}
                                        </h4>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section>
            <div id="service_cards" class="container border border-warning border-2 card raw_card">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
                    <div> <img src="assets/img/services/Kingsmen Team.jpg" class="img-fluid"></img></div>
                    <div class=" ">
                        <div class="my-2">
                            <h2 class="text-center my-2">Meet our Team of Experts</h2>
                            <p>Our consultants help you create an efficient operational system tailored to your specific
                                needs. We provide budgeting advice and risk assessment and management, so you can make
                                informed decisions while taking into account potential risks.</p>
                        </div>
                        <a href="{{ route('frontend.team') }}" class="btn"> Meat the team </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service section -->

    </main><!-- End #main -->
@endsection

<style>
    #hero-services {
        background: url("{{ $banner }}") top center;
    }
</style>
