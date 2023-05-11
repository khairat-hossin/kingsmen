@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-about" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12 col-sm-12 col-xl-12 col-lg-12">
                    <h1 class="text-center text-white  hero_subhead text-uppercase lh-base mt-4 fw-light">
                        {{ $banner_text }}<span>.</span></h1>
                </div>
            </div>

            <div class="row"></div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us ======= -->
        <section class="faq-container bg-dark text-white">
            @if ($about_us)
                @foreach ($about_us as $about)
                    <div class="faq-one">

                        <!-- About Us question -->
                        <h3 class="faq-page text-warning">{{ $about->question }}</h3>

                        <!-- About Us answer -->
                        <div class="faq-body bg-warning text-dark">
                            <p>{{ $about->answer }}</p>
                        </div>
                    </div>
                    <hr class="hr-line my-2">
                @endforeach
            @endif
            </div>
            </div>
        </section>
        <section>
            <div class="container border border-warning border-2 p-5">
                <div class="row  row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-md-2">
                    <div class="col text-justify text-black">
                        <div class="card h-100 bg-white">
                            <h2 class="card-title fw-semibold text-center">Get to Know Our Team: Introducing the Best and
                                Brightest in Real Estate!</h2>
                            <img src="assets/img/about/Kingsmen Team.jpg" class="card-img-top img-fluid"
                                style="height:auto; width: auto;" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                <h3 class=" ">We are proud to introduce our partners, managers and team who have been
                                    instrumental in helping us reach the success we enjoy today</h3>
                                <a href="{{ route('frontend.team') }}" class="btn">Learn more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-justify text-black my-3 my-sm-0 my-md-0 my-lg-0 my-xl-0 my-xxl-0">
                        <div class="card h-100 bg-white">
                            <h2 class="card-title fw-semibold text-center">Unlocking the Power of Your Investment Potential!
                            </h2>
                            <img src="assets/img/about/money investment.jpg" class="card-img-top img-fluid"
                                style="height:auto; width: auto;" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                <h3 class=" ">Our goal is to provide long-term value while minimizing risk. Kingsmen
                                    Investment Opportunities is here to help you make the most of your money!</h3>
                                <a href="{{ route('frontend.invests') }}" class="btn">Invest with Kingsmen</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container-fluid">
                <div class="row text-center ">
                    <div></div>
                    <div>
                        <a href=""> <img src="assets/img/kmen.png" class="img-fluid"> </a>
                    </div>
                    <div></div>
                </div>
            </div>
        </section>


        <br> <br>
    </main><!-- End #main -->
@endsection

<style>
    #hero-about{
        background: url('{{ $banner }}') top center;
    }
</style>
