@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero-one-tree-armenia" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row"></div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <section id="one-tree-armenia" class="">
      <div class="container-fluid text-center">
        <div class="row " style="  font-family: 'Inter', sans-serif;">
          <h2 class="text-dark fw-bold my-sm-0">{{ $crowdfunding_project->title_2 }}</h2>
          <div id="sign-up" class="container" data-aos="fade-up" >
            <div class="row gy-2 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
              <div class="col-12 col-sm-6 col-xl-5 col-md-5">
                <div class="icon-box bg-dark rounded-pill">
                  <h3><a href="">OPPORTUNITY OVERVIEW</a></h3>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container-fluid text-center card raw_card" data-aos="fade-up">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
          <div class="gx-5" style="   font-family: 'Inter', sans-serif; text-align: justify; ">
            <p>
                {{ $crowdfunding_project->paragraph_2 }}
            </p>
          </div>
          <div class="opportunity-slider swiper my-2">
            <div class="swiper-wrapper align-items-center"
            @php
                $data = $crowdfunding_project->photos_gallery;
                $photos = json_decode($data, true);
            @endphp>

            @if($photos)
            @foreach($photos as $photo)
                <div class="swiper-slide">
                    <img src="{{ asset($photo) }}" class="img-fluid my-4"> </img>
                </div>
            @endforeach
            @endif
                </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
            <div>
              <a href="./one-tree-armenia.html" class="btn my-5">Invest
              now</a>
            </div>
    </section>
    <section  class="bg-dark p-3">
      <div class="container text-white">
        <div class="row  row-cols-1 row-cols-lg-3 row-cols-md-3  d-flex justify-content-center align-items-center">
          <div  id=" highlights ">
            <h2 class="text-warning f">Project highlights</h2>
            <ul>
              <li>
                <h6 class="text-warning f">Project Name:</h6>{{ $crowdfunding_project->project_name }}
              </li>
              <li>
                <h6 class="text-warning f">Investment Type:</h6> {{ $crowdfunding_project->type_of_investment }}
              </li>
              <li>
                <h6 class="text-warning">Investing In:</h6>{{ $crowdfunding_project->investment_in }}
              </li>
              <li>
                <h6 class="text-warning">Plot Area: </h6>{{ $crowdfunding_project->built_up_area_size_per_sqm }}sqm
              </li>
              <li>
                <h6 class="text-warning">Number of Trees:</h6> 15,333(!!!!)
              </li>
              <li>
                <h6 class="text-warning">Project Location:</h6>{{ $crowdfunding_project->project_location }}
              </li>
              <li>
                <h6 class="text-warning">Started Planting:</h6>November 2021(!!!!)
              </li>
              <li>
                <h6 class="text-warning">First Harvest Expected:</h6>September 2028(!!!!)
              </li>
            </ul>
          </div>
          <div>
            <h2 class="text-warning">Financial Highlights </h2>
            <ul>
              <li>
                <h6 class="text-warning">Invested Amount till Date:</h6> {{ $crowdfunding_project->total_cost_of_investment }}$
              </li>
              <li>
                <h6 class="text-warning">Remaing to Invest until 1st Harvest:</h6>452,884$(!!!!)
              </li>
              <li>
                <h6 class="text-warning">Offered at :</h6>2,463,475 USD(!!!!)
              </li>
              <li>
                <h6 class="text-warning">Total Shares number:</h6>{{ $crowdfunding_project->total_registered_shares_at_local_authoritise }}
              </li>
              <li>
                <h6 class="text-warning">Maximum Shares:</h6>For Sale: {{ $crowdfunding_project->shares_listed_for_sale }}
              </li>
              <li>
                <h6 class="text-warning">Price of 1 Share:</h6>{{ $crowdfunding_project->share_price }}$
              </li>
              <li>
                <h6 class="text-warning">Payment method:</h6>One Time Payment
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
                <h6 class="text-warning">Registration Type:</h6>Full Ownership at The Armenian Companies Register
              </li>
              <li>
                <h6 class="text-warning">Capital Security :</h6>up to 100%
              </li>
              <li>
                <h6 class="text-warning">Security Asset:</h6>Land Value, Insurance Policy
              </li>
              <li>
                <h6 class="text-warning">Insurance Type:</h6>Fire , Natural Disaster, War , Labor
              </li>
              <li>
                <h6 class="text-warning">Planted and Managed by:</h6> Agroworks LLC
              </li>
            </ul>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
            <a href="./one-tree-armenia.html"  class="btn">Invest
              now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Tab for project extra -->
    <div class="project_tab_wrapp mt-5">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button"
              role="tab" aria-controls="tab1" aria-selected="true">Return on Investment</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
              role="tab" aria-controls="tab2" aria-selected="false">Timeline Summary</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button"
              role="tab" aria-controls="tab3" aria-selected="false">Detailed Breakdown</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button"
              role="tab" aria-controls="tab4" aria-selected="false">Photo Gallery</button>
          </li>
        </ul>
        <div class="tab-content bg-dark text-white" id="myTabContent">
          <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <section id="Return on Investment" class="">
              <div class="container">
                <div
                  class="row row-cols-1 row-cols-lg-2 row-cols-md-2 d-flex justify-content-center align-items-center">
                  <div>
                    <img src="../../assets/img/crowdfunding/one-tree-armenia/tree.jpg" class="img-fluid">
                  </div>
                  <div class="" style="text-align: justify;   font-family: 'Inter', sans-serif;">
                    <h6 class="">Each 1 Share Value is offered for : <span class="text-info">{{ $crowdfunding_project->share_price }} USD</span></h6>
                    <h6 class=" ">Each 1 Share Value Represents The Following : 4,500 sqm of Land - Number of Trees
                      : <span class="text-info">144</span></h6>
                    <h6 class=" ">Capital Return Duration: <span class="text-info">{{ $crowdfunding_project->investment_duration_in_years }}</span>Years Starting
                      Year:<span class="text-info">{{ $crowdfunding_project->project_starting_date }}</span></h6>
                    <h6 class=" ">Starting Year <span class="text-info">{{ $crowdfunding_project->project_starting_date }} : {{ $crowdfunding_project->expected_profit_percent_after_break_even_as_per_study }}% </span>Per Year Annual Income
                    </h6>
                    <a href="./one-tree-armenia.html" class="btn mt-5">Invest now
                      </a>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <section id="timeline summary text">
              <div class="container" style="text-align: justify; font-family: 'Inter', sans-serif;">
                <div class="row">
                  <h6>Report of our activities between August 2020 and March 2023. Prepared by Agronomist Hanna
                    Gaspard
                    Partner and C.E.O At Agroworks LLC Who Managed and Executed the works. </h6>
                  <h6> <span class="text-warning">August 2020:</span>Land purchase, assessing soil quality, and developing a rehabilitation plan.</h6>

                  <h6> <span class="text-warning">September - December 2020:</span> Removing weeds, debris and other non-native flora. Building
                    structures to
                    store equipment, installing irrigation, and improving soil quality.</h6>
                  <h6><span class="text-warning">January - March 2021:</span> Planting new trees, nurturing young plants, and focusing on good plant
                    health.
                    Initial fertilization and spraying insecticides and fungicides. </h6>
                  <h6><span class="text-warning">April - June 2021:</span>  Continuing rehabilitation work, upgrading irrigation systems and
                    fertilization
                    intensity.</h6>
                  <h6><span class="text-warning"> July - September 2021: </span>Maintenance of the plantation, fertilizer application, surveillance for
                    insects
                    and fungal infection. Preparation for the fall.</h6>
                  <h6><span class="text-warning"> October - December 2021: </span>Harvest season, hiring extra labour as required, and remove small
                    flowers and
                    prunning the trees we dont want our trees to hold fruits</h6>
                  <h6><span class="text-warning">January - March 2022:</span> Pre-season preparation, Soil enrichment and pruning of plants.</h6>

                  <h6><span class="text-warning">April - June 2022:</span> Upgrading irrigation and fertilization methods, addressing any pest or fungal
                    issues.
                  </h6>
                  <h6><span class="text-warning"> July - September 2022:</span> Normal Check on the orchard, Emptying the irrigation system preparing for
                    the
                    winter season.</h6>
                  <h6><span class="text-warning">October - December 2022:</span> Recruiting and training new personnel, planning the first stages of
                    expansion.
                  </h6>
                  <h6><span class="text-warning">January - March 2023:</span> Evaluating last year’s performance, continuing work on the plantation and
                    preparing for expansion.</h6>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <section id="Detailed Breakdown">
              <div class="container" style="text-align: justify;   font-family: 'Inter', sans-serif;">
                <div class="row">
                  <h6><span class="text-warning"> August 2020:</span> We purchased our plot of land in August 2020. Our initial efforts were focused on
                    evaluating the quality and fertility of the soil, developing our rehabilitation plan, and
                    analysing other
                    factors that determine a site's potential for successful planting.</h4> <br>
                    <h6><span class="text-warning">September - December 2020:</span> The first step in our rehabilitation plan was to remove all
                      non-native
                      species, weeds and debris. This process took several months, with numerous workers and machinery
                      involved. After clearing the land, our team installed irrigation systems that were essential in
                      improving the soil quality for planting the trees. We built structures to store equipment and
                      created a
                      devoted administrative office on the farm.</h6> <br>
                    <h6><span class="text-warning"> January - March 2021:</span> We began planting new trees, treating all young walnut plants with
                      necessary
                      care, including preliminary fertilization, pest and disease control, and regular irrigation. Our
                      team of
                      experts worked hard to keep the crops healthy and saved some of the best crops for future seeds.
                    </h6>
                    <br>
                    <h6><span class="text-warning">April - June 2021:</span>  During this quarter, we continued with our rehabilitation work on the farm,
                      consistently weeding the plantation, and replenishing soil nutrients. We improved the irrigation
                      systems
                      to ensure that the plants were receiving enough water to grow well. We made the required
                      adjustments to
                      make sure that fertilizers were administered in the correct quantities.</h6>
                    <br>
                    <h6><span class="text-warning">July - September 2021:</span>   During this quarter, we focused on crop management, conducting constant
                      surveys
                      to avoid pests and fungal infections. Our team carefully monitored the crop irrigation to ensure
                      that
                      the right amount of water was delivered to the plants. We continued to prepare for the fall,
                      hiring
                      extra labor to help us manage the increased workload.</h6> <br>
                    <h6><span class="text-warning">October 2021 - March 2022:</span> We spent much of this quarter pruning the existing trees, providing
                      the
                      right amount of nutrients to the trees, and building up the soil's nutrient status. </h6>
                    <br>
                    <h6><span class="text-warning">April - June 2022: </span>This quarter was dedicated to enhancing irrigation and fertilization
                      methods for
                      the plantation. Our team invested heavily in the establishment of sustainable agricultural
                      practices,
                      focusing on minimizing energy expenditure while maximizing crop yield.</h6> <br>
                    <h6><span class="text-warning">July - December 2022 :</span> Our team invested heavily in recruiting and training new personnel. we
                      wanted
                      to bring in new perspectives and ideas for our business. We also started planning the first
                      stages of
                      expansion, strategizing for the long-term future.</h6> <br>
                    <h6><span class="text-warning">January - March 2023:</span>  We took a moment to evaluate our previous year's successes and
                      shortcomings to
                      plan out our next steps. Simultaneously, we optimized our plantation to be as sustainable as
                      possible,
                      ensuring that our crop yield remains high in order to start Harvesting in 2028 As planned or
                      Maybe much
                      faster! </h6> <br>
                    <h6><span class="text-warning">Challenges: </span>Our biggest challenge was removing the rocks from the land , the soil is furtille
                      the Land
                      location is fantastic and the project is being well Maintained. You are all welcome to come and
                      check
                      our beautiful Walnut Farm ! </h6> <br><br><br><br>
                    <h5 class="fw-bolder">Best Regards, </h5> <br>
                    <h6>Hanna Kasbar</h6> <br>
                    <h6>Head Agronomist </h6> <br>
                    <h6>Agrowork LLC</h6> <br><br>
                </div>
                <a href="./one-tree-armenia.html" class="btn">Invest now
                  </a>
              </div>
            </section>
          </div>
          <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
            <section class=" tab_gallery ">
              <article class="row row-cols-1 row-cols-sm-2 g-2 d-flex justify-content-center">
                @php
                    $data = $crowdfunding_project->photos_gallery;
                    $photos = json_decode($data, true);
                @endphp

                @if($photos)
                    @foreach ($photos as $photo => $filename)
                        <div class="col-sm-6 col-md-3 p-2 m-0 text-center">
                        {{-- <a data-fancybox="gallery"
                            data-src="https://res.cloudinary.com/demo/image/upload/w_1000,c_scale,q_auto/castle.jpg"
                            data-caption="Castle on a Hill">
                            <img src="https://res.cloudinary.com/demo/image/upload/w_200,h_155,c_lfill,q_auto/castle.jpg" />
                        </a> --}}
                            <img src="{{ asset($filename) }}" alt="photo gallery">
                        </div>
                    @endforeach
                @endif

              </article>
            </section>

          </div> <!-- /tab-pane -->
        </div>
      </div>
    </div>
    <!-- / end Tab for project extra -->
    <section id="benefits to investing in walnuts" class="py-5">
      <div class="container-fluid" style="text-align: justify; font-family: 'Inter', sans-serif;">
        <div id="sign-up" class="container" data-aos="fade-up" >
          <div class="row gy-2 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-12 col-sm-6 col-xl-5 col-md-5">
              <div class="icon-box bg-dark rounded-pill">
                <h3 class="text-uppercase"><a href=""> 5 benefits to investing in walnuts </a>  </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-2 card raw_card" style="text-align: justify;   font-family: 'Inter', sans-serif;" data-aos="fade-up">
        <div class="row mx-1">
          <ol class="fs-6">
            <li class="fw-semi-bold">High yields: Walnut trees can produce nuts for over 40 years, providing a consistent and high yield of
              nuts each year, making it a profitable investment in the long run.</li>
            <li class="fw-semi-bold">Increasing demand: Walnuts are becoming increasingly popular due to their health benefits, leading to
              an increasing demand, especially in Asia.</li>
            <li class="fw-semi-bold">Low maintenance: Walnut trees are relatively easy to maintain with low input costs compared to other
              farming investments.</li>
            <li class="fw-semi-bold">Environmentally friendly: Growing walnut trees is an environmentally friendly investment since the
              trees require less water compared to other crops and have a low carbon footprint.</li>
            <li class="fw-semi-bold">Tangible product: Unlike other investment options, investing in walnut farms provides a physical,
              tangible product that can be sold in both domestic and international markets.</li> <br>
            <h6 class="fw-bold">Overall, investing in walnuts is a great way to diversify your investment portfolio and reap the
              benefits of a long-term investment. However, it's essential to note that like any other investment,
              there are risks involved, and it is critical to research potential investments well before making any
              decisions.</h5>
        </div>
      </div>
      </div>
    </section>
  </main><!-- End #main -->
@endsection

<style>
    #hero-one-tree-armenia{
        background: url("{{ asset($banner) }}") top center;
    }
</style>
