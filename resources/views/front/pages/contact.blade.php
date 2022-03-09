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
                        <h3>Contact Us</h3>
                        <p class="text-muted text-center text-md-center mt-2 mb-0">
                            At EXQUISITE WRITER, we delight in satisfying our clients to ensure they get nothing but exceptional service.
                        </p>
                        <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

        <!-- Start Contact Info Area -->
        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                  </svg>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <strong>Whoala! &nbsp;</strong> {{ session('success') }}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors)
                    @foreach ($errors->all() as $message)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <strong>Opps!</strong> {{$message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                   @endforeach
                @endif
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="back-icon">
                                <i class="ri-map-2-line"></i>
                            </div>
                            <div class="icon">
                                <i class="ri-map-2-line"></i>
                            </div>
                            <h3>Our Address</h3>
                            <p>Online</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="back-icon">
                                <i class="ri-phone-line"></i>
                            </div>
                            <div class="icon">
                                <i class="ri-phone-line"></i>
                            </div>
                            <h3>Contact</h3>
                            <p>Mobile: <a href="tel:+2348027540009">(+234) - 802 - 754 - 0009</a></p>
                            <p>E-mail: <a href="mailto:teamlead@exquisitewritingservice.com">teamlead[at]exquisitewritingservice[dot]com</a></p>
                            <p><a href="mailto:va@exquisitewritingservice.com">va[at]exquisitewritingservice[dot]com</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="contact-info-box">
                            <div class="back-icon">
                                <i class="ri-time-line"></i>
                            </div>
                            <div class="icon">
                                <i class="ri-time-line"></i>
                            </div>
                            <h3>Hours of Operation</h3>
                            <p>Monday - Sunday: 09:00 - 17:00</p>
                            {{-- <p>Sunday & Saturday: 10:30 - 22:00</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Info Area -->

    <!-- Contact -->
    <section class="contact-section">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row clearfix">

                <!-- col -->
                {{-- <div class="col-lg-6">
                    <div class="map-site ml-15">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14709.912151828446!2d89.5403187!3d22.82179695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1570748232408!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div> --}}
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <h4>Your Journey To Efficient Work Output Starts Here<br>
                            Request Our Free Sample Today<br>

                            <span class="text-danger">Use “free writing sample” as subject of mail.?</span></h4>
                        <form id="contact-form" action="{{ route('postContactUs') }}" method="post">
                            @csrf
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="firstname" placeholder="First Name*" type="text">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-md-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="lastname" placeholder="Last Name*" type="text">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-md-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="email" placeholder="Email*" type="email">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-md-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="subject" placeholder="Subject*" type="text">
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-md-12">
                                    <div class="contact-form-style mb-20">
                                        <textarea name="message" placeholder="Type your message here.."></textarea>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-12">
                                    <button class="btn btn-lg btn-block solid-btn-login border-radius mt-4 mb-3"
                                        type="submit"><span>Send Email</span></button>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- row -->
                        </form>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- /row -->
        </div>
        <!-- Container -->
    </section>
    <!-- /Contact -->

@endsection
