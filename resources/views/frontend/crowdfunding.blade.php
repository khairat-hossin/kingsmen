@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-crowdfunding" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12 col-sm-12 col-xl-6 col-lg-8">
                    <h3 class="text-center fw-light">
                        Crowdfunding<span>.</span></h3>
                </div>
            </div>

            <div class="row"></div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <section id="one-tree-armenia" class="">
            <div class="container bg-dark text-white card raw_card">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
                    <div> <img src="../../assets/img/crowdfunding/one tree.png" class="img-fluid"></img></div>
                    <div class=" ">
                        <p class="my-3" style="  font-family: 'Inter', sans-serif; "> <strong> The One Tree Armenia
                            </strong> is an ambitious agriculture project located in Aragatsavan Village in the Aragatsotn
                            Region of Armenia. With a total area of 475,000 square meters and 15,333 walnut trees planted on
                            the site, this project is set to revolutionize the local agricultural industry.</p>
                        <div class="my-2">
                            <strong class="text-warning">Community: </strong>Aragatsotn &nbsp; <br>
                            <strong class="text-warning"> Investment Type: </strong> Agriculture &nbsp; <br>
                            <strong class="text-warning"> Ticket Price: </strong> 24,634 USD &nbsp; <br>
                        </div>
                        <a href="./one-tree-armenia.html" class="btn"> Check Project </a>
                    </div>
                </div>
                <div
                    class="row row-cols-1 row-cols-lg-2 row-cols-md-2 mt-5  d-flex justify-content-center align-items-center">
                    <div> <img src="../../assets/img/crowdfunding/westernvillage.png" class="img-fluid"></img></div>
                    <div class=" mx-auto">
                        <p class="my-3" style="  font-family: 'Inter', sans-serif; "> <strong> The Western Village
                            </strong> is an ambitious new project located in the Parpi Ashtarak Region that is currently
                            under development. Designed to be a cutting-edge residential development, the project aims to
                            transform the land from agricultural to residential use by providing top-of-the-line
                            infrastructure. This includes bringing essential utilities such as electricity, water, and
                            internet to the site, as well as installing fences on the land and subdividing it into
                            individual lots. </p>
                        <div class="my-2">
                            <strong class="text-warning">Community: </strong>Aragatsotn &nbsp; <br>
                            <strong class="text-warning"> Investment Type: </strong> Agriculture &nbsp; <br>
                            <strong class="text-warning"> Ticket Price: </strong> 24,634 USD &nbsp; <br>
                        </div>
                        <a href="the-western-village.html" class="btn"> Check Project </a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
