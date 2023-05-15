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
                <h1 class="text-white text-center fw-lighter text-uppercase lh-base mt-2 fw-light">
                    living outside the hustle and bustle of Yerevan can be a refreshing change
                    <span>!</span>
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main>
    <section class="p-2" style="text-align: justify;">
        <div class="container">

            <div class="row row-cols-1 row-cols-lg-3 ">
                <h3 class="text-center" data-aos="fade-up">71 Sqm Eco Homes</h3>
                <!-- Swiper -->
                <div id="home-slide">
                    <div class="swiper mySwiper" data-aos="fade-up">
                        <div class="swiper-wrapper  mt-lg-5 mt-xl-5 ">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="../../assets/img/ecogardens/71-sq-km/s1.jpg" loading="lazy" alt="img"
                                        class="img-fluid">
                                    <p class="fs-6">71 Sqm</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="../../assets/img/ecogardens/71-sq-km/s2.jpg" loading="lazy" alt="img"
                                        class="img-fluid">
                                    <p class="fs-6">Street View Eco Gardens</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="../../assets/img/ecogardens/71-sq-km/s3.jpg" loading="lazy" alt="img"
                                        class="img-fluid">
                                    <p class="fs-6">Exterior Front Facade 75 Sqm Eco Home</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="../../assets/img/ecogardens/71-sq-km/s4.jpg" loading="lazy" alt="img"
                                        class="img-fluid">
                                    <p class="fs-6">Ready Built Kitchen</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="../../assets/img/ecogardens/71-sq-km/s5.jpg" loading="lazy" alt="img"
                                        class="img-fluid">
                                    <p class="fs-6">Glass Façade from Floor to Ceiling</p>
                                </div>
                            </div>/
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="autoplay-progress">
                            <svg viewBox="0 0 48 48">
                                <circle cx="24" cy="24" r="20"></circle>
                            </svg>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-2">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col" data-aos="fade-left">
                    <img src="../../assets/img/ecogardens/71-sq-km/nb5.jpg" loading="lazy" class="img-fluid">
                    <h3 class="text-center text-success my-2">Plot Nb: B5</h3>
                    <ul type="square">
                        <li>Total Plot Area: 348 Sqm</li>
                        <li>Garden: 277 Sqm </li>
                        <li>Eco Home: 71 Sqm</li>
                        <li>Amenities: Free Design for your Interior. </li>
                        <li>Condition: Fully Decorated - European Standards - Fully Planted Garden .</li>
                        <li>Delivery: One Year from Contract Signature. </li>
                        <li>Price: 81,500 USD</li>
                        <li type="none">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeodg4J6ai90VHN1M5_lFkrJv8eqzZeJ_W8DEK-YIORa7doyA/viewform"
                                class="btn my-3"> I AM INTERESTED </a>
                        </li>
                    </ul>
                </div>
                <div class="col" data-aos="fade-up">
                    <img src="../../assets/img/ecogardens/71-sq-km/c2.jpg" loading="lazy" class="img-fluid">
                    <h3 class="text-center text-success my-2">Plot Nb: B5</h3>
                    <ul type="square">
                        <li>Total Plot Area: 375 Sqm </li>
                        <li>Garden: 304 Sqm</li>
                        <li>Eco Home: 71 Sqm</li>
                        <li>Amenities: Free Design for your Interior.</li>
                        <li>Condition: Fully Decorated - European Standards - Fully Planted Garden . </li>
                        <li>Delivery: One Year from Contract Signature.</li>
                        <li>Price: 83,000 USD</li>
                        <li type="none">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeodg4J6ai90VHN1M5_lFkrJv8eqzZeJ_W8DEK-YIORa7doyA/viewform"
                                class="btn my-3"> I AM INTERESTED </a>
                        </li>
                    </ul>
                </div>
                <div class="col" data-aos="fade-right">
                    <img src="../../assets/img/ecogardens/71-sq-km/a3.jpg" loading="lazy" class="img-fluid">
                    <h3 class="text-center text-success my-2">Plot Nb: A3</h3>
                    <ul type="square">
                        <li>Total Plot Area: 407 Sqm</li>
                        <li>Garden: 336 Sqm</li>
                        <li>Eco Home: 71 Sqm</li>
                        <li>Amenities: Free Design for your Interior.</li>
                        <li>Condition: Fully Decorated - European Standards - Fully Planted Garden .</li>
                        <li>Delivery: One Year from Contract Signature.</li>
                        <li>Price: 85,000 USD</li>
                        <li type="none">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeodg4J6ai90VHN1M5_lFkrJv8eqzZeJ_W8DEK-YIORa7doyA/viewform"
                                class="btn my-3"> I AM INTERESTED </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" data-aos="fade-up">
            <div class="row row-cols-1">
                <h3>INTERACTIVE MAP</h3>
                <iframe src="https://widgets.scribblemaps.com/sm/?d=true&z=true&l=true&id=JgqNrndXUJ&s"
                    allow="geolocation" allowfullscreen width="720" height="550" frameborder="0" title="DD"
                    loading="lazy" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
    </section>
</main>
@section('content')
