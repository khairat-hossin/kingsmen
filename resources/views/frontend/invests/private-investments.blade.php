@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-10 col-lg-8">
                    <h1 class="text-warning fw-light hero_text">
                </div>
            </div>
            <div class="row"></div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <section class="inner-page">
            <div class="container">
                <h3 class=" card raw_card mt-5  pt-3" style="font-family: 'Inter', sans-serif;">
                    Our team at Kingsmen Private Investments has years of experience and expertise in international markets.
                    We know the ins-and-outs of the countries we are in, so we are able to identify investment opportunities
                    that may not be available on the public market. With our connections and carefully crafted strategies,
                    you will benefit from higher returns that make your investment even more profitable.
                    <div class="d-flex justify-content-center align-items-center mt-5">
                        <a href="" class="btn"> Register now </a>
                    </div>
                </h3>
            </div>
        </section>

        <section class="inner-page">
            <div class="container card raw_card" style="  font-family: 'Inter', sans-serif;">
                <h4 class="fw-bold pt-2">Kingsmen Private Investments offers a variety of services to assist you with your
                    investment plans. You can expect the following from us:</h4>
                <ul>
                    <li>Comprehensive market analysis</li>
                    <li>Strategic portfolio creation and management</li>
                    <li>Strategic portfolio creation and management</li>
                    <li>Access to exclusive investment opportunities</li>
                    <li>Ongoing monitoring of your portfolio</li>
                    <li>Professional guidance and support</li>
                    <li>We strive to ensure that all our clients have everything they need to make smart investments and
                        enjoy maximum returns.</li>
                </ul>
                <div class="d-flex justify-content-center align-items-center mt-5">
                    <a href="" class="btn"> Register now </a>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
