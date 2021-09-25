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
                            <p>175 5th Ave, New York, NY 10010, United States</p>
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
                            <p>Mobile: <a href="tel:+44457895789">(+44) - 45789 - 5789</a></p>
                            <p>E-mail: <a href="mailto:hello@aloa.com">hello@example.com</a></p>
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
                            <p>Monday - Friday: 09:00 - 20:00</p>
                            <p>Sunday & Saturday: 10:30 - 22:00</p>
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
                <div class="col-lg-6">
                    <div class="map-site ml-15">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14709.912151828446!2d89.5403187!3d22.82179695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1570748232408!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <h2>Leave us a message.</h2>
                        <form id="contact-form" action="#" method="post">
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