@extends('frontend.projects.greenhills.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Greenhills</span></h2>
          <p class="animate__animated animate__fadeInUp">
            Invest in your HOMELAND. </b>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More </a>
        </div>
      </div>


      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">In Details</h2>
          <p class="animate__animated animate__fadeInUp">Green Hills Urban City is the perfect opportunity for individuals and families looking to invest in their homeland. With its no down payment, 0% interest rate policy, this project makes it easier for every young person or family – whether living in Armenia or abroad  to purchase land and build their dream home. <br> <br>

          </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Our Mission</h2>
          <p class="animate__animated animate__fadeInUp">
            The government of Armenian has also come forward to support the Green Hills Urban City project. The motivation behind the project is to create new areas where individuals can have access to comfortable living conditions and develop their own businesses, while also providing an opportunity for those who are retired or of a more mature age. <br></p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Mission details</h2>
          <p class="animate__animated animate__fadeInUp">
            The exciting thing about this project is that it allows for buyers to pay for their plot of land over a period of 5 years, with no down payment and no interest, making it easy to make the purchase.Green Hills Urban City is an amazing opportunity for those looking to invest in Armenia.  <br></p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Vission</h2>
          <p class="animate__animated animate__fadeInUp">The project offers not only access to comfortable living conditions but also an opportunity to make your dream home come true without any financial distractions.  So come and be part of this exciting journey – it's all about making the future, yours!</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ===== Video of greenhills ===== -->
    <section id="why-us" class="why-us p-1">
      <div class="container-fluid">
        <h4 class="text-center mt-2 bi-box box">
          At Green Hills, we are dedicated to providing the best investment plan in Armenia. We understand that investing your hard-earned money is a big decision and our goal is to provide you with he security and peace of mind that comes with our personalized service. With us, you can be sure that your funds will be safe and secure, while also ensuring that your children will have a secure financial future in their homeland.
        </h4>

        <div class="row px-3">
          <div class="col-lg-12" data-aos="fade-left">
            <div class="content">
              <h3 class="text-center">Introducing <strong>Greenhills</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Green Hills City is a project Planned and Executed by Kingsmen Investments  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>Kingsmen Investments Armenia is a leading Investment company dedicated to providing comprehensive and personalized investment solutions for clients in Armenia. Established in 2020, the firm is well-positioned to meet the needs of institutional investors, high net worth individuals, corporate entities, and other organizations seeking expert advice on asset allocation and portfolio management.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Resources and funds <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>The city will be financed by Green Hills LLC, which holds full ownership of the company. It is expected that revenues generated from these investment opportunities will provide funding for public services such as roads and infrastructure development. <br><br>

                      Green Hills City is an exciting opportunity for both investors and residents alike!  <br><br>

                      Additionally, the project seeks to create new job opportunities in Armenia. The city will be built from the ground up, creating jobs in construction and related fields, as well as providing new employment opportunities for locals. This can have a major impact on the local economy, and it's hoped that Green Hills City will become a hub of innovation and growth for all of Armenia.  <br><br>

                      The primary shareholders of Green Hills LLC are dedicated to creating an environmentally-friendly space with sustainability at its core. The company is committed to pursuing renewable energy sources and working with local businesses to reduce emissions. With this forward-thinking approach, Green Hills City has the potential to be a model for sustainable living across Armenia and beyond!
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                    "Dedicated to Delivering Quality Services and Superior Customer Satisfaction" <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>At Green Hills, we are dedicated to providing the best investment plan in Armenia. We understand that investing your hard-earned money is a big decision and our goal is to provide you with he security and peace of mind that comes with our personalized service. With us, you can be sure that your funds will be safe and secure, while also ensuring that your children will have a secure financial future in their homeland.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-12 video-box" style='background-image: url("../../assets/img/greenhills/why-us.jpg");' data-aos="fade-right">

            <a href="https://www.youtube.com/embed/I5FufnB4PgA"  class="glightbox play-btn mb-4"></a>
          </div>

        </div>

      </div>
    </section>

    <!-- ===== Our mission ===== -->
<section class="py-4 mb-3 box">
  <div class="container ">
    <div class="row">
      <div class="col-lg-12  py-3">
        <h2 class="text-center text-success fw-bold" data-aos="fade-up">OUR MISSION</h2>
        <p  data-aos="fade-up">Green Hills Urban City is the perfect opportunity for individuals and families looking to invest in their homeland. With its no down payment, 0% interest rate policy, this project makes it easier for every young person or family – whether living in Armenia or abroad  to purchase land and build their dream home. <br><br>

          The government of Armenian has also come forward to support the Green Hills Urban City project. The motivation behind the project is to create new areas where individuals can have access to comfortable living conditions and develop their own businesses, while also providing an opportunity for those who are retired or of a more mature age.
          The exciting thing about this project is that it allows for buyers to pay for their plot of land over a period of 5 years, with no down payment and no interest, making it easy to make the purchase. <br><br>

          Green Hills Urban City is an amazing opportunity for those looking to invest in Armenia. The project offers not only access to comfortable living conditions but also an opportunity to make your dream home come true without any financial distractions.  So come and be part of this exciting journey – it's all about making the future, yours!</p>
      </div>
      <div class="text-center">
        <a class="btn btn-outline-warning w-75" href="{{ route('frontend.greenhills_faq') }}" >Frequently asked questions</a>
      </div>
    </div>
  </div>
</section>


    <!-- ======= Dream house Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('assets/img/greenhills/buy-your-home/Moon 200 Garden View.png') }}" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="">Activities and entertainment</a></h4>
              <a href="{{ route('frontend.greenhills_activities_entertainment') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('assets/img/greenhills/buy-your-home/Villa Moon 300 m Pool View.png') }}" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="">Business and technology</a></h4>
              <a href="{{ route('frontend.greenhills_business_technology') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('assets/img/greenhills/buy-your-home/Villa Moon 400m Garden View.png') }}" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="">Kindergarten <br> school </a></h4>
              <a href="{{ route('frontend.greenhills_kindergarten') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('assets/img/greenhills/buy-your-home/Villa Moon 400m Garden View.png') }}" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="">Learning <br> center</a></h4>
              <a href="{{ route('frontend.greenhills_learning_center') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-3 col-lg-2 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('assets/img/greenhills/buy-your-home/Villa Moon 400m Garden View.png') }}" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="">Urban infrustructure</a></h4>
              <a href="{{ route('frontend.greenhills_urban_infrastructure') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Dream house  Boxes Section -->



    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <h3 class="text-center mb-5">Our Partners</h3>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center ">
            <div class="swiper-slide"><img data-src="{{ asset('assets/img/greenhills/clients/client-1.png') }}" class="img-fluid lazy" alt=""></div>
            <div class="swiper-slide"><img data-src="{{ asset('assets/img/greenhills/clients/client-2.png') }}" class="img-fluid lazy" alt=""></div>
            <div class="swiper-slide"><img data-src="{{ asset('assets/img/greenhills/clients/client-3.png') }}" class="img-fluid lazy" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Clients Section -->



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
                <p>Ashtarak Yeghvard Highway - Green Hills City</p>
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
        <div class="m-3 text-center">
          <h3 class="text-center mt-3">Project Development - Sales and Marketing</h3>
          <img src="{{ asset('assets/img/greenhills/clients/client-4.png') }}" class="img-fluid lazy" alt="logo">
        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
