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
                    @if (isset($banner_text))
                     {{ $banner_text }}
                    @endif
                 <span>.</span></h1>
           </div>
  </div>
  <div class="row"></div>
</div>
</section>
<!-- End Hero -->


  <main id="main">
    <section id="the-western-village" class="">
      <div class="container text-justify">
        <p>{{ $crowdfunding_project->title_2 }}</p>
        <div class="row ">
          <div id="sign-up" class="container" data-aos="fade-up" >
            <div class="row gy-2  justify-content-center" data-aos="zoom-in" data-aos-delay="250">
              <div class="col-12 col-sm-6 col-xl-5 col-md-5">
                <div class="icon-box bg-dark rounded-pill">
                  <h3><a href="">CHECK OUR AIRBNB ACCOUNT</a></h3>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container-fluid text-center card raw_card" data-aos="fade-up">
        <div class="row row-cols-1 d-flex justify-content-center align-items-center">
          <div class="gy-5" class="gx-5" style="text-align: center; ">
              <h2> AIRBNB STATISTICS  </h2> <br>
          </div>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button class="bg-dark"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button class="bg-dark"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button class="bg-dark"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button class="bg-dark"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              {{-- <div class="carousel-item"> --}}
                    @php
                        $data = $crowdfunding_project->photos_gallery;
                        $photos = json_decode($data, true);
                    @endphp>

                    @if($photos)
                        @foreach($photos as $photo)
                            <div class="carousel-item active">
                                <img src="{{ asset($photo) }}" class="d-block w-100" alt="..."> </img>
                            </div>
                        @endforeach
                    @endif
                {{-- </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="gy-5" style="text-align: center;" class="gx-5">

            <h2> CHECK OUR EXEL SHEET FOR CASH AND NON CASH TRANSACTIONS  </h2>
            <a href="https://docs.google.com/spreadsheets/d/1FHtPlRxAAwbEC3yWu3dylmT1ZsLWpsfG75LAUAaouR4/edit#gid=1419969866" class="btn my-5"> COST VS PROFIT </a>
          </div>
        </div>
      </div>
    </section>
    <section  class="bg-dark py-3">
      <div class="container-fluid text-white">
        <div class="row  d-flex justify-content-center align-items-center">
          <div  id=" highlights " class="p-0 px-md-5 px-lg-5 px-xl-5">
            <table class="table table-hover table-dark">
              <thead>
                <tr>
                  <th scope="col-6"><h2 class="text-warning f">Project highlights</h2></th>
                  <th scope="col-6"><h2 class="text-warning">Financial Highlights </h2></th>
                  <th scope="col-6"><h2 class="text-warning">Ownership & Securities</h2></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <h6><span class="text-warning f">Project Name:</span> {{ $crowdfunding_project->project_name }}</h6>
                  </th>
                  <td>
                    <h6><span class="text-warning">Invested Amount till Date:</h6>  €940,000.00</h6>
                  </td>
                  <td>
                    <h6><span class="text-warning">Registration Type:</span> Shares  in the Property</h6>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <h6><span class="text-warning f">Investment Type:</span> Hotel Apt</h6>
                  </th>
                  <td>
                    <h6><span class="text-warning">Remaing to Invest:</span>0</h6>
                  </td>
                  <td>
                    <h6><span class="text-warning">Capital Security :</span>up to 100%</h6>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <h6><span class="text-warning">Investing In:</span> {{ $crowdfunding_project->investment_in  }}</h6>
                  </th>
                  <td>
                    <h6><span class="text-warning">Offered at :</span>€990,000.00</h6>
                  </td>
                  <td>
                    <h6><span class="text-warning">Security Asset:</span> Real Estate Value, Insurance Policy</h6>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <h6> <span class="text-warning">Total sellable area: </span> 420 Sqm</h6>
                  </th>
                  <td>
                    <h6><span class="text-warning">Total Shares number:</span> {{ $crowdfunding_project->total_registered_shares_at_local_authoritise }} </h6>
                  </td>
                  <td>
                    <!-- null -->
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <h6> <span class="text-warning">Number of Apts:</span>8</h6>
                  </th>
                  <td>
                    <h6><span class="text-warning">Shares Listed for Sale:</span> 4</h6>
                  </td>
                  <td>
                    <!-- null -->
                  </td>
                </tr>                  <tr>
                  <th scope="row">
                    <h6><span class="text-warning">Project Location: </span>Yerevan Center "Sarmen 1"</h6>
                  </th>
                  <td>
                    <h6><span class="text-warning">Remaining  for Sale: </span>3</h6>
                  </td>
                  <td>
                        <!-- null -->
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <h6><span class="text-warning">Investment Duration: </span> 5 years</h6>
                  </th>
                  <td>
                    <h6><span class="text-warning">Price of 1 Share:</span> {{ $crowdfunding_project->share_price }}$
                    </li>
                  </td>
                  <td>
                         <!-- null -->
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <h6><span class="text-warning">First Profit expected: </span> Monthly, Paid Quarterly</h6>
                  </th>
                  <td>
                    <h6><span class="text-warning">Payment method:  </span>One time</h6>
                    <h6><span class="text-warning">Minimum Number of Shares :</span>  {{ $crowdfunding_project->shares_listed_for_sale }}</h6>
                  </td>
                  <td>
                         <!-- null -->
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <!-- null -->
                  </th>
                  <td>
                    <h6><span class="text-warning">Minimum Number of Shares :</span>1</h6>
                  </td>
                  <td>
                         <!-- null -->
                  </td>
                </tr>
              </tbody>
            </table>


          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
            <a href="./one-tree-armenia.html"  class="btn">Give us feedback</a>
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
              role="tab" aria-controls="tab2" aria-selected="false">Unexploited potential</button>
          </li>
        </ul>
        <div class="tab-content bg-dark text-white" id="myTabContent">
          <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <section id="Return on Investment" class="">
              <div class="container">
                <div
                  class="row row-cols-1 row-cols-lg-2 row-cols-md-2 d-flex justify-content-center align-items-center">
                  <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6095.662029696422!2d44.517441!3d40.190574!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abdd281cc2489%3A0xbab4fee7eb65633b!2sKokopelly!5e0!3m2!1sen!2sus!4v1683125896767!5m2!1sen!2sus" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="" style="text-align: justify;">
                    <p>Calculate the Cost Based on the Number of Share you Are interested to Purchase  </p>
                    <h6 class="">Each 1 Share Value is offered for : <span class="text-info">99000 €</span></h6>
                    <h6 class=" ">Each 1  Share Value Represents The Following  : 10% Ownership in 8 Apts in the Center of Yerevan</h6>
                    <h6 class=" ">Capital Return Duration: <span class="text-info">5 years</span> <br> Starting Year:  <span class="text-info">2028</span>
                    </h6>
                    <h6 class=" ">Starting Year <span class="text-info">2023 :    7.3 %</span>Per Year Annual value
                    </h6>
                    <div class="text-center">
                      <a class="btn my-2" href="../../index.html">Give us Feedback</a>
                      <div class="text-warning">Download Detailed Excel Sheet Showing Cost and Profit</div>
                      <a class="btn" href="https://docs.google.com/spreadsheets/d/1Y44EkY7kFuIUZPjbNUIintIIoub29jnPW5vi7lVmrrM/edit">Download
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
              <section id="timeline summary text">
                <div class="container" style="text-align: justify;">
                  <div class="row">
                    <h6> <span class="text-warning">Until today , our occupency per 10 Month is arround 57% and we are managing an income of 7% .  </h6>

                    <h6> <span class="text-warning">
                      All of this is based on Airbnb and Personal contacts, We recently acquired a software to manage more then 20 Accounts on one callender easy to use so we are sure that this will take the sales up between December to April</h6>
                      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="../../assets/img/crowdfunding/united-8-apartments/s-4.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../../assets/img/crowdfunding/united-8-apartments/s-3.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../../assets/img/crowdfunding/united-8-apartments/s-2.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../../assets/img/crowdfunding/united-8-apartments/s-1.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <div class="text-center my-3">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScxGVRR1YBwpRzNktQz6orHx34JHoNMlXp8OG3ZCWa_QN9tDA/formrestricted" class="btn col-5">Invest now
                        </a>
                      </div>
                  </div>
                </div>
              </section>
            </div>
          </div>

          <!-- /tab-pane -->
        </div>
      </div>
    </div> <br><br><br><br>
    <!-- / end Tab for project extra -->


  </main><!-- End #main -->
@endsection
