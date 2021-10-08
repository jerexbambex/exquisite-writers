@extends('layouts.admintemplate')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li>
                                <a href="{{ route('adminBlogIndex') }}" class="btn btn-light">
                                    <em class="icon ni ni-arrow-left"></em><span>Back</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('adminBlogEdit', $blog->path()) }}" class="btn btn-secondary">
                                    <em class="icon ni ni-edit-alt"></em><span>Edit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .toggle-wrap -->
            </div>
            <!-- .nk-block-head-content -->
        </div>
        <!-- .nk-block-between -->
    </div>
    <!-- .nk-block-head -->
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-lg">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title fw-normal font-circular-regular">Blog post {{ $blog->id }}</h5>
                <div class="nk-block-des">
                    {{--<p class="lead">We love to share ideas! Visit our blog if you're looking for great articles or inspiration to get you going.</p>--}}
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-bordered pl-auto pr-auto justify-content-center">
                <div class="card-inner card-inner-xl mx-auto md:w-60" style="max-width: 980px;">
                    <article class="entry mb-5 text-left">
                        <h2 class="font-circular-regular mb-5">{{ $blog->title }}</h2>
                        <p class="mb-5"><img src="{{ $blog->avatar() }}" alt=""></p>
                        <div class="fs-20px font-weight-light">
                            {!! nl2br($blog->body) !!}
                        </div>
                    </article>

                    <div class="g-3 mt-5">
                        <a href="{{ route('adminBlogEdit', $blog->path()) }}" class="btn btn-primary">
                            <em class="icon ni ni-edit-alt"></em><span>Edit</span>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- .nk-block -->
    </div>

@endsection
