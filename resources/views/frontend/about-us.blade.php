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
                    <h1 class="text-center lh-base mt-4 customAboutBannareText">
                        @if ($banner_text)
                            {{ $banner_text }}
                        @endif
                        <span>.</span></h1>
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
                        <h3 class="faq-page customFaqTextTitle">{{ $about->question }}</h3>

                        <!-- About Us answer -->
                        <div class="customFaqBodytext">
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
                            <img src="assets/img/about/Kingsmen Team.jpg" class="card-img-top img-fluid"
                            style="height:auto; width: auto;" alt="...">
                            <h2 class="card-title text-center customGetToNo">Get to Know Our Team: Introducing the Best and
                                Brightest in Real Estate!</h2>
                            <div class="card-body">
                                <div class="card-text">
                                    <p class="customProudtext">We are proud to introduce our partners, managers and team who have been
                                        instrumental in helping us reach the success we enjoy today</p>
                                    {{-- <a href="{{ route('frontend.team') }}" class="btn">Learn more</a> --}}
                                    <a class="FKF6mc TpQm9d QmpIrf" href="{{ route('frontend.team') }}" aria-label="Learn More"><div class="NsaAfc"><p>Learn More</p></div><div class="wvnY3c" jsname="ksKsZd"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col text-justify text-black my-3 my-sm-0 my-md-0 my-lg-0 my-xl-0 my-xxl-0">
                        <div class="card h-100 bg-white">
                            <img src="assets/img/about/money investment.jpg" class="card-img-top img-fluid"
                            style="height:auto; width: auto;" alt="...">
                            <h2 class="card-title text-center customGetToNo">Unlocking the Power of Your Investment Potential!
                            </h2>
                            <div class="card-body">
                                <p class="card-text">
                                <h3 class="customProudtext ">Our goal is to provide long-term value while minimizing risk. Kingsmen
                                    Investment Opportunities is here to help you make the most of your money!</h3>
                                {{-- <a href="{{ route('frontend.invests') }}" class="btn">Invest with Kingsmen</a> --}}
                                <a class="FKF6mc TpQm9d QmpIrf" href="{{ route('frontend.invests') }}" aria-label="Learn More"><div class="NsaAfc"><p>Invest with Kingsmen</p></div><div class="wvnY3c" jsname="ksKsZd"></div></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br> <br>
    </main><!-- End #main -->
@endsection

@if (isset($banner))
    <style>
        #hero-about{
            background: url('{{ $banner }}') top center;
        }
    </style>
@endif
