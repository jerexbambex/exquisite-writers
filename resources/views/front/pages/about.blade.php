@extends('layouts.front.template')

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-half-170 d-table w-100 bg-blue-light" style="background: url('/assets/front/images/bg/page.png') top center;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mt-5">
                <!-- /col -->
                <div class="col-lg-12">
                    <div class="title-heading text-center text-md-center">
                        <h3>About Us</h3>
                        <p class="text-muted text-center text-md-center mt-2 mb-0">
                            @if($about == null)
                                Thank you for visiting our site. We hope you will find the ideal solutions.
                            @else
                                {{ $about->preamble }}
                            @endif
                        </p>
                        <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Breadcrumb -->

        <!-- About -->
        <section class="about-area pt-100 pb-100 pb-mb-50 pb-sm-50 bg-section"
        style="background: url('/assets/front/images/bg/bg-section-2.png') top center;">
        <!-- container -->
        <div class="container justify-content-center">
            <!-- row -->
            <div class="row justify-content-center">
                <div class="col-8">
                    @if($about != null)
                        {!! nl2br($about->body) !!}
                    @endif
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /About -->

        <!-- Client Logo -->
        <section class="client-logo-area">
            <!-- Container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-12">
                        <div class="section-heading text-center wow fadeInUp animated">
                            <h5 class="section-meta ">Testimonials</h5>
                            <h2 class="section-title">What our clients are saying about us</h2>
                            <p class="section-sub">Lorem ipsum dolor sit amet</p>

                        </div>
                    </div>
                    <!-- col -->
                </div>
                <!-- /row -->
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="brand-style-2 wow fadeInLeft animated" data-wow-delay="0.2s">
                            <a href="#">
                                <img class="main-img" src="/assets/front/images/client-logo/client-logo-1.png" alt="">
                                <img class="hover-img" src="/assets/front/images/client-logo/client-logo-color-1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="brand-style-2 wow fadeInLeft animated" data-wow-delay="0.4s">
                            <a href="#">
                                <img class="main-img" src="/assets/front/images/client-logo/client-logo-2.png" alt="">
                                <img class="hover-img" src="/assets/front/images/client-logo/client-logo-color-2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="brand-style-2 wow fadeInLeft animated" data-wow-delay="0.6s">
                            <a href="#">
                                <img class="main-img" src="/assets/front/images/client-logo/client-logo-3.png" alt="">
                                <img class="hover-img" src="/assets/front/images/client-logo/client-logo-color-3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="brand-style-2 wow fadeInLeft animated" data-wow-delay="0.8s">
                            <a href="#">
                                <img class="main-img" src="/assets/front/images/client-logo/client-logo-4.png" alt="">
                                <img class="hover-img" src="/assets/front/images/client-logo/client-logo-color-4.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="brand-style-2 wow fadeInRight animated" data-wow-delay="0.2s">
                            <a href="#">
                                <img class="main-img" src="/assets/front/images/client-logo/client-logo-5.png" alt="">
                                <img class="hover-img" src="/assets/front/images/client-logo/client-logo-color-5.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="brand-style-2 wow fadeInRight animated" data-wow-delay="0.4s">
                            <a href="#">
                                <img class="main-img" src="/assets/front/images/client-logo/client-logo-6.png" alt="">
                                <img class="hover-img" src="/assets/front/images/client-logo/client-logo-color-6.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="brand-style-2 wow fadeInRight animated" data-wow-delay="0.6s">
                            <a href="#">
                                <img class="main-img" src="/assets/front/images/client-logo/client-logo-7.png" alt="">
                                <img class="hover-img" src="/assets/front/images/client-logo/client-logo-color-7.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="brand-style-2 wow fadeInRight animated" data-wow-delay="0.8s">
                            <a href="#">
                                <img class="main-img" src="/assets/front/images/client-logo/client-logo-8.png" alt="">
                                <img class="hover-img" src="/assets/front/images/client-logo/client-logo-color-8.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                </div>
                <!-- /row -->
            </div>
        </section>
        <!-- /Client Logo -->
@endsection
