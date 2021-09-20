@extends('layouts.front.template')

@section('content')

    <!-- Breadcrumb -->
    <section class="bg-half-170 d-table w-100 bg-blue-light" style="background: url('images/bg/page.png') top center;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="mt-5 row">
                <!-- /col -->
                <div class="col-lg-12">
                    <div class="text-center title-heading text-md-center">
                        <h3>Privacy Policy</h3>
                        {{-- <p class="mt-2 mb-0 text-center text-muted text-md-center">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                        </p> --}}
                        {{-- <nav aria-label="breadcrumb" class="mt-2 d-inline-block">
                            <ul class="mb-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Protfolio Details</li>
                            </ul>
                        </nav> --}}
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Breadcrumb -->


    <!-- Portfolio Details Area Start -->
    <div class="portfolio-details-area pt-95 pb-70">
        <div class="container">
            <div class="port-details-img mb-80">
                <div class="pro-details-active owl-carousel carousel-style-two">
                    <img src="images/portfolio/pro-details1.jpg" alt="">
                    <img src="images/portfolio/pro-details2.jpg" alt="">
                    <img src="images/portfolio/pro-details3.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="mx-auto col-lg-8 col-md-7 col-12">
                    <div class="abt-content">
                        @if ($privacy == null)
                            <!-- 404 -->
                            <section class="bg-home d-flex align-items-center">
                                <!-- container -->
                                <div class="container">
                                    <!-- row -->
                                    <div class="row justify-content-center">
                                        <!-- col -->
                                        <div class="col-12">
                                            <div class="text-center">
                                                <img src="images/bg/404.png" class="img-fluid" alt="">

                                                <div class="mt-5">
                                                    <h3>Waiting for the Admin to add the Policy</h3>
                                                    <p class="mx-auto text-muted para-desc">
                                                        You will get it shortly
                                                    </p>

                                                    <a href="/" class="mt-2 btn theme-btn">Go to
                                                        Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /container -->
                            </section>
                            <!-- /404 -->
                        @else
                            {!! nl2br($privacy->body) !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
