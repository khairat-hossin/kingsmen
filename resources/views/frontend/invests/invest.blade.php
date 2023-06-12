@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-invests" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12 col-sm-12 col-xl-6 col-lg-8">
                    <h2 class="text-center   hero_subhead text-uppercase lh-base mt- fw-light">
                        Choose Your Preferred Method <span>.</span></h2>
                </div>
            </div>

            <div class="row"></div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <section id="one-tree-armenia" class="">
            <div class="container border border-warning border-2  bg-dark text-white card raw_card">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
                    <div> <img src="assets/img/invests/Crowdfunding.jpg" class="img-fluid"></img></div>
                    <div class=" ">
                        <h2 class="my-3">Crowdfunding</h2>
                        <div class="my-2">
                            <p>Kingsmen, a company dedicated to raising capital and investing in various real estate
                                projects, has embraced the strategy of crowdfunding to help finance some of their projects.
                                Through online platforms, Kingsmen has been able to collect small amounts of money from a
                                large number of people to help fund different real estate ventures. This approach has
                                allowed Kingsmen to access a wider pool of potential investors who may be interested in
                                contributing smaller amounts of money.</p>
                        </div>
                        <a href="{{ route('frontend.crowdfundings') }}" class="btn"> Check Project </a>
                    </div>
                </div>
                <div
                    class="row row-cols-1 row-cols-lg-2 row-cols-md-2 mt-5  d-flex justify-content-center align-items-center">
                    <div> <img src="assets/img/invests/Private Equity.jpg" class="img-fluid"></img></div>
                    <div class=" mx-auto">
                        <h2 class="my-3">Private Equity</h2>
                        <div class="my-2">
                            <p>Kingsmen is involved in private equity, raising capital from private investors, establishing
                                companies and investing in various real estate projects. Private equity can be a lucrative
                                form of alternative investment, as it allows investors to potentially profit from the
                                restructuring and growth of businesses that are not publicly traded.</p>
                        </div>
                        <a href="{{ route('frontend.privateInvestments') }}" class="btn"> Check Project </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Faq Section ======= -->
        <h2 class="text-center my-3">About Kingsmen Investments</h2>
        <div class="row row-cols-lg-3 row-cols-1 row-cols-md-2 m-auto ">
            <div class="container my-4">
                <div class="faq_wrap bg-dark text-white">
                    <img src="assets/img/products/qna.jpg" class="card-img-top" alt="...">
                    <h3 class="mt-3">Frequently Asked Questions</h3>
                    <div class="card_inner mt-3">
                        <a href="{{ route('frontend.faq') }}" class="btn">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="container  my-4">
                <div class="faq_wrap bg-dark text-white">
                    <img src="assets/img/products/gtc.jpg" class="card-img-top" alt="...">
                    <h3 class="mt-3">Get to know the company</h3>
                    <div class="card_inner mt-3">
                        <a href="{{ route('frontend.about_us') }}" class="btn">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="container  my-4">
                <div class="faq_wrap bg-dark text-white">
                    <img src="assets/img/products/gtk.jpg" class="card-img-top" alt="...">
                    <h3 class="mt-3">Get to know the team</h3>
                    <div class="card_inner mt-3">
                        <a href="{{ route('frontend.team') }}" class="btn">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </section>
        <!-- End Faq section -->
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta p-3">
            <div class="container" data-aos="fade-up">
                <div class="text-center">
                    <h3>Stay in the know about new Investment opportunities</h3>
                    <a class="cta-btn" href="#">Subscribe</a>
                </div>
            </div>
        </section><!-- End Cta Section -->

    </main><!-- End #main -->
@endsection
