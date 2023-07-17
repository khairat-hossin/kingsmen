@extends('frontend.projects.greenhills.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero_amenities" class="d-flex justify-cntent-center align-items-center">
    <div class="container">
      <div class="row">
        <h1 class="text-center text-white mt-5" data-aos="fade-left">Enjoy exceptional cuisine, beautiful views, and extraordinary service -it's the perfect place to celebrate life, come rain or shine!  </h1>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section class="py-0">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-white bg-success py-3 mb-0" data-aos="fade-right">Green Hills offers you the best return on your investment like no any other real estate invest investment invest investmentment seetment </h3>
            </div>
        </div>
    </section>

    <!-- ======= Dream house Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-home/Moon 200 Garden View.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_activities_entertainment') }}">Activities and entertainment</a></h4>
              <a href="{{ route('frontend.greenhills_activities_entertainment') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-home/Villa Moon 300 m Pool View.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_business_technology') }}">Business and technology</a></h4>
              <a href="{{ route('frontend.greenhills_business_technology') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-home/Villa Moon 400m Garden View.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_kindergarten') }}">Kindergarten <br> school</a></h4>
              <a href="{{ route('frontend.greenhills_kindergarten') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-home/Villa Moon 400m Garden View.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_learning_center') }}">Learning <br> center</a></h4>
              <a href="{{ route('frontend.greenhills_learning_center') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-home/Villa Moon 400m Garden View.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_urban_infrastructure') }}">Urban infrustructure</a></h4>
              <a href="{{ route('frontend.greenhills_urban_infrastructure') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Dream house  Boxes Section -->

    <!-- ======= Dream house Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">
        <h2 class="box w-xxl-25 fw-bolder text-center text-xxl-start">Buy your Home At Green Hills</h2>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-home/Moon 200 Garden View.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_byh_moon_200sqm') }}">200 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 700 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 280,000 USD</h5>
              <a href="{{ route('frontend.greenhills_byh_moon_200sqm') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-home/Villa Moon 300 m Pool View.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_byh_moon_300sqm') }}">300 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 900 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 470,000  USD</h5>
              <a href="{{ route('frontend.greenhills_byh_moon_300sqm') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-home/Villa Moon 400m Garden View.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_byh_moon_400sqm') }}">400 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 1000 Sqm</h6>
              <h6 class="text-danger">Buy it Now:  600,000 USD</h5>
              <a href="{{ route('frontend.greenhills_byh_moon_400sqm') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

        </div>

      </div>

      <!-- ===== paragraph section ===== -->
          <div class="container py-5 bg-light mt-3" data-aos="fade-up">
              <h2 class="text-center pb-3">Buy your Land and build your Own Home Design at Green Hills  </h2>
              <div class="row row-cols-1 row-cols-lg-2">
                  <div class=" " data-aos="fade-right">
                      <img src="../../assets/img/greenhills/overview/pic-3.jpg"  class="img-fluid" alt="pic">
                  </div>

                  <div class=" d-flex align-items-center justify-content-center" data-aos="fade-left">
                      <div>
                          <h6 class="text-success">Plot Prices are Starting at : 58,770 USD</h6>
                          <h6 class="text-success"> Plot sizes are Starting from:  653 Sqm</h6>
                          <h6 class="text-danger">  Special offer on first 60 land Purchases: </h6>
                          <h6 class="text-success">Payment Facilities on Plots : </h6>
                          <h6 class="text-success">Same- Day Approval on Financing </h6>
                          <h6 class="text-success">Available up to 7 Years with 0% Down-Payment </h6>
                          <h6> Financing Granted Online, All you have to do is to register online . </h6>
                          <a href="https://docs.google.com/forms/d/e/1FAIpQLSePEVzsvrdHnx_ygMFcON3_4nBwJ5xHQU8JxWsjdjtpApOjnA/viewform" class="btn btn-outline-warning">Submit land purchase/register online</a>
                      </div>
                  </div>
              </div>
          </div>
      <!-- End paragraph section -->

    </section><!-- End Dream house  Boxes Section -->

        <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
          <div class="container-fluid">

            <div class="section-title pt-5">
            <h2>Online features</h2>
            <p>You can go to this section to get more information about our mission and vission.</p>
          </div>

            <div class="row">
              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <div class="icon-box">
                  <div class="icon"><img src="../../assets/img/greenhills/online features/feature-1.jpg" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href=""> Green Hills info </a></h4>
                  <a href="{{ route('frontend.greenhills_faq') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                  <div class="icon"><img src="../../assets/img/greenhills/online features/feature-2.jpg" class="img-fluid" alt="img"> </div>
                  <h4 class="title"><a href="">Who we are</a></h4>
                  <a href="{{ route('frontend.greenhills_who_we_are') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <div class="icon"><img src="../../assets/img/greenhills/online features/feature-3.jpg" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href="">Message us</a></h4>
                  <a href="#about" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Contact us</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><img src="../../assets/img/greenhills/online features/feature-4.jpg" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href=""> Register Online </a></h4>
                  <a href="#about" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Sign up</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><img src="../../assets/img/greenhills/online features/feature-5.jpg" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href=""> Financing </a></h4>
                  <a href="{{ route('frontend.greenhills_financing') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Proceed</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><img src="../../assets/img/greenhills/online features/feature-6.jpg" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href=""> Buy your Home </a></h4>
                  <a href="{{ route('frontend.greenhills_buy_your_home') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto"> Proceed </a>
                </div>
              </div>


            </div>

          </div>
       </section><!-- End Icon Boxes Section -->


    <!-- Project Development logo -->
    <section>
      <div class="container">
        <div class="m-3  text-center">

          <h3 class="text-center mt-3">Project Development - Sales and Marketing</h3>
          <img src="../../assets/img/greenhills/clients/client-4.png" class="img-fluid" alt="logo">
        </div>
      </div>
    </section>

  </main><!-- End #main -->

 @endsection
