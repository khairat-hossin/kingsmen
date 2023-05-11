 @extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero-services" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12 col-sm-12 col-xl-12 col-lg-12">
                    <h2 class="text-center  hero_subhead text-uppercase lh-base mt-5 text-warning fw-light">
                        " Kingsmen Helps You Reach Your Goals In Armenia"<span>.</span></h2>
                </div>
            </div>

            <div class="row"></div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <h2 class="text-center mt-3"> We Provide Effective Solutions to manage our clients investments.</h2>

        <section class="py-2">
            <div id="service_cards" class="container border border-warning border-2 raw_card" data-aos="fade-up">

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 m-auto g-4">
                    <div class="col text-justify text-white">
                        <div class="card h-100 bg-dark">
                            <h2 class="card-title fw-semibold text-center">Infrastructure Project Management</h2>
                            <img src="assets/img/services/Infrastructure.jpg" class="card-img-top img-fluid"
                                style="height:auto; width: auto;" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                <h4 class="mb-3">Kingsmen Investment is a premier infrastructure project management
                                    company that has a proven track record in delivering complex projects on time, within
                                    budget and to the highest standard. </h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-justify text-white">
                        <div class="card h-100 bg-dark">
                            <h2 class="card-title fw-semibold text-center">Architecture Project Management</h2>
                            <img src="assets/img/services/Architecture.jpg" class="card-img-top img-fluid"
                                style="height:auto; width: auto;" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                <h4 class="mb-3">Kingsmen Investment is a top-notch architecture management company with
                                    years of experience delivering outstanding results to clients. Our team of experts has
                                    proven expertise in managing architecture projects, regardless of size and complexity,
                                    from conception to completion.</h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-justify text-white">
                        <div class="card h-100 bg-dark">
                            <h2 class="card-title fw-semibold text-center">Regulatory Compliance Management</h2>
                            <img src="assets/img/services/Regulatory.jpg" class="card-img-top img-fluid"
                                style="height:auto; width: auto;" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                <h4 class="mb-3">Kingsmen Investment is your trusted partner in navigating the complex
                                    world of regulatory compliance. We specialize in acquiring permit licenses, switching
                                    language categories, obtaining tax exemptions, and other legal formalities.</h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 m-auto g-4">
                    <div class="col text-justify text-white">
                        <div class="card h-100 bg-dark">
                            <h2 class="card-title fw-semibold text-center">Legal Advising</h2>
                            <img src="assets/img/services/Legal Advising.jpg" class="card-img-top img-fluid"
                                style="height:auto; width: auto;" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                <h4 class="mb-3">Kingsmen Investment is your trusted partner in legal advising, providing
                                    high-quality legal consultation services to individuals and businesses. We provide
                                    expert legal advice, tailored to meet the specific needs of our clients, and help them
                                    resolve legal disputes and achieve their legal objectives.</h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-justify text-white">
                        <div class="card h-100 bg-dark">
                            <h2 class="card-title fw-semibold text-center">Companies and Financial Advising</h2>
                            <img src="assets/img/services/Companies.jpg" class="card-img-top img-fluid"
                                style="height:auto; width: auto;" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                <h4 class="mb-3">Kingsmen Investment offers comprehensive services in company
                                    establishment and financial advising. Our team of experienced experts has extensive
                                    knowledge in financial management and regulation, as well as experience in establishing
                                    companies of all sizes.</h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-justify text-white">
                        <div class="card h-100 bg-dark">
                            <h2 class="card-title fw-semibold text-center">Sustainable Agriculture Solutions</h2>
                            <img src="assets/img/services/sustainable.jpg" class="card-img-top img-fluid"
                                style="height:auto; width: auto;" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                <h4 class="mb-3">We offer a full range of services designed to help our clients increase
                                    profitability and efficiency while ensuring sustainable operations. Our team of expert
                                    consultants assists you in setting up an efficient system that meets your specific
                                    needs, from designing a production plan to creating a cost-effective operational
                                    strategy.</h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="" class="btn">Get free consultancy</a>
                </div>
            </div>
        </section>

        <section>
            <div id="service_cards" class="container border border-warning border-2 card raw_card">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2  d-flex justify-content-center align-items-center">
                    <div> <img src="assets/img/services/Kingsmen Team.jpg" class="img-fluid"></img></div>
                    <div class=" ">
                        <div class="my-2">
                            <h2 class="text-center my-2">Meet our Team of Experts</h2>
                            <p>Our consultants help you create an efficient operational system tailored to your specific
                                needs. We provide budgeting advice and risk assessment and management, so you can make
                                informed decisions while taking into account potential risks.</p>
                        </div>
                        <a href="{{ route('frontend.team') }}" class="btn"> Meat the team </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service section -->

    </main><!-- End #main -->
@endsection
