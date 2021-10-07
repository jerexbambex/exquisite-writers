@extends('layouts.front.template')

@section('content')

    <!-- Breadcrumb -->
    <section class="bg-half-170 d-table w-100 bg-blue-light" style="background: url('images/bg/page.png') top center;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mt-5">
                <!-- /col -->
                <div class="col-lg-12">
                    <div class="title-heading text-center text-md-center">
                        <h3>Blog</h3>
                        <p class="text-muted text-center text-md-center mt-2 mb-0">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                        </p>
                        <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

    <!-- Blog -->
    <section class="blog-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">
            @if($blogs == null)
                <!-- 404 -->
                <section class="bg-home d-flex align-items-center">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row justify-content-center">
                            <!-- col -->
                            <div class="col-12">
                                <div class="text-center">
                                    <img src="/assets/front/images/bg/404.png" class="img-fluid" alt="">

                                    <div class="mt-5">
                                        <h3>Waiting for the Admin to add some stories</h3>
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
            <!-- row -->
            <div class="row">
                @foreach ($blogs as $blog)
                    <!-- col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="{{ route('blogShow', $blog->path()) }}">
                                    <img src="/assets/front/images/blog/blog1.jpg" alt="image">
                                </a>
                            </div>
                            <div class="post-content">
                                <ul class="post-meta d-flex justify-content-between align-items-center">
                                    <li>
                                        <div class="post-author d-flex align-items-center">
                                            <img src="/assets/front/images/blog/author.png" class="rounded-circle" alt="image">
                                            <span>Travis K. Thorne</span>
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
            {{-- <div class="col-lg-12 col-md-12">
                <div class="pagination-area text-center">
                    <a href="#" class="prev page-numbers"><i class="las la-angle-left"></i></a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers"><i class="las la-angle-right"></i></a>
                </div>
            </div> --}}
            {{ $blogs->links('pagination::custom-front') }}
            @endif
        </div>
        <!-- /Container -->
    </section>
    <!-- /Blog -->

@endsection
