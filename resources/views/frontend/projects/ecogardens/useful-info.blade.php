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
                  <h1 class="text-white text-center fw-lighter text-uppercase lh-base mt-2 fw-light">Useful Information!  <span>!</span></h1>
              </div>
          </div>
      </div>
</section>
<!-- End Hero -->
<main id="main">
            <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Location
                    ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    Eco Gardens is a gated community with state-of-the-art infrastructure, located in Aragatsotn Province in a beautiful region called Parpi, located only 18 minutes away from Yerevan by accessing the big main highway M1. <br>
                    Eco Gardens is 3 Km away from Ashtarak City. The town plays a great role in the national economy as well as the cultural life of Armenia through several industrial enterprises and cultural institutions. It has developed as a satellite town of Yerevan. <br>
                    Parpi is 850 m above sea Level. It has same altitude of Yerevan city.
                    In Ashtarak you can easily find Public transportation, Banks , Schools , Supermarkets, Restaurants and Hospitals . <br>
                    <strong>You mean 18 minutes from Yerevan city center?</strong>
                    <p class=" "> It is actually 18 minutes from Davitashen, which is the biggest city inside of Yerevan. </p>
                    <strong>Any point of interest next to Eco Gardens ?</strong>
                    <p class=" ">Eco Gardens is located near the Cultural monument, the “Eagle of Vaspurakan”. Sharing a beautiful view over Ararat and Aragats Mountains.</p>
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Why "Eco"?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    80% of the project is composed of green landscaping with trees of Fruits and gardens. Therefore only 20% of the project will be built.
                    Eco Gardens management will take on its own expense to maintain the monument of the Eagle of Vaspurakan that has been neglected for several years, in order to show the people the value of the cause for this cultural memorial location and what it represents.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What is Remaining for Sale ?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    New homes are being snapped up quickly in the market. If you're looking for your dream home, don't wait any longer. There's only 17 homes left from 27, so hurry and book today to make sure that yours is one of them! Enjoy a modern living environment with all the amenities and features you desire at Eco Gardens!
                    <span class="text-success">
                    This offer is a great opportunity for those who want to acquire their own home. The house has a spacious 71sqm living space with plenty of room for the whole family. It also comes with a large 270sqm garden, providing an ideal outdoor area to relax and enjoy the outdoors. The house is ready to move in and the purchase price of 80,000 USD represents excellent value for money. Don't miss out on this fantastic offer !
                    </span>
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Can i Customize My own Home ?
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Custom made houses constructed by our professional team of engineers and builders offer many advantages. With custom built homes, you have the freedom to choose from a wide range of house sizes, from 71sqm to 250sqm. You also have the flexibility to determine the layout of your floor plan, as well as the type of materials and finishes used in your home. Moreover, you can decide on the exact amount of land you would like to occupy, ensuring that the built-up area does not extend to more than 20% of the total land area. With custom made houses, you can truly make your dream home a reality.


                    At Eco Gardens, we strive to provide exceptional services so that you can realize the house of your dreams.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What is the Maximum Construction Height ?
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Each house will be constructed on one level, following the design proposed by Eco Gardens. This ensures that all of the homes in the community have a consistent look and feel. The homes are designed to have an open-plan layout, making them spacious, bright and airy. There is also the option to customize the interior of your house, so you can make it unique to your needs and style.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">When is the Delivery Date of Eco Gardens?
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Each house will be constructed on one level, following the design proposed by Eco Gardens. This ensures that all of the homes in the community have a consistent look and feel. The homes are designed to have an open-plan layout, making them spacious, bright and airy. There is also the option to customize the interior of your house, so you can make it unique to your needs and style.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Available Homes 2023 	!
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Phase 2 of the housing development is now available! We are offering a variety of housing options to suit any family or individual's needs. Whether you're looking for something small and cozy, or larger with plenty of space for entertainment, we have what you need. Our houses feature modern designs, energy-efficient appliances, and top-of-the-line materials. Plus, each house comes with its own private outdoor space that gives you the perfect place to relax after a long day. With prices starting from just $80K, don't miss this incredible opportunity to make your dream home a reality!
                  </p>
                </div>
              </li>

            </ul>
          </div>
          <div class="d-flex justify-content-between section-title">
            <h6 class="text-center" data-aos="flip-left">
                "At Eco Gardens, We understand the importance of providing our clients with quality services that reflect true value for their finances. That’s why we price our homes based on the value they offer, not on what a potential buyer can afford".
            </h6>
          </div>

          <div class="text-center" data-aos="fade-up" >
            <a href="about.html" class="btn">Get in touch</a>
          </div>
        </div>

      </section><!-- End Frequently Asked Questions Section --> <br><br><br>

</main>

@endsection
