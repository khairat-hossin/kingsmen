@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero-projects-bg" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-10 col-lg-10 text-white  ">
          <h2 class="text-warning fw-light hero_subhead">Unlocking the Potential of Real Estate Projects <span>.</span></h2>
        </div>
      </div>


 <div class="row"></div>
</div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= projects-under-development ======= -->
    <section class="projects">
        <h2 class="my-3 fw-bold text-black text-center">Projects Under-Development </h2>

        <div class="container text-center card raw_card" data-aos="fade-up">
          <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
            <div class="gx-5" style=" font-family: lato; text-align: justify; ">
              <div>
                <img src="assets/img/projects/Green Hills.jpg"  class="img-fluid my-5">
                <p>
                    Eco Gardens provides customers with a wide selection of properties to choose from, ranging from home areas to land areas. Depending on your needs, our experts can help you customize the perfect area for your requirements. Our knowledgeable personnel will work hard to find you the ideal place, tailored to fit your exact specifications. We understand that a property needs to be both a practical and aesthetically-pleasing environment, so we strive to provide options that can fulfill all of your needs. With Eco Gardens, you can rest assured knowing that you’re making the right decision for your home or land. Visit us today and find out how we can help make your dream property a reality!
                </p>
              </div>
            </div>
            <div class="opportunity-slider swiper my-2">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="assets/img/projects/p1.png" class="d-block w-100" alt="...">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/projects/p2.png" class="d-block w-100" alt="...">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/projects/p3.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <div class="my-3"> </div>
              <div class="row">
                <div class="swiper-pagination"></div>
              </div>
              <div class="my-5">
                <span>City: </span> Ashtarak City <br>
                <span>Village: </span> Parpi<br>
                <span>Available: </span>  Private Homes <br>
                <span>Starting Price: </span> 85,000 USD <br>
                <a href="" class="btn mt-3">check project</a> </div>
            </div>
          </div>
        </div>

        <div class="container text-center card raw_card" data-aos="fade-up">
          <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
            <div class="gx-5" style=" font-family: lato; text-align: justify; ">
              <div>
                <img src="assets/img/projects/green Hills logo copy.png"  class="img-fluid my-5">
                <p>
                    Green Hills Urban City is the perfect opportunity for individuals and families looking to invest in their homeland. With its no down payment, 0% interest rate policy, this project makes it easier for every young person or family – whether living in Armenia or abroad  to purchase land and build their dream home.<br>
                    InstagramInstagramFacebook<br>
                    Copywrite 2023 Kingsmen LLC<br>

                </p>
              </div>
            </div>
            <div class="opportunity-slider swiper my-2">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="assets/img/projects/g1.png" class="d-block w-100" alt="...">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/projects/g2.png" class="d-block w-100" alt="...">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/projects/g2.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <div class="my-3"> </div>
              <div class="row">
                <div class="swiper-pagination"></div>
              </div>
              <div class="my-5">
                <span>City: </span> Ashtarak City <br>
                <span>Available: </span>  Private Homes , Lands<br>
                <span>Starting Price: </span> 40,000 USD <br>
                <a href="" class="btn mt-3">check project</a> </div>
            </div>
          </div>
        </div><!-- End  projects-under-development -->


    <section class="">
        <div class="container-fluid">
          <div class="row text-center ">
            <div></div>
            <div>
              <a href=""> <img src="assets/img/kmen.png" class="img-fluid"> </a>
            </div>
            <div></div>
          </div>
        </div>
      </section>
  </main><!-- End #main -->
@endsection
