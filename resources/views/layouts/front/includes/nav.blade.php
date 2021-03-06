    <!-- Navbar -->
    <!-- Header -->
    <header id="topnav" class="sticky defaultscroll">
        <div class="container">
            <!-- Logo -->
            <div>
                <a class="logo" href="/">
                    <img src="/assets/front/images/exquisite-logo.png" class="l-dark" height="20" alt="">
                    <img src="/assets/front/images/exquisite-logo.png" class="l-light" height="40" alt="">
                </a>
            </div>
            <!-- /Btn -->
            <div class="buy-button">
                <a href="{{ route('contactUs') }}" target="_blank" class="btn theme-btn btn-display-none">Get Started
                </a>
            </div>
            <!--/Btn -->
            <!-- /Logo -->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle -->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- /mobile menu toggle -->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu -->
                <ul class="navigation-menu nav-light">
                    <!-- Home -->
                    <li class="">
                        <a href="/">Home</a>
                    </li>
                    <!-- /Home -->
                    <!-- About us -->
                    <li class="">
                        <a href="{{ route('aboutUs') }}">About Us</a>
                    </li>
                    <!-- /About us -->
                    <!-- Portfolio -->
                    <li class="">
                        <a href="{{ route('blogIndex') }}">Portfolio</a>
                    </li>
                    <!-- /Portfolio -->

                    <!-- Page -->
                    <li class="">
                        <a href="http://blog.exquisitewritingservice.com">Blog</a><span class="menu-arrow"></span>
                    </li>
                    <!-- /Page -->
                    <li><a href="{{ route('contactUs') }}">Contact</a></li>
                </ul>
                <!-- /Navigation Menu -->
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /Header -->
    <!-- /Navbar -->
