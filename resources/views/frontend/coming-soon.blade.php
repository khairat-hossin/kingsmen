@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')


<main id="main">
<section class="faq-container">
    <body class=" frame">

    <div id="outer-wrapper" class="customBodayColor animate translate-z-in">
        <div id="inner-wrapper">
            <div id="table-wrapper">
                <div class="container">
                    <div id="row-content">
                        <div id="content-wrapper">
                            <div class="row vertical-aligned-wrapper mt-5">

                                <div class="col-md-8 col-sm-8 vertical-aligned-element">
                                    <div id="content" class="animate translate-z-out animation-time-2s delay-05s">
                                        <h2 class="opacity-90 customAlandText">A land of opportunities waiting to be explored!</h2>
                                        <h1 class="in_yellow customInvestText">INVEST IN ARMENIA</h1>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <span class="customWeofferTExt">We offer a variety of investment opportunities that can both start your journey and grow alongside you. Our Investor Portal provides secure and reliable access to track projects' progress and manage financial investments, giving you the insight and analytics needed to ensure the project remains successful.
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5">
                                                <address class="customContactInfo">
                                                    Address: Yerevan, Ashtarak Highway 2/2
                                                    <br>
                                                    Tel: <a href="tel:+37433696969">+(374) 33 69 69 69</a>
                                                    <br>
                                                    Email:<a href="mailto:info@kmen.me">info@kmen.me</a>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row vcenter">
                                            <div class="col-sm-12 col-xs-12"> <img class="partner_img" style="width: 100%" src="{{ asset('assets/img/partners.jpg') }}"  alt="Partners"></div>
                                        </div>
                                    </div>
                                    <!--end content-->
                                </div>

                                <div class="col-md-4 col-sm-4 vertical-aligned-element">
                                    <form method="post" class="form clearfix has-background animate translate-z-in animation-time-2s delay-03s">
                                        <h2 class="in_yellow">Stay Updated</h2>
                                        <p class="customFillTExt">Fill out the form below to be notified when your chance of investment is ready</p>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                        </div>
                                        <!--end form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                                        </div>
                                        <!--end form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Your Phone" required>
                                        </div>
                                        <!--end form-group -->
                                        <div class="form-group clearfix">
                                            <button type="submit" class="btn pull-right btn-default btn-framed btn-rounded" id="form-contact-submit">Send a Message</button>
                                        </div>
                                        <!--end form-group -->
                                        <div class="form-contact-status"></div>
                                    </form>
                                    <!--end form-contact -->
                                </div>
                            </div>
                        </div>

                        <!--end content-wrapper-->
                    </div>
                    <!--end row-content-->

                </div>
                <!--end container-->
            </div>
        </div>
        <!--end inner-wrapper-->
    </div>
    <!--end outer-wrapper-->


    </body>

        </section>
    </main>
@endsection


<style>
    .in_yellow{
        color:#f1c400;
    }
    h1{
        font-size: 70px;
    }
    h2{
        margin-bottom: 5px;
    }
    .partners{
        background-color: rgb(0,0,0,0.5);
    }
    .partner_img{
        max-height: 100px;
        filter: grayscale(90%);
        object-fit:cover;
        opacity: 0.6;

    }
    .vcenter {
        display: flex;
        align-items: center;
    }
    /* custom css start */
    .customBodayColor {
        height: 100%;
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        overflow: hidden;
        position: relative;
        color: white;
        background-color: #191919;
        margin-right: 0 !important;
        height: 600px;
    }
    .customAlandText {
        text-shadow: 0px 4px 10px rgba(0, 0, 0, 0.45);
        font-size: 24px;
        font-weight: normal;
        color: white
    }
    .customInvestText {
        font-size: 70px;
        text-shadow: 0px 4px 10px rgba(0, 0, 0, 0.65);
        text-transform: uppercase;
        font-weight: 700;
    }
    .customWeofferTExt {
        opacity: 0.9;
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        color: white;
        line-height: 1.42857143;
        font-size: 14PX;
    }
    .customFillTExt {
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=60);
        opacity: 0.6;
        font-size: 14px !important;
    }

</style>

{{-- message button --}}
<style>
.btn {
  -moz-transition: 0.5s ease;
  -webkit-transition: 0.5s ease;
  transition: 0.5s ease;
  outline: none !important;
  padding-bottom: 5px;
  margin-bottom: 5px;
}
.btn:active, .btn:focus, .btn:hover {
  outline: none !important;
  color: white;
}
.btn.btn-default {
  border-color: white;
  border-style: solid;
  border-width: 2px;
  background-color: white;
  font-size: 12px;
  font-weight: bold;
  text-transform: uppercase;
}
.btn.btn-framed {
  background-color: transparent;
  color: white;
  border-color: rgba(255, 255, 255, 0.3);
  float: right;
}
.btn.btn-framed:hover, .btn.btn-framed:active, .btn.btn-framed:focus {
  background-color: transparent;
  color: white;
  border-color: white;
}

</style>
<!-- Add this new style for telephone number and email -->
<style>
    .customContactInfo a {
      opacity: 0.9;
      color: white;
      line-height: 1.42857143;
      font-size: 14px !important;
    }

    .customContactInfo a {
      color: white;
      text-decoration: none;
    }

    .customContactInfo a:hover {
      color: #f1c400;
    }

    input[type="text"] {
        background-color: #191919;
        font-size: 14px;
        color: white;
        margin-bottom: 12px;
    }
    input[type="text"]:hover {
        background-color: #191919;
    }
    input[type="text"]:focus {
        background-color: #191919;
        color: white;
    }
  </style>
