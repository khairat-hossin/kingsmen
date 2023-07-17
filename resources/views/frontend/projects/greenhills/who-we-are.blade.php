@extends('frontend.projects.greenhills.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero_who_we_are" class="d-flex justify-cntent-center align-items-center">
    <div class="container">
      <div class="row">
        <h1 class="text-center text-white" data-aos="fade-left"> Dedicated to Delivering Quality Services and Superior Customer Satisfaction</h1>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ===== About the project ===== -->
    <section class="py-0">
      <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 d-flex align-items-center justify-content-center">
          <h3 class="text-center text-white bg-success py-3" data-aos="fade-left">  Hills City is a project Planned and Executed by Kingsmen Investments
        </h3>
          <div class="box mx-3" data-aos="fade-up">
            <p>Kingsmen Investments Armenia is a leading Investment company dedicated to providing comprehensive and personalized investment solutions for clients in Armenia. Established in 2020, the firm is well-positioned to meet the needs of institutional investors, high net worth individuals, corporate entities, and other organizations seeking expert advice on asset allocation and portfolio management.  </p>
          </div>
          <div class=" mt-3 box" data-aos="fade-right">
            <h3>Resources and funds</h3>
            <p>
                The city will be financed by Green Hills LLC, which holds full ownership of the company. It is expected that revenues generated from these investment opportunities will provide funding for public services such as roads and infrastructure development. <br><br>

                Green Hills City is an exciting opportunity for both investors and residents alike! <br><br>

                Additionally, the project seeks to create new job opportunities in Armenia. The city will be built from the ground up, creating jobs in construction and related fields, as well as providing new employment opportunities for locals. This can have a major impact on the local economy, and it's hoped that Green Hills City will become a hub of innovation and growth for all of Armenia. <br><br>

                The primary shareholders of Green Hills LLC are dedicated to creating an environmentally-friendly space with sustainability at its core. The company is committed to pursuing renewable energy sources and working with local businesses to reduce emissions. With this forward-thinking approach, Green Hills City has the potential to be a model for sustainable living across Armenia and beyond!

              </p>
          </div>

          <a href="http://www.kmen.me/" class="btn btn-outline-warning w-50 mt-4">Check offers</a>
        </div>
      </div>
    </section>
    <!-- ==== End about the project ==== -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

          <h3 class="text-center mb-5">Our Partners</h3>

          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center ">
              <div class="swiper-slide"><img src="{{ asset('assets/img/greenhills/clients/client-1.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/img/greenhills/clients/client-2.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/img/greenhills/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section><!-- End Clients Section -->


        <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
          <div class="container-fluid">

            <div class="section-title pt-5">
            <h2>Useful links</h2>
          </div>

            <div class="row">
              <div class="col-md-6 col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <div class="icon-box">
                  <div class="icon"><img src="{{ asset('assets/img/greenhills/online features/feature-1.jpg') }}" class="img-fluid" alt="img"></div>
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



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Ashtarak Yeghvard Highway - Green Hills Sity</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@kmen.me</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+(374) 33 69 69 69</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button class="btn btn-outline-warning" type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- Project Development logo -->
    <section>
      <div class="container">
        <div class="m-3  text-center">

          <h3 class="text-center mt-3">Project Development - Sales and Marketing</h3>
          <img src="{{ asset('assets/img/greenhills/clients/client-4.png" class="img-fluid') }}" alt="logo">
        </div>
      </div>
    </section>

  </main><!-- End #main -->

 @endsection
