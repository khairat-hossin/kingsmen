<!-- ======= Header ======= -->
<header id="header" class="fixed-top bg-dark">
    <div class="container-fluid d-flex align-items-center justify-content-lg-start">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ route('frontend.index') }}" class="navbar-brand logo me-auto "><img src="{{ asset('assets/img/kingsmenlogo.png') }}" alt=""
                class="img-fluid"></a>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="{{ route('frontend.index') }}">Home</a></li>
                <li><a class="{{ Request::is('invests*') ? 'active' : '' }}" href="{{ route('frontend.invests') }}">Invests</a></li>
                    {{-- <ul>
                        <li class="dropdown"><a class="{{ Request::is('crowdfundings') ? 'active' : '' }}" href="{{ route('frontend.crowdfundings') }}"><span class="">Crowdfunding</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li class="dropdown"><a class="{{ Request::is('one-tree-armenia*') ? 'active' : '' }}" href="{{ route('frontend.one_tree_armenia') }}"><span class="">One Tree Armenia</span> </a></li>
                                <li class="dropdown"><a class="{{ Request::is('the-western-village*') ? 'active' : '' }}" href="{{ route('frontend.the_western_village') }}"><span>The Western Village</span></a></li>
                                <li class="dropdown"><a class="{{ Request::is('united-8-apartment*') ? 'active' : '' }}" href="{{ route('frontend.united_8_apartment') }}"><span>United 8 Apartments</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="{{ Request::is('private-investments*') ? 'active' : '' }}" href="{{ route('frontend.privateInvestments') }}"><span>Private Investments</span></a></li>
                    </ul> --}}
                </li>
                <li><a class="nav-link scrollto {{ Request::is('projects*') ? 'active' : '' }}" href="{{ route('frontend.projects') }}">Projects</a></li>
                <li><a class="nav-link scrollto {{ Request::is('faq*') ? 'active' : '' }}" href="{{ route('frontend.faq') }}">Frequently Asked Questions</a></li>
                <li><a class="nav-link scrollto {{ Request::is('services*') ? 'active' : '' }}" href="{{ route('frontend.services') }}">Services</a></li>
                <li><a class="nav-link scrollto {{ Request::is('team*') ? 'active' : '' }}" href="{{ route('frontend.team') }}">Meet our Team</a></li>
                <li><a class="nav-link scrollto {{ Request::is('about-us*') ? 'active' : '' }} " href="{{ route('frontend.about_us') }}">About us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        @if (Auth::check())
            <a href="{{ route('backend.dashboard') }}" class="nav-link get-started-btn scrollto mx-3">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="nav-link get-started-btn scrollto mx-3">Sign in</a>
        @endif

    </div>
</header><!-- End Header -->
