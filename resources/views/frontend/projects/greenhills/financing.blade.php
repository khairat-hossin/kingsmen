@extends('frontend.projects.greenhills.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero_financial" class="d-flex justify-cntent-center align-items-center">
    <div class="container">
      <div class="row">
        <h1 class="text-center text-white" data-aos="fade-left"> Secure Home and Land Financing at Green Hills – Low-Interest Rates and Flexible Payment Plans!  </h1>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ===== About the project ===== -->
    <section class="py-0">
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <h3 class="text-center text-white bg-success py-3" data-aos="fade-left"> Green Hills LLC Armenia provides highly competitive and flexible options for all stages of homeownership and Land Purchase.
        </h3>
          <div class="col-lg-6 col-md-5 box mx-3" data-aos="fade-up">
            <p>
                At Green Hills LLC Armenia, we understand the importance of making sure home buyers are equipped with an understanding of all the important financial decisions throughout the process. <br><br>

                That's why we provide detailed guidance on the different types of home and lands financing program available, as well as in-depth advice from our experts on how to make the most out of any given financing option. This ensures that customers get the best deal possible and can make informed decisions about their future investments.</p>
          </div>
          <div class="col-lg-5 col-md-5 mt-3 box" data-aos="fade-right">
            <p>
                For those looking for an easy way to buy their first home or without worrying about getting into too much debt, At Green Hills LLC we have several special programs and offers designed just for you.  <br><br>

                Getting financing from Green Hills LLC Armenia is simple and stress-free thanks to their quick online application process and attentive customer service team. Customers can rest assured knowing that Green Hills LLC Armenia will take care of everything from start to finish – so you can focus on what’s really important: creating your dream home!

              </p>
          </div>

          <a href="{{ route('frontend.greenhills_home') }}" class="btn btn-outline-warning w-75">Check offers</a>
        </div>
      </div>
    </section>
    <!-- ==== End about the project ==== -->

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
                  <div class="icon"><img src="{{ asset('assets/img/greenhills/online features/feature-1.jpg')}}" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href="{{ route('frontend.greenhills_faq') }}"> Green Hills info </a></h4>
                  <a href="{{ route('frontend.greenhills_faq') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box">
                  <div class="icon"><img src="{{ asset('assets/img/greenhills/online features/feature-2.jpg') }}" class="img-fluid" alt="img"> </div>
                  <h4 class="title"><a href="{{ route('frontend.greenhills_who_we_are') }}">Who we are</a></h4>
                  <a href="{{ route('frontend.greenhills_who_we_are') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <div class="icon"><img src="{{ asset('assets/img/greenhills/online features/feature-3.jpg') }}" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href="">Message us</a></h4>
                  <a href="#about" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Contact us</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><img src="{{ asset('assets/img/greenhills/online features/feature-4.jpg') }}" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href=""> Register Online </a></h4>
                  <a href="#about" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Sign up</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><img src="{{ asset('assets/img/greenhills/online features/feature-5.jpg') }}" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href="{{ route('frontend.greenhills_financing') }}"> Financing </a></h4>
                  <a href="{{ route('frontend.greenhills_financing') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Proceed</a>
                </div>
              </div>

              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><img src="{{ asset('assets/img/greenhills/online features/feature-6.jpg') }}" class="img-fluid" alt="img"></div>
                  <h4 class="title"><a href="{{ route('frontend.greenhills_buy_your_home') }}"> Buy your Home </a></h4>
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
          <img src="{{ asset('assets/img/greenhills/clients/client-4.png') }}" class="img-fluid" alt="logo">
        </div>
      </div>
    </section>

  </main><!-- End #main -->

 @endsection
