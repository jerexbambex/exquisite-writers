    <!-- /Newsletter -->
    <div class="newsletter-area pt-50">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-md-8 col-12 col-center">
                    <div class="newsletter bg-theme-color">
                        <form action="#" method="POST">
                            <input type="email" class="news-email"
                                placeholder="Subscribe Newsletter (Enter Email Address)" />
                            <button type="submit" class="news-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Newsletter -->

    <!-- Footer -->
    <footer class="bg-gray-700 footer-area">
        <!-- Container -->
        <div class="container text-center">
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-12 me-auto ms-auto">
                    <div class="mb-4">
                        <a href="index.html"><img src="images/logo-light.png" alt="" class="logo-light"
                                height="22" /></a>
                    </div>
                    <p><a href="{{ route('privacy') }}" style="text-decoration: none; color: #fdf9f9">Privacy &
                            Policy</a></p>
                </div>
            </div>
            <!-- /row -->
            <!-- col -->
            <div class="col-md-4 col-12 foot-divider col-center"></div>
            <!-- /col -->
            <ul class="social-link">
                <li><a href="https://web.facebook.com/exquisitewriter" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                {{-- <li><a href="#"><i class="ri-instagram-line"></i></a></li> --}}
                <li><a href="https://twitter.com/exquisitewrite" target="_blank"><i class="ri-twitter-line"></i></a></li>
                <li><a href="https://www.linkedin.com/in/exquisitewriter/" target="_blank"><i class="ri-linkedin-line"></i></a></li>
            </ul>
            <p class="copyright-text ">&copy; {{ date('Y') }} Exquisite Writers all right reserved designed by <a href="https://furseeinc.com"> FurseeInc. </a>
            </p>
        </div>
        <!-- /Container -->
    </footer>
    <!-- /Footer -->
