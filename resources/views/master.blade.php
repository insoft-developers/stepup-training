<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>StepupTraining.id - Education & Online Leadership Training Course</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('images/su.ico') }}" type="image/png">
    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=SUSE:wght@100..800&display=swap"
        rel="stylesheet">
    <!--====== FlatIcon css ======-->
    <link rel="stylesheet" href="{{ asset('template') }}/common/fonts/flaticon/flaticon_edufit.css">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="{{ asset('template') }}/common/fonts/fontawesome/css/all.min.css">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('template') }}/common/css/plugins/bootstrap.min.css">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="{{ asset('template') }}/common/css/plugins/slick.css">
    <!--====== Magnific-popup css ======-->
    <link rel="stylesheet" href="{{ asset('template') }}/common/css/plugins/magnific-popup.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('template') }}/common/css/plugins/aos.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('template') }}/common/css/default.css">
    <!--====== Common Style css ======-->
    <link rel="stylesheet" href="{{ asset('template') }}/common/css/common_style.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('template/home') }}/assets/css/style.css">

    @include('css')
</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <img src="{{ asset('images/logo_trans.png') }}" alt="loader">
        </div>
    </div><!--====== End Preloader ======-->
    <!--====== Start Overlay ======-->
    <div class="offcanvas__overlay"></div>
    <!--====== Search From ======-->
    <div class="modal fade search-modal" id="search-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="form-group">
                        <input type="search" class="form_control" placeholder="Search here" name="search">
                        <label><i class="fa fa-search"></i></label>
                    </div>
                </form>
            </div>
        </div>
    </div><!--====== Search From ======-->
    <!--===  Header Area  ===-->
    <header class="header-area header-one">
        <!--====  Header Top  ===-->
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <!--===  Top Bar Left  ===-->
                        <div class="top-left">
                            <span><i class="flaticon-email"></i><a
                                    href="mailto:info@edufit.com">info@stepuptraining.id</a></span>
                            <span><i class="flaticon-pin-map"></i>15/A,Blitar, Surabaya</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--===  Top Bar Right  ===-->
                        <div class="top-right">
                            <!--===  Dropdown  ===-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====  Header Navigation  ===-->
        <div class="header-navigation">
            <div class="container-fluid">
                <!--====  Header Nav Inner  ===-->
                <div class="nav-inner-menu">
                    <!--====  Primary Menu  ===-->
                    <div class="primary-menu">
                        <!--====  Site Branding  ===-->
                        <div class="site-branding">
                            <a href="{{ url('/') }}" class="brand-logo"><img class="custom-logo"
                                    src="{{ asset('images/logo_trans.png') }}" alt="Brand Logo"></a>
                        </div>
                        <!--=== Edufit Main Menu ===-->
                        <div class="edufit-nav-menu">
                            <!--=== Edufit Menu Top ===-->
                            <div class="edufit-menu-top d-flex justify-content-between d-block d-xl-none">
                                <div class="site-branding">
                                    <a href="{{ url('/') }}" class="brand-logo"><img class="custom-logo"
                                            src="{{ asset('images/logo_trans.png') }}" alt="Brand Logo"></a>
                                </div>
                                <div class="navbar-close">
                                    <i class="far fa-times"></i>
                                </div>
                            </div>
                            <!--=== Main Menu ===-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="{{ url('/') }}">Home</a>

                                    </li>
                                    <li class="menu-item has-children"><a href="#about">About</a>

                                    </li>
                                    <li class="menu-item has-children"><a href="#training">Training Terdekat</a>

                                    </li>
                                    <li class="menu-item has-children"><a href="#inhouse">In House Training</a>

                                    </li>
                                    <li class="menu-item"><a href="#contact">Contact
                                            Us</a></li>
                                </ul>
                            </nav>
                            <!--=== Edufit Nav Button ===-->
                            {{-- <div class="edufit-nav-button d-block d-xl-none mt-40">
                                    <a href="{{ asset('template') }}/pages/contact.html" class="theme-btn style-one">Log in</a>
                                    <a href="{{ asset('template') }}/pages/contact.html" class="theme-btn style-two">Register</a>
                                </div> --}}
                        </div>
                        <!--=== Header Nav Right ===-->
                        <div class="nav-right-item">
                            <div class="search-btn">
                                <button class="icon" data-bs-toggle="modal" data-bs-target="#search-modal"><i
                                        class="far fa-search"></i></button>
                            </div>
                            <div class="nav-button d-none d-xl-block">
                                    
                                    <a href="#" class="theme-btn style-two">Join Now</a>
                                </div>
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--====== End Header Area  ======-->
    <!--====== Start Hero Section ======-->
    {{-- <section class="ef-hero-sec"> --}}
    {{-- <div class="hero-wrapper bg_cover overflow-hidden"
            style="background-image: url({{ asset('template/home') }}/assets/images/hero/hero_bg1.jpg);">
            <div class="elements element_one"><span><img
                        src="{{ asset('template/home') }}/assets/images/hero/shape1.png" alt=""></span></div>
            <div class="elements element_two"><span><img
                        src="{{ asset('template/home') }}/assets/images/hero/shape2.png" alt=""></span></div>
            <div class="elements element_three"><span><img
                        src="{{ asset('template/home') }}/assets/images/hero/shape6.png" alt=""></span></div>
            <svg class="lineanm" viewBox="0 0 294 501" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="line"
                    d="M2 -3C20.3006 68.6667 91.54 225.8 230.092 273C250.057 279.801 284.595 286.7 292.98 237.5C302.595 181.084 241.649 210.501 218.793 278.664C214.563 291.278 213.395 304.681 214.074 317.969C216.016 355.979 226.193 422.625 279.005 500"
                    stroke="#6255FA" stroke-width="3" />
            </svg>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!--===  Hero Content  ===-->
                        <div class="hero-content">
                            <span class="sub-heading" data-aos="fade-up" data-aos-duration="800"><i
                                    class="flaticon-mortarboard-1"></i>Elevate Your Leader Skills </span>
                            <h1 data-aos="fade-up" data-aos-delay="10" data-aos-duration="1000">Best Platform <span
                                    class="c1">Improve<span class="shape-one"><img
                                            src="{{ asset('template/home') }}/assets/images/hero/shape3.png"
                                            alt="shape"></span></span> Your <span class="c2">Learning </span>
                                Skills. <span class="shape-two"><img
                                        src="{{ asset('template/home') }}/assets/images/hero/shape4.png"
                                        alt="shape"></span></h1>
                            <p data-aos="fade-up" data-aos-delay="20" data-aos-duration="1200">Executive-level
                                management training designed for business leaders who demand measurable results.</p>
                            <!--=== Hero Subscribe ===-->
                            <div class="hero-subscribe" data-aos="fade-up" data-aos-delay="30"
                                data-aos-duration="1400">

                                <div class="form-group">
                                    <button class="theme-btn style-one">Get Started</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--===  Hero Image Box  ===-->
                        <div class="hero-image-box">
                            <!--===  Hero Image  ===-->
                            <div class="hero-img image_one" data-aos="fade-up" data-aos-delay="10"
                                data-aos-duration="700">
                                <img src="{{ asset('images/hero300.png') }}" alt="chart">
                            </div>
                            <!--===  Iconic Box  ===-->

                            <!--===  Hero Image  ===-->
                            <img src="{{ asset('images/header_pp.png') }}" data-aos="fade-up" data-aos-delay="10"
                                data-aos-duration="700" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </section> --}}
    <!--====== Start About Section ======-->
    @yield('content')
    <footer class="footer-default">
        <div class="shape shape-one"><span><img src="{{ asset('template') }}/common/images/footer/shape/shape1.png"
                    alt="shape"></span></div>
        <div class="shape shape-two"><span><img src="{{ asset('template') }}/common/images/footer/shape/shape2.png"
                    alt="shape"></span></div>
        <div class="shape shape-three"><span><img src="{{ asset('template') }}/common/images/footer/shape/shape3.png"
                    alt="shape"></span></div>
        <div class="shape shape-four"><span><img src="{{ asset('template') }}/common/images/footer/shape/shape4.png"
                    alt="shape"></span></div>
        <div class="shape shape-five"><span><img src="{{ asset('template') }}/common/images/footer/shape/shape5.png"
                    alt="shape"></span></div>
        <div class="container">
            <!--===  Footer Widget Area  ===-->
            <div class="footer-widget-area pt-120 pb-75">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!--===  Footer Widget  ===-->
                        <div class="footer-widget footer-about-widget mb-40" data-aos="fade-up"
                            data-aos-duration="1000">
                            <div class="footer-content">
                                <div class="footer-logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('images/logo_black.png') }}"
                                            alt="Brand Logo"></a>
                                </div>
                                <p>StepupTraning.id offers interactive modules, live sessions, and certifications,
                                    empowering
                                    learners with personalized content for professional and personal growth.</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="row">
                            <div class="col-6">
                                <!--===  Footer Widget  ===-->
                                <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up"
                                    data-aos-duration="1200">
                                    <div class="footer-content">
                                        <h4 class="widget-title">Quick Link</h4>
                                        <ul class="widget-nav">
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="#about">About us</a></li>
                                            <li><a href="#client">Client</a></li>
                                            <li><a href="#training">Training</a></li>
                                            <li><a href="#inhouse">Inhouse</a></li>

                                            

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <!--===  Footer Widget  ===-->
                                <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up"
                                    data-aos-duration="1400">
                                    <div class="footer-content">
                                        <h4 class="widget-title">Training Terdekat</h4>
                                        <ul class="widget-nav">
                                            <li><a href="#">Training 1</a></li>
                                            <li><a href="#">Training 2</a></li>
                                            <li><a href="#">Training 3</a></li>
                                            <li><a href="#">Training 4</a></li>
                                            <li><a href="#">Training 5</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--=== Footer Contact Widget ===-->
                        <div class="footer-widget footer-contact-widget mb-40" data-aos="fade-up"
                            data-aos-duration="1600">

                            <div class="footer-content">
                                <h4 class="widget-title">Contact Us</h4>

                                <p class="contact-description">
                                    Hubungi StepUp Training untuk konsultasi program pelatihan
                                    individu maupun perusahaan.
                                </p>

                                <ul class="footer-contact-list">
                                    <!-- Address -->
                                    <li>
                                        <div class="contact-icon">
                                            <i class="far fa-map-marker-alt"></i>
                                        </div>

                                        <div class="contact-info">
                                            <span>Alamat</span>
                                            <p>
                                                Jl. Nama Jalan No. 123,<br>
                                                Jakarta, Indonesia
                                            </p>
                                        </div>
                                    </li>

                                    <!-- Email -->
                                    <li>
                                        <div class="contact-icon">
                                            <i class="far fa-envelope"></i>
                                        </div>

                                        <div class="contact-info">
                                            <span>Email</span>
                                            <p>
                                                <a href="mailto:info@stepuptraining.id">
                                                    info@stepuptraining.id
                                                </a>
                                            </p>
                                        </div>
                                    </li>

                                    <!-- Phone -->
                                    <li>
                                        <div class="contact-icon">
                                            <i class="far fa-phone-alt"></i>
                                        </div>

                                        <div class="contact-info">
                                            <span>Telepon/WhatsApp</span>
                                            <p>
                                                <a href="https://wa.me/6281234567890" target="_blank"
                                                    rel="noopener noreferrer">
                                                    +62 812-3456-7890
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===  Footer Copyright  ===-->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--===  Copyright Text  ===-->
                        <div class="copyright-text text-center">
                            <p>&copy; {{ date('Y') }} All rights reserved by <span>StepupTraining.id.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--====== End Footer Area  ======-->
    <!--====== Back To Top ======-->
    <div class="back-to-top"><i class="far fa-arrow-up"></i></div>
    <!--====== Jquery js ======-->
    <script src="{{ asset('template') }}/common/js/plugins/jquery-3.7.1.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('template') }}/common/js/plugins/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('template') }}/common/js/plugins/bootstrap.min.js"></script>
    <!--====== Slick js ======-->
    <script src="{{ asset('template') }}/common/js/plugins/slick.min.js"></script>
    <!--====== Magnific js ======-->
    <script src="{{ asset('template') }}/common/js/plugins/jquery.magnific-popup.min.js"></script>
    <!--====== Aos js ======-->
    <script src="{{ asset('template') }}/common/js/plugins/aos.js"></script>
    <!--====== Main js ======-->
    <script src="{{ asset('template') }}/common/js/common_script.js"></script>
    <!--====== Main js ======-->
    <script src="{{ asset('template/home') }}/assets/js/theme.js"></script>
</body>

</html>
