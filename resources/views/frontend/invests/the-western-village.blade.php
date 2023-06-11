@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-the-western-village" class=" d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-10 col-lg-8">
                    <h1 class="text-warning fw-light hero_subhead text-uppercase lh-base mt-2 fw-light">
                       {{ $crowdfunding_project->banner_text }}<span>.</span></h1>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </section>
    <!-- End Hero -->
    <main id="main">
        <section id="the-western-village" class="">
            <div class="container-fluid text-center">
                <p>{{ $crowdfunding_project->title_1 }}</p>
                <div class="row " style="font-family: Inter, Helvetica, sans-serif;">
                    <div id="sign-up" class="container" data-aos="fade-up">
                        <div class="row gy-2  justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                            <div class="col-12 col-sm-6 col-xl-5 col-md-5">
                                <div class="icon-box bg-dark rounded-pill">
                                    <h3><a href="">OPPORTUNITY OVERVIEW</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid text-center card raw_card" data-aos="fade-up">
                    <div class="row row-cols-1 d-flex justify-content-center align-items-center">
                        <div class="gy-5" style="   font-family: 'Inter', sans-serif;text-align: justify; ">
                            <p>
                                {!! nl2br(htmlspecialchars($crowdfunding_project->paragraph_1)) !!}
                            </p>
                        </div>
                        <div class="col-5 opportunity-slider swiper my-2">
                            <div class="swiper-wrapper align-items-center">
                                @php
                                    $data = $crowdfunding_project->photos_gallery;
                                    $photos = json_decode($data, true);
                                @endphp>

                                @if($photos)
                                    @foreach($photos as $photo)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($photo) }}" class="img-fluid"></img>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="swiper-pagination p-4"></div>
                            <div class=""></div>
                            <div class="">Prelimary Design Under Development</div>
                        </div>
                        <div class="gx-5 col-5 opportunity-slider swiper my-2">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="../../assets/img/crowdfunding/one-tree-armenia/Aragatsavan.JPG"
                                        class="img-fluid"></img>
                                </div>
                                <div class="swiper-slide">
                                    <img src="../../assets/img/crowdfunding/one-tree-armenia/DJI_0497.JPG"
                                        class="img-fluid my-4"></img>
                                </div>
                                <div class="swiper-slide">
                                    <img src="../../assets/img/crowdfunding/one-tree-armenia/DJI_0497.JPG"
                                        class="img-fluid my-4"></img>
                                </div>
                            </div>
                            <div class="swiper-pagination p-5"></div>
                            <div class=" "></div>
                            <div>Location photos Plus Licensed homes to be executed in 2023</div>
                        </div>
                        <div class="gy-5" style=" font-family: 'Inter', sans-serif;text-align: justify; "class="gx-5"
                            style="   font-family: 'Inter', sans-serif;text-align: justify; ">
                            <p>
                                {!! nl2br($crowdfunding_project->paragraph_2) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="https://docs.google.com/spreadsheets/d/1HJIHdnjD5_ZHRSO-PHTaVGULu3i64BTVvaYQxAADlgo/edit#gid=310063620"
                        class="btn my-5"> View summarized cost </a>
                </div>
        </section>
        <section class="bg-dark p-3">
            <div class="container text-white">
                <div class="row  row-cols-1 row-cols-lg-3 row-cols-md-3  d-flex justify-content-center align-items-center">
                    <div id=" highlights ">
                        <h2 class="text-warning f">Project highlights</h2>
                        <ul>
                            <li>
                                <h6 class="text-warning f">Project Name:</h6> {{ $crowdfunding_project->project_name }}
                            </li>
                            <li>
                                <h6 class="text-warning f">Investment Type:</h6> {{ $crowdfunding_project->type_of_investment }}
                            </li>
                            <li>
                                <h6 class="text-warning">Investing In:</h6> {{ $crowdfunding_project->investment_in }}
                            </li>
                            <li>
                                <h6 class="text-warning">Plot Area: </h6>{{ $crowdfunding_project->built_up_area_size_per_sqm }}
                            </li>
                            <li>
                                <h6 class="text-warning">Project Location:</h6>{{ $crowdfunding_project->project_location }}
                            </li>
                            <li>
                                <h6 class="text-warning">Project Launching: </h6>{{ $crowdfunding_project->project_starting_date }}
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-warning">Financial Highlights </h2>
                        <ul>
                            <li>
                                <h6 class="text-warning">Invested Amount till Date:</h6> 1,265,000$
                            </li>
                            <li>
                                <h6 class="text-warning">Remaing to Invest until 1st Harvest:</h6>1,061,360$
                            </li>
                            <li>
                                <h6 class="text-warning">Offered at :</h6>2,326,360 USD
                            </li>
                            <li>
                                <h6 class="text-warning">Total Shares number:</h6>{{ $crowdfunding_project->total_registered_shares_at_local_authoritise }}
                            </li>
                            <li>
                                <h6 class="text-warning">Minimum Shares for sale:</h6>For Sale: 5
                            </li>
                            <li>
                                <h6 class="text-warning">Maximum Shares for sale:</h6>{{ $crowdfunding_project->shares_listed_for_sale }}
                            </li>
                            <li>
                                <h6 class="text-warning">Sold Shares:</h6>2
                            </li>
                            <li>
                                <h6 class="text-warning">Price of 1 Share:</h6>{{ $crowdfunding_project->share_price }}$
                            </li>
                            <li>
                                <h6 class="text-warning">Payment method:</h6>One time Payment
                            </li>
                            <li>
                                <h6 class="text-warning">Minimum Number of Shares :</h6>1
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-warning">Ownership & Securities</h2>
                        <ul>
                            <li>
                                <h6 class="text-warning">Registration Type:</h6> Full Ownership at The Armenian Companies
                                Register
                            </li>
                            <li>
                                <h6 class="text-warning">Capital Security :</h6>up to 100%
                            </li>
                            <li>
                                <h6 class="text-warning">Security Asset:</h6>Land Value
                            </li>
                            <li>
                                <h6 class="text-warning">Planted and Managed by:</h6> Kingsmen Investments
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12">
                        <a href="./one-tree-armenia.html" class="btn">Request</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tab for project extra -->
        <div class="project_tab_wrapp mt-5">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                            type="button" role="tab" aria-controls="tab1" aria-selected="true">Return on
                            Investment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                            type="button" role="tab" aria-controls="tab2" aria-selected="false">Timeline
                            Summary</button>
                    </li>
                </ul>
                <div class="tab-content bg-dark text-white" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <section id="Return on Investment" class="">
                            <div class="container">
                                <div
                                    class="row row-cols-1 row-cols-lg-2 row-cols-md-2 d-flex justify-content-center align-items-center">
                                    <div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24346.27477519841!2d44.334232!3d40.291645!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a9aa1d0bc6a7b%3A0x21a63246231704f5!2sAshtarak%2C%20Armenia!5e0!3m2!1sen!2sus!4v1682962597941!5m2!1sen!2sus"
                                            width="100%" height="300px" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="" style="text-align: justify; font-family: 'inter',sans-serif;">
                                        <strong>Calculate the Cost Based on the Number of Share you Are interested to
                                            Purchase </strong>
                                        <h6 class="">Each 1 Share Value is offered for : <span
                                                class="text-info">55,000 USD</span></h6>
                                        <h6 class=" ">Each 1 Share Value Represents The Following : <span
                                                class="text-info">4,500 sqm of Land </span></h6>
                                        <h6 class=" ">Expecting Selling at:<span class="text-info">60$</span> by the
                                            End of: <span class="text-info">2027</span>
                                        </h6>
                                        <h6 class=" ">Notes:<span class="text-info">The Price of 40$ represents the
                                                Value of a Small Land today, Kingsmen Return on investment is calculated
                                                based on selling Worst Case Scenario calculation </span>
                                        </h6>
                                        <h6 class=" ">Capital Return Duration: <span class="text-info">3</span>Years
                                            Starting
                                            Year:<span class="text-info">2024</span></h6>
                                        <h6 class=" ">Starting Year <span class="text-info">2024 : 33.33 %</span>Per
                                            Year Annual Income
                                        </h6>
                                        <h6 class=" ">Share Value bought at :<span class="text-info">18$/Sqm</span>
                                        </h6>
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScxGVRR1YBwpRzNktQz6orHx34JHoNMlXp8OG3ZCWa_QN9tDA/formrestricted"
                                            class="btn mt-5">Feedback
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <section id="timeline summary text">
                            <div class="container" style="text-align: justify; font-family: 'Inter',sans-serif;">
                                <div class="row">
                                    <div>"Secure Your Real Estate Investments with Kingsmen: Safeguarding Your Money"</div>
                                    <h6> <span class="text-warning">Land has been purchased and registered under Kingsmen
                                            Investments in May 2023</h6>

                                    <h6> <span class="text-warning">Electricity was brought in during June 2023</h6>
                                    <h6><span class="text-warning">Design for the development was finalized and approved in
                                            July 2023</h6>
                                    <h6><span class="text-warning">All necessary permits have been obtained for
                                            infrastructure construction, work will commence shortly Construction includes
                                            roads, sidewalks, lighting, Fence and landscaping.</h6>
                                    <h6><span class="text-warning"> Kingsmen is committed to completing infrastructure
                                            development to the highest standards and in a timely manner.</h6>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScxGVRR1YBwpRzNktQz6orHx34JHoNMlXp8OG3ZCWa_QN9tDA/formrestricted"
                                        class="btn">Invest now
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- / end Tab for project extra -->
        <section id="benefits to investing in walnuts" class="py-5">
            <div class="container-fluid" style="text-align: justify; font-family: lato;">
                <div id="sign-up" class="container" data-aos="fade-up">
                    <div class="row gy-2 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                        <div class="col-12 col-sm-10 col-xl-10 col-md-10 col-lg-10">
                            <div class="icon-box bg-dark rounded-pill">
                                <h3 class="text-uppercase"><a href="">Here are five benefits of crowdfunding into
                                        The Western Village:</a> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-2 card raw_card" style="text-align: justify; font-family: 'inter',sans-serif;"
                data-aos="fade-up">
                <div class="row mx-1">
                    <ol class="fs-6">
                        <li class="fw-semi-bold">
                            Accessible Investment Opportunity: Crowdfunding allows investors to participate in large
                            development projects such as The Western Village at lower investment amounts, which makes
                            investing in lucrative real estate markets more accessible.</li>
                        <li class="fw-semi-bold">Potentially High Returns: Investors in The Western Village have an
                            opportunity to earn high returns on their investment if the project is successful. The real
                            estate market in Parpi Ashtarak Region is rapidly growing, and investing in the area at an early
                            stage can be a smart financial move.</li>
                        <li class="fw-semi-bold">Managed Risks: Kingsmen Investments has years of experience in real estate
                            investments, and they are well-equipped to manage risks and identify profitable opportunities.
                            This means that investors in The Western Village can rely on Kingsmen to develop the
                            infrastructure and execute the project in a professional and competent manner.</li>
                        <li class="fw-semi-bold">Environmentally friendly: Growing walnut trees is an environmentally
                            friendly investment since the
                            trees require less water compared to other crops and have a low carbon footprint.</li>
                        <li class="fw-semi-bold">Transparency: Kingsmen Investments is committed to providing investors
                            with regular and transparent reporting on The Western Village project. This level of
                            communication and transparency allows investors to track their investments and stay updated on
                            the project's progress.</li> <br>
                        <h6 class="fw-bold">Diversification: Investing in The Western Village through crowdfunding also
                            offers investors a chance to diversify their portfolio. Real estate is an excellent hedge
                            against inflation, and investing in a promising development project, such as The Western
                            Village, can result in strong, stable financial returns.</h5>
                </div>
            </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection

@if(isset($banner))
    <style>
        #hero-the-western-village {
            background: url("{{ asset($banner) }}") top center;
        }
    </style>
@endif
