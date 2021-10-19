@extends('layouts.front.template')

@section('content')

    <!-- Hero -->
    <div class="hero-1 oh pos-rel" style="background: url('/assets/front/images/hero/banner-bg.png')">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-5">
                    <div class="hero-1-content wow fadeInLeft animated">
                        <h1 class="title wow fadeInUp animated" data-wow-delay="0.4s">When you need content written, hire an Exquisite Writer</h1>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.6s">
                            Our all-inclusive service provides excellent quality articles and blogs for your online presence at an affordable price!
                        </p>
                        <div class="hero-1-button-group">
                            <a href="#" class="btn theme-btn wow fadeInUp animated" data-wow-delay="0.8s"> Get Started
                                <i class="mb-2 ml-2 uil uil-angle-right-b"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-7 d-lg-block">
                    <div class="hero-1-thumb-15 wow fadeInUp animated" data-wow-delay="0.4s">
                        <img class="img-fluid wow fadeInRight animated" src="/assets/front/images/hero/hero-1.png"
                            alt="hero-1">
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Hero -->

    <!-- Client Logo -->
    {{-- <div class="client-logo-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row brand-style-1">
                <!-- col -->
                <div class="text-center col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="client-logo">
                        <div class="client-logo-img wow fadeInUp animated" data-wow-delay="0.1s"> <img
                                src="/assets/front/images/client-logo/logo-envato.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="text-center col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="client-logo">
                        <div class="client-logo-img wow fadeInUp animated" data-wow-delay="0.2s"> <img
                                src="/assets/front/images/client-logo/logo-converkit.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="text-center col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="client-logo">
                        <div class="client-logo-img wow fadeInUp animated" data-wow-delay="0.3s"> <img
                                src="/assets/front/images/client-logo/logo-buzzumo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="text-center col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="client-logo">
                        <div class="client-logo-img wow fadeInUp animated" data-wow-delay="0.4s"> <img
                                src="/assets/front/images/client-logo/logo-buffer.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="text-center col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="client-logo">
                        <div class="client-logo-img wow fadeInUp animated" data-wow-delay="0.5s"> <img
                                src="/assets/front/images/client-logo/logo-frame.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="text-center col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="client-logo">
                        <div class="client-logo-img wow fadeInUp animated" data-wow-delay="0.6s"> <img
                                src="/assets/front/images/client-logo/logo-clearbit.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- row -->
        </div>
        <!-- /Container -->
    </div> --}}
    <!-- /Client Logo -->

    <!-- About -->
    <section class="about-area pt-100 pb-100 pt-mb-50 pt-sm-50 bg-section"
        style="background: url('/assets/front/images/bg/bg-section-2.png') top center;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-6 align-self-center">
                    <div class="mb-20">
                        <img src="/assets/front/images/bg/about.png" class="img-fluid wow fadeInLeft animated"
                            data-wow-delay="0.2s" alt="image">
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6 align-items-center">
                    <div class="about-text">
                        <div class="text-center col-lg-12">
                            <div class="section-heading wow fadeInUp animated">
                                <h5 class="section-meta ">About Us</h5>
                                <h2 class="section-title">We are a full-circle content creation solution
                                </h2>

                            </div>
                        </div>
                        <h4>
                            You are the idea person, but you need execution? That's where Exquisite Writers come in. We're a unique creative team that goes above and beyond for your content needs!
                        </h4>
                        <div class="text-center pt-30">
                            <a href="{{ route('aboutUs') }}" class="btn theme-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /About -->

    <!-- Services -->
    <section class="service-area pt-100 pb-100 pt-mb-50 pt-sm-50 bg-section">
        <!-- Container -->
        <div class="container">
            <!-- rwo -->
            <div class="row justify-content-center">
                <!-- col -->
                <div class="col-12">
                    <div class="text-center section-heading wow fadeInUp animated">
                        <h5 class="section-meta ">Services</h5>
                        <h2 class="section-title">
                            We promise to provide value for <br>readers through our contents
                        </h2>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="pt-2 mt-4 text-center col-lg-4 col-md-6 col-12">
                    <div class="p-4 border-0 card services rounded-pill align-items-center wow fadeInUp animated"
                        data-wow-delay="0.2s">
                        <div class="mb-4 text-center icon">
                            <img src="/assets/front/images/icon-img/rocket.png" alt="">
                        </div>
                        <div class="p-0 card-body content">
                            <h5 class="mb-3"><a href="#" class="title text-dark">Define</a></h5>
                            <p class="mb-3 text-muted">
                                We provide a breakdown of the requirements.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="p-4 border-0 card services rounded-pill align-items-center wow fadeInUp animated"
                        data-wow-delay="0.4s">
                        <div class="mb-4 text-center icon">
                            <img src="/assets/front/images/icon-img/time.png" alt="">
                        </div>
                        <div class="p-0 text-center card-body content">
                            <h5 class="mb-3"><a href="#" class="title text-dark">Develop</a></h5>
                            <p class="mb-3 text-muted">
                                Exquisite team starts the writing project
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="p-4 border-0 card services rounded-pill align-items-center wow fadeInUp animated"
                        data-wow-delay="0.6s">
                        <div class="mb-4 text-center icon">
                            <img src="/assets/front/images/icon-img/phone.png" alt="">
                        </div>
                        <div class="p-0 text-center card-body content">
                            <h5 class="mb-3"><a href="#" class="title text-dark">Deploy</a>
                            </h5>
                            <p class="mb-3 text-muted">
                                We deliver our projects timely to you.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </section>
    <!-- /Services -->

    <!-- Feature -->
    <div class="feature-area pt-100 pb-100 pt-mb-40 pt-sm-40 bg-section"
        style="background: url('/assets/front/images/bg/bg-section-3.png') top center;">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row single-block">
                <!-- col -->
                <div class="col-lg-6">
                    <div class="text">
                        <div class="number"><i class="ri-line-chart-line"></i></div>
                        <h2 class="title">Expert Writers.</h2>
                        <p>
                            We don't just want to give you content; we want the best of what's out there and handpick our team. Our writers are professionals with many articles published in various industries such as tech or finance that will add value for your business!
                        </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6 img-box wow fadeInUp animated" data-wow-delay="0.1s">
                    <div><img src="/assets/front/images/feature/1.png" class="img-fluid" alt=""></div>
                </div>
                <!-- /col -->
                <!-- col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row single-block">
                <!-- col -->
                <div class="col-lg-6 order-lg-last">
                    <div class="text">
                        <div class="number"><i class="ri-user-line"></i></div>
                        <h2 class="title">Quick Turnarounds</h2>
                        <p>
                            We are the perfect business solution for those who need content immediately and on their schedule. No more waiting around with un-committed partners; order as much or little you want from us, and we will make sure it happens!
                        </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6 order-lg-first img-box wow fadeInUp animated" data-wow-delay="0.1s">
                    <div><img src="/assets/front/images/feature/2.png" class="img-fluid" alt=""></div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row single-block">
                <!-- col -->
                <div class="col-lg-6">
                    <div class="text">
                        <div class="number"><i class="ri-database-2-line"></i></div>
                        <h2 class="title">Strategic Content.</h2>
                        <p>
                            Our content strategists and SEO writers know how to position your company for success. We'll create a strategic plan that's tailored just for you so that we can get the most bang-for-your-buck!
                        </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6 img-box wow fadeInUp animated" data-wow-delay="0.1s">
                    <div><img src="/assets/front/images/feature/3.png" class="img-fluid" alt=""></div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row single-block">
                <!-- col -->
                <div class="col-lg-6 order-lg-last">
                    <div class="text">
                        <div class="number"><i class="ri-user-line"></i></div>
                        <h2 class="title">Great Content at Scale</h2>
                        <p>
                            Get the content you need, when, and where. With a single source for all of your needs: articles written by professional writers who have decades of expertise in writing every type across different categories.
                        </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6 order-lg-first img-box wow fadeInUp animated" data-wow-delay="0.1s">
                    <div><img src="/assets/front/images/feature/5.png" class="img-fluid" alt=""></div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Feature -->

    <!-- Team -->
    {{-- <section class="team-member-section bg-section pt-100 pb-100"
        style="background: url('/assets/front/images/bg/bg-section-1.png') top center;">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center">
                <!-- col -->
                <div class="col-lg-12">
                    <div class="text-center section-heading wow fadeInUp animated">
                        <h5 class="section-meta ">TEAM</h5>
                        <h2 class="section-title">Meet Our team members</h2>
                        <p class="section-sub">Lorem ipsum dolor sit amet</p>

                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="mt-20 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-member position-relative my-lg-3 my-md-3 my-sm-0">
                        <div class="team-image">
                            <img src="/assets/front/images/team/team-1.png" alt="Team Members" class="rounded img-fluid">
                        </div>
                        <div
                            class="text-white rounded team-info d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="my-4 text-white list-inline team-social">
                                <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-github-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-dribbble"></i></a></li>
                            </ul>
                            <a href="#" target="_blank" class="btn theme-btn-1">View details</a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="mt-20 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-member position-relative my-lg-3 my-md-3 my-sm-0">
                        <div class="team-image">
                            <img src="/assets/front/images/team/team-2.png" alt="Team Members" class="rounded img-fluid">
                        </div>
                        <div
                            class="text-white rounded team-info d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="my-4 text-white list-inline team-social">
                                <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-github-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-dribbble"></i></a></li>
                            </ul>
                            <a href="#" target="_blank" class="btn theme-btn-1">View details</a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="mt-20 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-member position-relative my-lg-3 my-md-3 my-sm-0">
                        <div class="team-image">
                            <img src="/assets/front/images/team/team-3.png" alt="Team Members" class="rounded img-fluid">
                        </div>
                        <div
                            class="text-white rounded team-info d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="my-4 text-white list-inline team-social">
                                <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-github-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-dribbble"></i></a></li>
                            </ul>
                            <a href="#" target="_blank" class="btn theme-btn-1">View details</a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="mt-20 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-member position-relative my-lg-3 my-md-3 my-sm-0">
                        <div class="team-image">
                            <img src="/assets/front/images/team/team-4.png" alt="Team Members" class="rounded img-fluid">
                        </div>
                        <div
                            class="text-white rounded team-info d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="my-4 text-white list-inline team-social">
                                <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-github-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-dribbble"></i></a></li>
                            </ul>
                            <a href="#" target="_blank" class="btn theme-btn-1">View details</a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="mt-20 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-member position-relative my-lg-3 my-md-3 my-sm-0">
                        <div class="team-image">
                            <img src="/assets/front/images/team/team-5.png" alt="Team Members" class="rounded img-fluid">
                        </div>
                        <div
                            class="text-white rounded team-info d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="my-4 text-white list-inline team-social">
                                <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-github-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-dribbble"></i></a></li>
                            </ul>
                            <a href="#" target="_blank" class="btn theme-btn-1">View details</a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="mt-20 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team-member position-relative my-lg-3 my-md-3 my-sm-0">
                        <div class="team-image">
                            <img src="/assets/front/images/team/team-6.png" alt="Team Members" class="rounded img-fluid">
                        </div>
                        <div
                            class="text-white rounded team-info d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="my-4 text-white list-inline team-social">
                                <li class="list-inline-item"><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-github-alt"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="uil uil-dribbble"></i></a></li>
                            </ul>
                            <a href="#" target="_blank" class="btn theme-btn-1">View details</a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section> --}}
    <!-- /Team -->

    <!-- Blog -->
    <div class="blog-area pt-100">
        <!-- Container-->
        <div class="container">
            <!-- row -->
            <div class="row">
                @foreach ($blogs as $blog)
                    <!-- col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="{{ route('blogShow', $blog->path()) }}">
                                    <img src="{{ $blog->avatar }}" alt="image">
                                </a>
                            </div>
                            <div class="post-content">
                                <ul class="post-meta d-flex justify-content-between align-items-center">
                                    <li>
                                        <div class="post-author d-flex align-items-center">
                                            <img src="{{ $blog->user->avatar }}" class="rounded-circle" alt="image">
                                            <span>{{ $blog->user->name }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="ri-calendar-line"></i>{{ $blog->updated_at->diffForHumans() }}
                                    </li>
                                </ul>
                                <h3><a href="{{ route('blogShow', $blog->path()) }}">{{ $blog->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                @endforeach

            </div>
            <!-- /row -->
        </div>
        <!-- /Container-->
    </div>
    <!-- /Blog -->

    <!-- Faq -->
    {{-- <section class="faq-section pb-100 bg-section"
        style="background: url('/assets/front/images/bg/bg-section.png') top center;">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_06">
                        <div class="content-box">
                            <div class="section-heading wow fadeInUp animated">
                                <h5 class="section-meta ">Have A Question?</h5>
                                <h2 class="section-title">Frequently<br />Asked Questions</h2>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.enim ad minim veniam quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure.</p>
                            </div>
                            <div class="btn-box"><a href="faq.html" class="btn theme-btn">Ask Here</a></div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div id="content_block_07">
                        <ul class="accordion-box">
                            <li class="block accordion active-block">
                                <div class="acc-btn active">
                                    <h4><span>Q.</span>What is Saas and How Does it Work?</h4>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt
                                            labore dolore magna aliqua enim minim.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="block accordion">
                                <div class="acc-btn">
                                    <h4><span>Q.</span>How does Your Pricing Work?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt
                                            labore dolore magna aliqua enim minim.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="block accordion">
                                <div class="acc-btn">
                                    <h4><span>Q.</span>How Does aloa Work?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt
                                            labore dolore magna aliqua enim minim.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </section> --}}
    <!-- Faq -->

@endsection
