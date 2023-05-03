    @extends('frontend.layouts.app')

    @section('title')
        {{ app_name() }}
    @endsection

    @section('content')
        <main id="main">
            <!-- ======= description ======= -->
            <section class="description">
                <div class="container" data-aos="fade-up">
                    <div class="row mt-5">
                        <h3>Meet our team : </h3>
                        <p>
                            As a modern real estate investment firm, we strive to take our clients to the next level. We
                            combine
                            traditional practices and cutting-edge technology to ensure that our clients gain access to the
                            best
                            investments possible. <br><br>
                            Our team is comprised of experienced professionals from all fields of real estate investing.
                            They
                            utilize their expertise and knowledge to develop integrated strategies that are tailored
                            specifically for each client. We leverage digital technologies such as analytics, data modeling,
                            and
                            market intelligence in order to provide superior insights and results. With us by your side, you
                            can
                            be certain that your real estate investments are made with confidence and precision!
                        </p>
                    </div>
                </div>
            </section>

            <section id="team-members">
                @if (count($teams) > 0)
                    @foreach ($teams as $team)
                        <div class="container" data-aos-delay="fade-up">
                            <h3>{{ $team->position }} </h3>
                            <div class="row row row-cols-auto m-0 row-cols-lg-2 gx-5">
                                <div>
                                    <img src="{{ $team->upload_photo }}" class="img-fluid my-5">
                                </div>
                                <div class="my-5 ">
                                    <h4 class="text-center fw-bolder">{{ $team->first_name . ' ' . $team->last_name }}</h4>
                                    <h6 class="text-center">
                                        {{ $team->designation }}
                                    </h6><br><br>
                                    <p class="fw-light">
                                        {!! nl2br($team->about_team_member) !!}
                                        <br>

                                        <a href="callto:" class="btn mt-1"> {{ $team->assigned_cell_number }} </a></a>
                                        <a href="mailto:" class="btn mt-1"> {{ $team->assigned_email }} </a></a>
                                        <a href="video cal:" class="btn mt-1"> Fix meeting</a></a>
                                    </p>
                                </div>
                            </div>
                    @endforeach
                @endif
            </section>
        </main><!-- End #main -->
    @endsection
