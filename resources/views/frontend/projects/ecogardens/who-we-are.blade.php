@extends('frontend.projects.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero_about" class="d-flex align-items-center justify-content-center">
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
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-partner" class="filter-active">Partners</li>
              <li data-filter=".filter-mission">Mission</li>
              <li data-filter=".filter-plan">Plan</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-12 col-md-8 col-10 col-xl-10 portfolio-item filter-active filter-partner">
              <h4>Partners</h4>
                <p>Eco Gardens is proud of its partners who have been instrumental in making this project a success. They bring decades of experience and expertise in real estate development to the table and have placed their faith in Armenia's economy, investing heavily in the project. Kingsmen has also provided careful supervision throughout, ensuring that all standards of excellence are met for the highest quality results. Together with our partners, we have created an ideal living space that meets the needs of many different types of people within Armenia and beyond. Thanks to our partners' commitment, Green Hills Urban City is a shining example of successful real estate development in the region. We are proud to be associated with such a distinguished group of professionals, who will help to make this project a reality. We are confident that Green Hills Urban City will be a success for years to come! </p>
            </div>
            <div class="col-lg-5 col-md-6 portfolio-item filter-plan">
            </div>
            <div class="col-lg-2 col-md-6 portfolio-item filter-plan"> </div>
            <div class="col-lg-5 col-md-6 portfolio-item filter-plan">
          </div>

          <div class="col-lg-12 col-md-10 portfolio-item filter-mission">
            <h4>MISSION</h4>
            <p>Kingsmen Investments LLC is also committed to ensuring that all people involved in the development of Eco Gardens will benefit from the project in some way. The company is focusing on ways it can create jobs, boost local economies and help strengthen community ties. They are dedicated to creating a vibrant and sustainable urban environment that provides long-term value for all stakeholders. By following their mission of quality, safety, sustainability and community partnership, Kingsmen Investments LLC is setting a new standard for urban development that will be appreciated for years to come.</p>
         </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

 <section>
  <div class="text-center">
    <h5>SPECIAL THANKS TO,</h5>
    <div>
      <h6>
        Grand Thoranthon Armenia <br>
        KEG Kanaan Engineering Group <br>
        Zohrabian Law Firm <br>
        Agro Works LLC <br>
        Premium Consultants LLC <br>
      </h6>
    </div>
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
              <img src="../../assets/img/ecogardens/ecogardens.jpg" loading="lazy"  class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Clients Section -->

  </main><!-- End #main -->

@endsection
