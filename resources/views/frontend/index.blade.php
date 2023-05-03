@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="">

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-10 col-lg-8">
          <h1 class="text-warning fw-light hero_text">
            Invest in Your Homeland <span>.</span></h1>
          <h2 class="fw-bold hero_subhead" style="color: aliceblue;">From anywhere in the world with Kingsmen Armenia</h2>
        </div>
      </div>
      <div class="row"></div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- video section -->
    <section id="video" class="">
      <div class="container-fluid" data-aos="fade-up">
        <h2 class="fw-bold text-dark bg-white text-center mt-xl-3">WELCOME TO THE ONLINE WORLD OF KINGSMEN </h2>
        <div class="row d-flex justify-content-center align-items-center">
          <div class=" ">
            <div  class="ratio" style="--bs-aspect-ratio: 40%;">
              <iframe  src="https://www.youtube.com/embed/iTbRMCyvy_E?autoplay=1"  title="A YouTube video" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="row"></div>
        </div>
      </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about bg-dark">
      <div class="container-fluid" data-aos="fade-up" style="font-family: lato; text-align:justify;">
        <div class="row text-white d-flex align-items-center justify-content-center">
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 pt-4 pt-lg-0 order-2 order-lg-1 content " data-aos-delay="100">
            <h4 class="fw-normal lh-base">At Kingsmen Investments,<br>  we offer a variety of investment opportunities that can
              both start your journey and grow alongside you.
                Investor Portal provides secure and reliable access to track projects' progress and manage financial
                investments, giving you the insight and analytics needed to ensure the project remains successful.
                It also provides investors with regular updates on their
                investments' performance so they can make better decisions with their capital.We believe in building long-term relationships with our clients,
                which is why we strive for continued success for everyone involved in every project.
                So come join us at Kingsmen Investments and let us help you reach your dreams and financial goals
                today ! </h4>
            <div class="text-center mt-4">
              <h4 class="fw-semibold"> Angelo Hani <br> C.E.O  <br> Kingsmen Investments</h6>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
      <div id="sign-up" class="container" data-aos="fade-up" >
        <div class="row gy-2 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
          <div class="col-6 col-sm-3 col-lg-3 col-xl-2">
            <div class="icon-box bg-dark rounded-pill">
              <i class=" ri-arrow-right-circle-fill"></i>
              <h3><a href="{{ route('register') }}">Sign up now</a></h3>
            </div>
          </div>
        </div>
      </div>
    <!-- ======= Product Section ======= -->
    <section  class="products text-center">
       <h2 class="text-center fw-bold my-4">WE HOPE YOU WILL LIKE WHAT WE PREPARED FOR</h2>
      <div id="products" class="container-fluid " data-aos="fade-up" style="text-align: justify; font-family: lato;">

<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="col text-justify text-white">
  <div class="card h-60 bg-dark">
    <h2 class="card-title fw-bold text-center">ONE TREE ARMENIA</h2>
    <img  src="assets/img/products/longterminvest.jpg" class="card-img-top img-fluid" style="height:300px; width: auto;" alt="...">
    <div class="card-body">
      <p class="card-text">
          <h4 class="mb-3">Kingsmen believes that investing in walnut orchards offers a strategic
            opportunity to provide steady, long-term returns and support to the local agricultural sector. </h4>
            <h4> <span class="text-warning mt-5"> Type: </span> Agriculture </h4>
            <h4> <span class="text-warning"> Duration: </span> Long term   </h4>
            <h4> <span class="text-warning"> Return on investment: </span> 10 years  </h4>
            <h4> <span class="text-warning"> ROI profit: </span> 30% yearly </h4>
            <h4><span class="text-warning"> Ivestment ticket: </span> 12,500 USD  </h4>
          <a href="" class="btn mt-1">Learn more</a>
     </p>
    </div>
  </div>
</div>
<div  class="col text-justify text-white">
  <div class="card h-60 bg-dark">
    <h2 class="card-title fw-bold text-center">WESTERN VILLAGE</h2>
    <img src="assets/img/products/mediumterminvest.jpg"  class="card-img-top img-fluid" style="height:300px; width: auto;" alt="...">
    <div class="card-body">
      <p class="card-text">
          <h4 class="mb-3">Kingsmen has invested in the development of residential communities just 15 minutes outside of Yerevan, the capital of Armenia,for medium-term returns on investment.</h4>
            <h4> <span class="text-warning mt-5"> Type: </span>Real Estate Development</h4>
            <h4> <span class="text-warning"> Duration: </span> Medium term</h4>
            <h4> <span class="text-warning"> Return on investment: </span> 3 years</h4>
            <h4> <span class="text-warning"> ROI profit: </span> 50%-one time </h4>
            <h4><span class="text-warning"> Ivestment ticket: </span> 12,500 USD </h4>
          <a href="" class="btn mt-1">Learn more</a>
     </p>
    </div>
  </div>
</div>
<div  class="col text-justify text-white">
  <div class="card h-70 bg-dark">
    <h2 class="card-title fw-bold text-center">UNITED 8 APARTMENTS</h2>
    <img  src="assets/img/products/shortterminvest.JPG" class="card-img-top img-fluid" style="height:300px; width: auto;" alt="...">
    <div class="card-body">
      <p class="card-text">
          <h4 class="mb-3">Apart-hotel, is aimed at providing short-term returns for investors while catering to the needs of various customers of the serviced apartments.United 8 apertments</h4>
            <h4> <span class="text-warning mt-5"> Type: </span> Hotel Business </h4>
            <h4> <span class="text-warning"> Duration: </span> Short term </h4>
            <h4> <span class="text-warning"> Return on investment: </span>Monthly</h4>
            <h4> <span class="text-warning"> ROI profit: </span> 5.7% Lifetime</h4>
            <h4><span class="text-warning"> Ivestment ticket: </span> 12,500 USD  </h4>
          <a href="" class="btn mt-1">Learn more</a>
     </p>
    </div>
  </div>
</div>
</div>
      <!-- End Product Section -->
      <!-- ======= Faq Section ======= -->
      <h3 class="text-center my-3">GET TO KNOW</h3>
      <div class="row row-cols-lg-3 row-cols-1 row-cols-md-2 m-auto ">
        <div class="container my-4">
          <div class="faq_wrap bg-dark text-white">
            <img src="assets/img/products/qna.jpg" class="card-img-top" alt="...">
            <h3 class="mt-3">Frequently Asked Questions</h3>
            <div class="card_inner mt-3">
              <a href="" class="btn">Learn more</a>
            </div>
          </div>
        </div>
        <div class="container  my-4">
          <div class="faq_wrap bg-dark text-white">
            <img src="assets/img/products/gtc.jpg" class="card-img-top" alt="...">
            <h3 class="mt-3">Get to know the company</h3>
            <div class="card_inner mt-3">
              <a href="" class="btn">Learn more</a>
            </div>
          </div>
        </div>
        <div class="container  my-4">
          <div class="faq_wrap bg-dark text-white">
            <img src="assets/img/products/gtk.jpg" class="card-img-top" alt="...">
            <h3 class="mt-3">Get to know the team</h3>
            <div class="card_inner mt-3">
              <a href="" class="btn">Learn more</a>
            </div>
          </div>
        </div>
      </div>
        </div>
     </div>
    </section>
    <!-- End Faq section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" style="text-align: justify; font-family: lato;">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p class="fs-5">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                  Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p  class="fs-5">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                  quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> <!--  End testimonial item   -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p  class="fs-5">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                  tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> <!--  End testimonial item   -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p  class="fs-5">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                  minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> <!--  End testimonial item   -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p  class="fs-5">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                  culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                  quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> <!--  End testimonial item   -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section> <!--  End testimonial section   -->
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <h1 class="bolder my-3 text-center card bg-dark text-white  p-3"> Stratigical Partners </h1>
        <h3 class="bolder my-5 text-center"> Legal And Accounting </h3>
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide text-center"><img src="assets/img/clients/client-9.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide text-center"><img src="assets/img/clients/client-10.png" class="img-fluid"
                alt=""></div>
            <div class="swiper-slide text-center"><img src="assets/img/clients/client-11.jpg" class="img-fluid"
                alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="row">
          <div class="col-md-6 ">
            <div>
              <h3 class="my-5 text-center">Online Banking Solutions</h3>
              <div class="swiper-slide text-center w-40"><img src="assets/img/clients/onlinebanking.png" class="w-50"
                  alt=""></div>
            </div>
          </div>
          <div class="col-md-6">
            <div>
              <h3 class="my-5 text-center">Web Solutions And Blockchain integration</h3>
              <div class="swiper-slide text-center"><img src="assets/img/clients/websolutions.png" style="max-width:30%" class="img-fluid"
                  alt=""></div>
            </div>
          </div>
        </div>
        <div class="clients-slider swiper">
          <h3 class="my-5 text-center">Architecture And Construction </h3>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide text-center"><img src="assets/img/clients/architech.png" class="img-fluid"
                alt=""></div>
            <div class="swiper-slide text-center"><img src="assets/img/clients/constractions.png" class="img-fluid"
                alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      </div>
    </section><!-- End Clients Section -->
     <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta p-3">
      <div class="container" data-aos="fade-up">
        <div class="text-center">
          <h3>"Invest in Your Homeland ".
            from Anywhere in the World with Kingsmen Armenia</h3>
          <a class="cta-btn" href="#">Subscribe</a>
        </div>
      </div>
    </section><!-- End Cta Section -->
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
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
        <div>
          <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.1884831233247!2d44.44407411539008!3d40.22711127938756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a97985aadfe55%3A0x145cfca8e7f7f9c!2s2%2C%202%20Ashtarak%20Highway%2C%20Yerevan%2C%20Armenia!5e0!3m2!1sen!2sbd!4v1681889333340!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p> Yerevan, Ashtarak Highway 2/2
                </p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>nfo@kmen.me</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+(374) 33 69 69 69</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">
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
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->



    @include('frontend.includes.messages')
</section>


@endsection
