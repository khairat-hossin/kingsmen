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
                @foreach ($crowdfundings as $crowdfunding)
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center mb-5">
                        <div> <img src="{{ asset($crowdfunding->project_logo) }}" class="img-fluid"></img></div>
                        <div class=" ">
                            <p class="my-3"> {{ $crowdfunding->title_1 }}</p>
                            <div class="my-2">
                                <h6><span class="text-warning">Community: </span>{{ $crowdfunding->project_location }} &nbsp;</h6>
                                <h6><span class="text-warning"> Investment Type: </span> {{ $crowdfunding->type_of_investment     }} &nbsp;</h6>
                                <h6><span class="text-warning"> Ticket Price: </span> {{ number_format($crowdfunding->share_price) }} USD &nbsp;</h6>
                            </div>
                            <a href="{{ route('frontend.crowdfunding_project', ['slug' => $crowdfunding->slug]) }}" class="btn"> Check Project </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main><!-- End #main -->

@endsection
