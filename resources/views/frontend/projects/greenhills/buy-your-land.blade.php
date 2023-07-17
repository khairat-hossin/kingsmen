@extends('frontend.projects.greenhills.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero_buy_your_land" class="d-flex justify-cntent-center align-items-center">
    <div class="container">
      <div class="row">
        <h1 class="text-center text-white" data-aos="fade-left">  Start Building Your Dream Life in Armenia  </h1>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ===== About the project ===== -->
    <section class="pt-0 pb-3">
      <div class="container">
        <div class="row  d-flex align-items-center justify-content-center">
          <h2 class="text-center text-white bg-success py-3" data-aos="fade-left"> Buy Land from Anywhere in the World with Green Hills! </h2>
          <div class="col-lg-6 col-md-5 box mx-3" data-aos="fade-up">
            <h3>Our interactive platform makes it easy and convenient to find the right piece of land for your needs.
            </h3>
            <p>Green Hills Armenia boasts an interactive map that makes it easier than ever to search for land. This user-friendly map allows customers to explore the entire Project in detail, pinpointing the exact locations they wish to purchase. With this interactive tool, customers can also access a wide range of features such as aerial imagery and topographical maps– allowing them to gain a better understanding of the Project in no time.</p>
            <a href="https://www.scribblemaps.com/maps/view/Sales-Map-/GREENHILLS" class="btn btn-outline-warning"> Interactive maps</a>
          </div>
          <div class="col-lg-5 col-md-5 mt-3 box" data-aos="fade-right">
            <p>If you’re looking for an investment opportunity, Green Hills Armenia has something for everyone. Whether you want to purchase residential property or land for commercial use, we have numerous options that are tailored to suit your needs. Our professional team is always available to assist customers throughout the buying process and answer any questions they have. <br><br>

              We understand that buying land online can be an intimidating prospect, but Green Hills Armenia makes it easier than ever to find the perfect piece of property for you. Our team is dedicated to helping customers make informed decisions and ensuring they get the best value when purchasing land.

              </p>
            <a href="https://www.scribblemaps.com/maps/view/Sales-Map-/GREENHILLS" class="btn btn-outline-warning">Contact us</a>
          </div>
        </div>
        <div class="text-center">
          <a href="{{ route('frontend.greenhills_buy_your_home') }}">
            <h4 class="py-2 my-2 btn btn-outline-warning">"Discover the Ease of a Ready-Made Home! Our Customizable Homes Will Satisfy Every Taste!" </h4>
          </a>
        </div>
      </div>
    </section>
    <!-- ==== End about the project ==== -->

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes ">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-land/Moon 200 Garden View.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_byh_moon_200sqm') }}"> Villa Moon </a></h4>
              <h6 class="text-success">200 Sqm Fully Equiped</h6>
              <h6 class="text-success">Land: 700 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 280,000 USD</h5>
              <a href="{{ route('frontend.greenhills_byh_moon_200sqm') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Check it now</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-land/Villa Liv 300 m .png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_byh_liv_300sqm') }}">Villa Liv</a></h4>
              <h6 class="text-success">300 Sqm Fully Equiped</h6>
              <h6 class="text-success">Land: 900 Sqm/h6>
              <h6 class="text-danger">Buy it Now: 470,000 USD</h5>
              <a href="{{ route('frontend.greenhills_byh_liv_300sqm') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Check it now</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-land/Astrid 200 m Garden side.jpg" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_byh_astrid_200sqm') }}">Villa Astrid</a></h4>
              <h6 class="text-success">200 Sqm Fully Equiped</h6>
              <h6 class="text-success">Land: 700 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 280,000 USD</h5>
              <a href="{{ route('frontend.greenhills_byh_astrid_200sqm') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Check it now</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-2 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="../../assets/img/greenhills/buy-your-land/Villa Revna 400m pv.png" class="img-fluid" alt="img"></div>
              <h4 class="title"><a href="{{ route('frontend.greenhills_byh_revna_400sqm') }}"> Villa Revna </a></h4>
              <h6 class="text-success">400 Sqm Fully Equiped</h6>
              <h6 class="text-success">Land: 1000 Sqm</h6>
              <h6 class="text-danger">Buy it Now: 600,000 USD</h5>
              <a href="{{ route('frontend.greenhills_byh_revna_400sqm') }}" class="btn btn-outline-warning animate__animated animate__fadeInUp scrollto">Check it now</a>
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
