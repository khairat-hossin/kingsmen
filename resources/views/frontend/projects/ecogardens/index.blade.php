@extends('frontend.projects.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12 col-sm-12 col-xl-8 col-lg-8 mt-5">
                  <h1 class="text-white text-center fw-lighter text-uppercase lh-base mt-2 fw-light">The Eco Gardens Transferred from Architectural Drawings into Reality  <span>!</span></h1>
              </div>
          </div>
      </div>
</section>
<!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="p-0 mt-0" style="text-align: justify;">

          <h4 class="col-12 fw-bold text-center p-3 mt-0 commonbg" data-aos="zoom-out-up">We anticipate that Eco Gardens will be completed in September 2024</h3>
      <div class="container" >

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
          <!-- home slider -->
        <!-- Swiper -->
        <div id="home-slide">
          <div  class="swiper mySwiper"  data-aos="fade-up">
            <div class="swiper-wrapper  mt-lg-5 mt-xl-5 ">
              <div class="swiper-slide"><img src="../../assets/img/ecogardens/home/s1.jpg"  loading="lazy" alt="img" class="img-fluid"></div>
              <div class="swiper-slide"><img src="../../assets/img/ecogardens/home/s2.png" loading="lazy"  alt="img" class="img-fluid"></div>
              <!-- <div class="swiper-slide"><img src="../../assets/img/ecogardens/home/s3.png" loading="lazy"  alt="img" class="img-fluid"></div> -->
              <div class="swiper-slide"><img src="../../assets/img/ecogardens/home/s4.png" loading="lazy"  alt="img" class="img-fluid"></div>
              <div class="swiper-slide"><img src="../../assets/img/ecogardens/home/s5.png"  loading="lazy" alt="img" class="img-fluid"></div>
              <div class="swiper-slide"><img src="../../assets/img/ecogardens/home/s6.jpg"  loading="lazy" alt="img" class="img-fluid"></div>
              <div class="swiper-slide"><img src="../../assets/img/ecogardens/home/s7.jpg"  loading="lazy" alt="img" class="img-fluid"></div>
              <div class="swiper-slide"><img src="../../assets/img/ecogardens/home/s8.jpg"  loading="lazy" alt="img" class="img-fluid"></div>
              <div class="swiper-slide"><img src="../../assets/img/ecogardens/home/s9.jpg"  loading="lazy" alt="img" class="img-fluid"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="autoplay-progress">
              <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
              </svg>
              <span></span>
            </div>
          </div>
        </div>

      <!--  End home slider section   -->
      <div class="mt-lg-5 mt-xl-5 p-5" data-aos="fade-left">
          <ul type="square">
            <li>Infrastructure completed.</li>
            <li>Gardens and common areas completion is set for 2023.</li>
            <li>15 Eco Homes under the process of being delivered turn-key.</li>
            <li>Phase 1 sellable areas completed.</li>
            <li>Launching second phase of Eco Homes for sale</li>
          </ul>
      </div>
      </div>
      </div>
      <h5 class="text-uppercase fw-bold text-center p-3 mt-2 commonbg"> What we promised is exactly what we are delivering.</h5>
    </section><!-- End About Us Section -->
                  <!-- video section -->
    <section id="video" class="p-0">
      <h6 class="text-uppercase fw-bold text-center">The Eco Gardens Avertising video</h6>
      <div class="container px-5" data-aos="fade-up">
        <div class="row">
          <div class="co-12 col-lg-10 col-xl-12 px-5 text-center my-5 ratio ratio-21x9">
            <iframe src="https://www.youtube.com/embed/qGeaAWran8o" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>

          <p>The Eco Gardens Advertising video will be a minute-long commercial, highlighting the features and benefits to living in the Eco Gardens community.</p>
      </div>
      <div class="text-center py-3">
        <a href="projects/ecogardens/index.html" class="btn">Subscribe</a>
      </div>
  </section>


    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>OUR IDENTITY</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-4 col-md-4 col-12">
            <div class="client-logo">
              <img src="../../assets/img/ecogardens/kingsmenlogo.png" loading="lazy"  class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="client-logo">
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="client-logo">
              <img src="../../assets/img/ecogardens/ecogardens.jpg"  loading="lazy" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Clients Section -->

  </main><!-- End #main -->

  @endsection
