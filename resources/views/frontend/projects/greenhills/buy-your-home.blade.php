@extends('frontend.projects.greenhills.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')>

  <!-- ======= Hero Section ======= -->
  <section id="hero_buy_your_home" class="d-flex justify-cntent-center align-items-center">
    <div class="container">
      <div class="row">
        <h1 class="text-center text-white mt-5" data-aos="fade-left">Complimentary Home Design With Every Land Purchase</h1>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section class="py-0">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-white bg-success py-3" data-aos="fade-right">4 models of home Design to choose from, Depending on your needs !</h2>
                <div class="box" data-aos="fade-up">
                    Liv, Moon, Astrid and Revna  are the four models available, each in three different sizes (200 m2 - 300 m2 - 400 m2). All of them feature a modern design but have touches of traditional features to keep that classic look. So whether you're looking for something small and cozy or grand and spacious, The Villas at Green Hills have it all. Enjoy the stunning views from your villa, relax in your private pool or just spend time in the lush gardens – whatever you decide to do, The villas at Green Hills promises you a truly unforgettable experience. Get set for a luxurious getaway that will leave you feeling relaxed and rejuvenated.
                </div>
                <h3 class="bg-secondary py-3 text-center text-white" data-aos="fade-up">Choose the house Design of your dreams
                </h3>
            </div>
        </div>
    </section>

    <!-- ======= Dream house Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">
        <h1 class="box w-xxl-25 fw-bolder text-center text-xxl-start">Villa Moon</h1>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Moon 200 Garden View.png" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">200 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 700 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 280,000 USD</h5>
              <a href="buy-your-home/moon-200sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Villa Moon 300 m Pool View.png" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">300 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 900 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 470,000  USD</h5>
              <a href="buy-your-home/moon-300sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Villa Moon 400m Garden View.png" class="img-fluid lazy" alt="img" ></div>
              <h4 class="title"><a href="">400 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 1000 Sqm</h6>
              <h6 class="text-danger">Buy it Now:  600,000 USD</h5>
              <a href="buy-your-home/moon-400sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

        </div>

      </div>
      <div class="container">
        <h1 class="box w-md-25 fw-bolder text-center text-xxl-start mt-3">Villa Liv</h1>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Lv RV 200 m.png" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">200 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 700 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 280,000 USD</h5>
              <a href="buy-your-home/liv-200sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Villa Liv 300 m .png" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">300 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 900 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 470,000 USD</h5>
              <a href="buy-your-home/liv-300sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Layer RV 400 M.png" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">400 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 1000 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 600,000 USD</h5>
              <a href="buy-your-home/liv-400sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

        </div>

      </div>
      <div class="container">
        <h1 class="box w-xxl-25 fw-bolder text-center text-xxl-start mt-3">Villa Astrid</h1>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Astrid 200 m Garden side.jpg" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">200 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 700 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 280,000 USD</h5>
              <a href="buy-your-home/astrid-200sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/AStrid 300 gs.jpg" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">300 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 900 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 470,000 USD</h5>
              <a href="buy-your-home/astrid-300sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/AStrid 400 Road Side.jpg" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">400 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 1000 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 600,000 USD</h5>
              <a href="buy-your-home/astrid-400sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

        </div>

      </div>
      <div class="container">
        <h1 class="box w-xxl-25 fw-bolder text-center text-xxl-start  mt-3">Villa Revna</h1>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Villa Revna 200 m PV.png" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">200 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 700 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 280,000 USD</h5>
              <a href="buy-your-home/revna-200sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Villa Revna 300 sv.png" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">300 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 900 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 470,000 USD</h5>
              <a href="buy-your-home/revna-300sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img data-src="../../assets/img/greenhills/buy-your-home/Villa Revna 400m pv.png" class="img-fluid lazy" alt="img"></div>
              <h4 class="title"><a href="">400 Sqm Fully Equiped</a></h4>
              <h6 class="text-success">Land: 1000 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 600,000 USD</h5>
              <a href="buy-your-home/revna-400sqm.html" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Learn More</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Dream house  Boxes Section -->

    <!-- ===== Own home of greenhills ===== -->
    <section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xxl-6">
                    <img class="img-fluid lazy" data-src="../../assets/img/greenhills/raw-img/Familly contractor.jpg" alt="img">
                </div>
                <div class="col-md-6 col-xxl-6 box">
                    <h1 class="fs-1 text-success">Build your Own Home</h1>
                    <h6>You can choose to purchase the land and build your own house or hire one of our recommended contractors to do the work for you.</h6>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSePEVzsvrdHnx_ygMFcON3_4nBwJ5xHQU8JxWsjdjtpApOjnA/viewform" class="btn btn-outline-warning">Real state program starting 992$ per month</a>
                    <h6 class="text-danger">Important: With Every Purchase claim your  instant Gift A Package Design Worth 20,000 USD</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Development logo -->
    <section>
      <div class="container">
        <div class="m-3  text-center">

          <h3 class="text-center mt-3">Project Development - Sales and Marketing</h3>
          <img data-src="../../assets/img/greenhills/clients/client-4.png" class="img-fluid lazy" alt="logo">
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @endsection
