@extends('layouts.admintemplate')

@section('content')

    @if ($about == null)
        <div class="nk-content ">
            <div class="mx-auto nk-block nk-block-middle wide-xs">
                <div class="text-center nk-block-content nk-error-ld">
                    <h1 class="nk-error-head">Empty</h1>
                    <h3 class="nk-error-title">About the Company</h3>
                    <p class="nk-error-text">We are very sorry for inconvenience. It looks like you are yet to add an about the company.</p>
                    <a href="{{ route('adminAboutCreate') }}" class="mt-2 btn btn-lg btn-primary">Add About the Company</a>
                </div>
            </div><!-- .nk-block -->
        </div>
    @else
        <!-- content @s -->
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="m-auto content-page wide-md">
                            <div class="mx-auto nk-block-head nk-block-head-lg wide-sm">
                                <div class="text-center nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">About Us</h2>
                                    <div class="nk-block-des">
                                        <p class="lead">
                                            {{ $about->preamble }}
                                        </p>
                                        <p class="text-soft ff-italic">Last Update: {{ $about->updated_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-inner card-inner-xl">
                                        <a href="{{ route('adminAboutEdit', $about->id) }}"
                                            class="mt-2 btn btn-lg btn-primary">Edit</a>
                                        <div class="mt-5 entry">
                                            {!! nl2br($about->body) !!}
                                        </div>
                                        <a href="{{ route('adminAboutEdit', $about->id) }}"
                                            class="mt-5 btn btn-lg btn-primary">Edit</a>
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div><!-- .content-page -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
    @endif

@endsection
