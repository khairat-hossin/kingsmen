 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center bg-white">
    <div class="container-fluid d-flex align-items-center justify-content-between ">

      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo"><a href="index.html">Anyar</a></h1> -->
      <a href="{{ route('frontend.greenhills_home') }}" class="logo"><img src="{{ asset('assets/img/greenhills/logo.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/home') ? 'active' : '' }}" href="{{ route('frontend.greenhills_home') }}">Home</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/overview*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_overview') }}">Overview</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/faq*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_faq') }}">Questions and Answers</a></li>
          {{-- <li><a   }}">Buy your home</a></li> --}}
          <li class="dropdown"><a class="nav-link scrollto {{ Request::is('projects/greenhills/buy-your-home*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_buy_your_home') }}"><span>Buy your home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                  <li><a href="{{ route('frontend.greenhills_byh_astrid_200sqm') }}">Astrid 200 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_liv_200sqm') }}">Liv 200 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_moon_200sqm') }}">Moon 200 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_revna_200sqm') }}">Revna 200 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_astrid_300sqm') }}">Astrid 300 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_liv_300sqm') }}">Liv 300 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_moon_300sqm') }}">Moon 300 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_revna_300sqm') }}">Revna 300 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_astrid_400sqm') }}">Astrid 400 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_liv_400sqm') }}">Liv 400 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_moon_400sqm') }}">Moon 400 Sqm</a></li>
                  <li><a href="{{ route('frontend.greenhills_byh_revna_400sqm') }}">Revna 400 Sqm</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/buy-your-land*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_buy_your_land') }}">Buy your land</a></li>
          {{-- <li><a  >Amenities</a></li> --}}
          <li class="dropdown"><a class="nav-link scrollto {{ Request::is('projects/greenhills/amenities*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_amenities') }}"><span>Amenities</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                  <li><a href="{{ route('frontend.greenhills_activities_entertainment') }}">Activities And Entertainment</a></li>
                  <li><a href="{{ route('frontend.greenhills_business_technology') }}">Business and Technology</a></li>
                  <li><a href="{{ route('frontend.greenhills_kindergarten') }}">Kindergarten</a></li>
                  <li><a href="{{ route('frontend.greenhills_learning_center') }}">Learning Center</a></li>
                  <li><a href="{{ route('frontend.greenhills_urban_infrastructure') }}">Urban Infrastructure</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/financing*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_financing') }}">Financing</a></li>
          <li><a class="nav-link scrollto {{ Request::is('projects/greenhills/who-we-are*') ? 'active' : '' }}" href="{{ route('frontend.greenhills_who_we_are') }}">Who we are</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
