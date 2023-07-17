 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center bg-white">
    <div class="container-fluid d-flex align-items-center justify-content-between ">

      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo"><a href="index.html">Anyar</a></h1> -->
      <a href="index.html" class="logo"><img src="{{ asset('assets/img/greenhills/logo.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('frontend.greenhills_home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('frontend.greenhills_overview') }}">Overview</a></li>
          <li><a href="faq.html">Questions and Answers</a></li>
          <li class="dropdown"><a href="buy-your-home.html"><span>Buy your home</span></a>
          </li>
          <li><a href="buy-your-land.html">Buy your land</a></li>
          <li class="dropdown"><a href="amenities.html"><span>Amenities</span></a>
          </li>
          <li><a href="financing.html">Financing</a></li>
          <li class="dropdown"><a href="who_we_are.html"><span>Who we are</span></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
