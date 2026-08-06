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
    <link rel="stylesheet" href="{{ asset('template/pages') }}/assets/css/style.css">
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
                                    @if($view == 'training')
                                     <li class="menu-item has-children"><a href="#manfaat">Benefit</a>

                                    </li>
                                     <li class="menu-item has-children"><a href="#belajar-apa">Learn</a>

                                    </li>
                                     <li class="menu-item has-children"><a href="#outline">Outline</a>

                                    </li>
                                     <li class="menu-item has-children"><a href="#harga">Price</a>

                                    </li>
                                     <li class="menu-item has-children"><a href="#fasilitas">Facility</a>

                                    </li>

                                    @else
                                    <li class="menu-item has-children"><a href="#about">About</a>

                                    </li>
                                    <li class="menu-item has-children"><a href="#training">Training Terdekat</a>

                                    </li>
                                    <li class="menu-item has-children"><a href="#inhouse">In House Training</a>

                                    </li>
                                    <li class="menu-item"><a href="#contact">Contact
                                            Us</a></li>
                                    @endif
                                    
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
