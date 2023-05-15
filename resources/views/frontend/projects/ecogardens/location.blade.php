@extends('frontend.projects.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero-location" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12 col-sm-12 col-xl-8 col-lg-8 mt-5">
                  <h1 class="text-white text-center fw-lighter text-uppercase lh-base mt-2 fw-light"> "Make the most of our ancestors' lifestyle in a modern environment"
                    <span>!</span></h1>
              </div>
          </div>
      </div>
</section>
<!-- End Hero -->


<main>
  <section class="p-0">
    <h3 class="p-3 commonbg text-center" data-aos="zoom-out">Living Outside Yerevan </h3>
    <div class="container">
      <div class="row row-cols-lg-2 row-cols-1 row-cols-md-2 m-auto">
        <div class="col">
          <img data-aos="fade-right" src="../../assets/img/ecogardens/location/location img1.jpg" class="img-fluid" alt="img">
          <p class="my-2" data-aos="fade-right">"We are happy to announce that we have started the renovation works of the monument of “Eagle of Vaspurakan”. Located on the borders of <strong>Eco Gardens Project. </strong>"</p>
        </div>
        <div class="col" data-aos="fade-up">
          Living outside the city has a number of advantages. Aside from the obvious benefit of having more space and access to nature, living in a rural area can be much more cost-effective than in a city. You don’t have to pay for expensive rent or mortgages, and other utilities can be much cheaper. Plus, you don’t have to pay for expensive amenities like gyms, movie theaters and restaurants that are common in the city. Instead, you can enjoy a variety of outdoor activities, like hiking and biking, for free or at very little cost. Plus, living in a rural area gives you the opportunity to get away from city pollution, noise and stress. You can take a break from the hustle and bustle of city life and enjoy the peacefulness and tranquility that comes with living in a rural area. And if you’re an animal lover, you can have the pleasure of having a pet to keep you company. All in all, living outside the city offers a unique combination of the peace and quiet of nature combined with the convenience of living a short drive away from city amenities. It’s an ideal option for those looking to get away from urban life while still having access to city services.
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row row-cols-lg-3 row-cols-1 row-cols-md-2 m-auto">
        <div data-aos="fade-left">
          <img src="../../assets/img/ecogardens/location/proximity.jpg" loading="lazy"  class="img-fluid" alt="img">
          <h2 class="text-success mt-2">Proximity</h2>
          <ul type="square">
            <li>18 min From Yerevan</li>
            <li>30 min From Airport</li>
            <li>5 min from Ashtarak City</li>
          </ul>
        </div>
        <div data-aos="fade-left">
          <img src="../../assets/img/ecogardens/location/finance.jpg" loading="lazy"  class="img-fluid" alt="img">
          <h2 class="text-success mt-2">Finances</h2>
            <p>
              Living outside the city of Yerevan has many advantages. This enables you to purchase a larger and higher quality home for less money, making your budget stretch further and providing more financial stability for you and your family.
            </p>
        </div>
        <div data-aos="fade-left">
          <img src="../../assets/img/ecogardens/location/point of interest.jpg"  loading="lazy" class="img-fluid" alt="img">
          <h2 class="text-success mt-2">Point of Interest</h2>
          <ul type="square">
            <li>Ashtarak River</li>
            <li>Ski Slopes</li>
            <li>Byurakan Observatory </li>
            <li>The Eagle of Vaspurakan</li>
          </ul>
        </div>
        <div>

        </div>
        <div>

        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row row-cols-1 row-cols-lg-2">
        <div data-aos="fade-left">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6092.477817229639!2d44.448911!3d40.22599000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a97985aadfe55%3A0x145cfca8e7f7f9c!2s2%2C%202%20Ashtarak%20Highway%2C%20Yerevan%2C%20Armenia!5e0!3m2!1sen!2sus!4v1683809501068!5m2!1sen!2sus" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div data-aos="fade-right">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6086.295792805271!2d44.335210000000004!3d40.294675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a9aa1d0bc6a7b%3A0x21a63246231704f5!2sAshtarak%2C%20Armenia!5e0!3m2!1sen!2sus!4v1683809611340!5m2!1sen!2sus" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
