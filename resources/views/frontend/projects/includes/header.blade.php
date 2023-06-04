 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html"><span>Eco</span>gardens</a></h1> -->

      <a href="index.html" class="logo me-auto me-lg-0"><img src="../../assets/img/ecogardens/portfolio/Green Hills.jpg"  loading="lazy" alt="logo" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ route('frontend.eco_home') }}" class="{{ Request::is('projects/ecogardens/home*') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('frontend.eco_useful_info') }}" class="{{ Request::is('projects/ecogardens/useful-info*') ? 'active' : '' }}">Useful Information</a></li>
          <li><a href="{{ route('frontend.eco_location') }}" class="{{ Request::is('projects/ecogardens/location*') ? 'active' : '' }}">Location</a></li>
          <li><a href="{{ route('frontend.eco_choose_your_land') }}" class="{{ Request::is('projects/ecogardens/choose-your-land*') ? 'active' : '' }}">Choose your land</a></li>
          <li class="dropdown"><a href="#"><span>Eco homes</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="{{ route('frontend.eco_eco_homes') }}" class="{{ Request::is('projects/ecogardens/eco-homes*') ? 'active' : '' }}">Eco homes</a></li>
              <li><a href="{{ route('frontend.eco_ready_to_move') }}" class="{{ Request::is('projects/ecogardens/ready-to-move*') ? 'active' : '' }}">Ready to move in</a></li>
              <li><a href="{{ route('frontend.eco_71_sqm_eco_homes') }}" class="{{ Request::is('projects/ecogardens/71-sqm-eco-homes*') ? 'active' : '' }}">71 sqm eco homes</a></li>
              <li><a href="{{ route('frontend.eco_85_90_sqm_eco_homes') }}" class="{{ Request::is('projects/ecogardens/85-90-sqm-eco-homes*') ? 'active' : '' }}">85-90 sqm eco homes</a></li>
              <li><a href="{{ route('frontend.eco_116_123_sqm_eco_homes') }}" class="{{ Request::is('projects/ecogardens/116-123-sqm-eco-homes*') ? 'active' : '' }}">116-123 sqm eco homes</a></li>
              <li><a href="{{ route('frontend.eco_148_sqm_eco_homes') }}" class="{{ Request::is('projects/ecogardens/148-sqm-eco-homes/*') ? 'active' : '' }}">148 sqm eco homes</a></li>
              <li><a href="{{ route('frontend.eco_232_sqm_eco_homes') }}" class="{{ Request::is('projects/ecogardens/232-sqm-eco-homes/*') ? 'active' : '' }}">232 sqm eco homes</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('frontend.eco_who_we_are') }}" class="{{ Request::is('projects/ecogardens/who-we-are/*') ? 'active' : '' }}">Who we are</a></li>
              <li><a href="{{ route('frontend.team') }}">Team</a></li>
              <li><a href="{{ route('frontend.eco_testimonials') }}" class="{{ Request::is('projects/ecogardens/testimonials/*') ? 'active' : '' }}">Testimonials</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
