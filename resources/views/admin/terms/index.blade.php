@extends('layouts.admintemplate')

@section('content')

    @if ($term == null)
        <div class="nk-content ">
            <div class="mx-auto nk-block nk-block-middle wide-xs">
                <div class="text-center nk-block-content nk-error-ld">
                    <h1 class="nk-error-head">Empty</h1>
                    <h3 class="nk-error-title">Privacy Statement</h3>
                    <p class="nk-error-text">We are very sorry for inconvenience. It looks like you are yet to add a privacy
                        statement.</p>
                    <a href="{{ route('adminTermsCreate') }}" class="mt-2 btn btn-lg btn-primary">Add Privacy Statement</a>
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
                                    <h2 class="nk-block-title fw-normal">Terms &amp; Policy</h2>
                                    <div class="nk-block-des">
                                        <p class="lead">We are on a mission to make the web a better place. The
                                            following terms, as well as our Policy and Terms of Service, apply to all users.
                                        </p>
                                        <p class="text-soft ff-italic">Last Update: Nov 12, 2019</p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-inner card-inner-xl">
                                        <a href="{{ route('adminTermsEdit', $term->id) }}"
                                            class="mt-2 btn btn-lg btn-primary">Edit</a>
                                        <div class="mt-5 entry">
                                            {!! nl2br($term->body) !!}
                                        </div>
                                        <a href="{{ route('adminTermsEdit', $term->id) }}"
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
