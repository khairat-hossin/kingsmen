@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-crowdfunding" class=" d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-10 col-lg-8">
                    <h2 class="text-warning fw-light hero_subhead text-uppercase lh-base mt-2 fw-light">
                        Crowdfunding<span>.</span></h2>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </section>
    <!-- End Hero -->




    <main id="main">

        <section id="one-tree-armenia" class="">
            <div class="container bg-dark text-white card raw_card">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
                    <div> <img src="../../assets/img/crowdfunding/one tree.png" class="img-fluid"></img></div>
                    <div class=" ">
                        <p class="my-3"> <strong> The One Tree Armenia </strong> is an ambitious agriculture project
                            located in Aragatsavan Village in the Aragatsotn Region of Armenia. With a total area of 475,000
                            square meters and 15,333 walnut trees planted on the site, this project is set to revolutionize
                            the local agricultural industry.</p>
                        <div class="my-2">
                            <h6><span class="text-warning">Community: </span>Aragatsotn &nbsp;</h6>
                            <h6><span class="text-warning"> Investment Type: </span> Agriculture &nbsp;</h6>
                            <h6><span class="text-warning"> Ticket Price: </span> 24,634 USD &nbsp;</h6>
                        </div>
                        <a href="./one-tree-armenia.html" class="btn"> Check Project </a>
                    </div>
                </div>
                <div
                    class="row row-cols-1 row-cols-lg-2 row-cols-md-2 mt-5  d-flex justify-content-center align-items-center">
                    <div> <img src="../../assets/img/crowdfunding/westernvillage.png" class="img-fluid"></img></div>
                    <div class=" mx-auto">
                        <p class="my-3"><strong> The Western Village </strong> is an ambitious new project located in the
                            Parpi Ashtarak Region that is currently under development. Designed to be a cutting-edge
                            residential development, the project aims to transform the land from agricultural to residential
                            use by providing top-of-the-line infrastructure. This includes bringing essential utilities such
                            as electricity, water, and internet to the site, as well as installing fences on the land and
                            subdividing it into individual lots. </p>
                        <div class="my-2">
                            <h6><span class="text-warning">Community: </span>Aragatsotn &nbsp;</h6>
                            <h6><span class="text-warning"> Investment Type: </span> Agriculture &nbsp;</h6>
                            <h6><span class="text-warning"> Ticket Price: </span> 24,634 USD &nbsp;</h6>
                        </div>
                        <a href="the-western-village.html" class="btn"> Check Project </a>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
                    <div> <img src="../../assets/img/crowdfunding/united-8-apartments/s-3.png" class="img-fluid"></img>
                    </div>
                    <div class=" ">
                        <p class="my-3"> <strong> The United 8 apartment </strong> is starting by investing starting
                            99,000 Euro in this lucrative venture, you can enjoy a profit-sharing model that guarantees
                            significant returns. What's more, the prime location of the apartments ensures a steady stream
                            of guests, making it a safe investment. With 8 fully-furnished apartments featuring
                            state-of-the-art amenities, this investment has everything that discerning travelers need to
                            have a comfortable and relaxing stay.</p>
                        <div class="my-2">
                            <h6><span class="text-warning">Community: </span>Aragatsotn &nbsp;</h6>
                            <h6><span class="text-warning"> Investment Type: </span> Agriculture &nbsp;</h6>
                            <h6><span class="text-warning"> Ticket Price: </span> 24,634 USD &nbsp;</h6>
                        </div>
                        <a href="united-8-apartments.html" class="btn"> Check Project </a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->



    <!-- ======= Kmen logo======= -->
    <section class="">
        <div class="container-fluid">
            <div class="row text-center ">
                <div></div>
                <div>
                    <a href=""> <img src="../../assets/img/kmen.png" class="img-fluid" alt="img"> </a>
                </div>
                <div></div>
            </div>
        </div>
    </section>
@endsection
