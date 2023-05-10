@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-faq-bg" class="d-flex align-items-center justify-content-center mt-5">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-start" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12 col-xl-12 col-lg-12 text-white">
                    <h1 class="hero_text text-start">{{ $banner_text }}<span>.</span></h1>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- video section -->
        <section id="video">
            <div class="container" data-aos="fade-up">
                <div class="m-0  text-center my-5 ratio ratio-21x9">
                    <iframe width="310" height="215" src="{{ $video }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!-- ======= faq ======= -->
        <section class="faq-container">
            @if (count($faqs) > 0)
                @foreach ($faqs as $faq)
                    <div class="faq-one">
                        <!-- faq question -->
                        <h3 class="faq-page">Q. {{ $faq->question }}</h3>

                        <!-- faq answer -->
                        <div class="faq-body">
                            <p>
                                {!! nl2br($faq->answer) !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
            </div>
            </div>
        </section>
        <br> <br>
    </main><!-- End #main -->
@endsection

<style>
    #hero-faq-bg{
        background: url({{ $banner }}) top center;
    }
</style>
