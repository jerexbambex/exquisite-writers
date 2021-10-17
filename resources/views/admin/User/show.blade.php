@extends('layouts.admintemplate')

@section('content')
    <style>
        .profile-ud.wider {
            display: grid;
            padding: .5rem 0;
        }
    </style>
    <div class="nk-content-body">
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Users / <strong class="text-primary small">{{ $user->name }}</strong></h3>
                        <div class="nk-block-des text-soft">
                            <ul class="list-inline">
                                <li>User ID: <span class="text-base">{{ Auth::id() }}</span></li>
                                <li>Registered on: <span class="text-base">{{ $user->created_at->format('l jS \of F Y h:i:s A') }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="html/user-list-regular.html" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                        <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><em class="icon ni ni-user-circle"></em><span>Personal</span></a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="card-inner">
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-3 pb-3">
                                <img src="{{ $user->image() }}" alt="{{ $user->name }}">
                            </div>
                            <div class="col-md-8">
                                <div class="nk-block">
                                    <div class="nk-block-head">
                                        <h5 class="title">Personal Information</h5>
                                        <p>Basic info, like your name and address, that you use on this Platform.</p>
                                    </div><!-- .nk-block-head -->
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Title</span>
                                                <span class="profile-ud-value" style="text-align: left !important;">{{ $user->title }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Full Name</span>
                                                <span class="profile-ud-value" style="text-align: left !important;">{{ $user->name }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Email Address</span>
                                                <span class="profile-ud-value" style="text-align: left !important;">{{ $user->email }}</span>
                                            </div>
                                        </div>
                                    </div><!-- .profile-ud-list -->
                                </div><!-- .nk-block -->
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-line">
                                        <h6 class="title overline-title text-base">Additional Information</h6>
                                    </div><!-- .nk-block-head -->
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item" style="width: 100% !important;">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Bio</span><br>
                                                <span class="" style="text-align: left !important;">{{ $user->bio }}</span>
                                            </div>
                                        </div>
                                    </div><!-- .profile-ud-list -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                        <div class="nk-divider divider md"></div>
                        <a href="{{ route('adminProfileEdit', $user->id) }}" class="btn btn-lg btn-primary"><em class="icon ni ni-pen2"></em><span>Edit</span> </a>

                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
@endsection
