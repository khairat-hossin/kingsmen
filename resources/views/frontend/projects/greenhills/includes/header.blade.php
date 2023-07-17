 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center bg-white">
    <div class="container-fluid d-flex align-items-center justify-content-between ">

      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo"><a href="index.html">Anyar</a></h1> -->
      <a href="index.html" class="logo"><img src="{{ asset('assets/img/greenhills/logo.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/home') ? 'active' : '' }}" href="{{ route('frontend.greenhills_home') }}">Home</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/overview*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_overview') }}">Overview</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/faq*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_faq') }}">Questions and Answers</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/buy-your-home*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_buy_your_home') }}">Buy your home</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/buy-your-land*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_buy_your_land') }}">Buy your land</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/amenities*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_amenities') }}">Amenities</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/financing*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_financing') }}">Financing</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/who-we-are*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_who_we_are') }}">Who we are</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
