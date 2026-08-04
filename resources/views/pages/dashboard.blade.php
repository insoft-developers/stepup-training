 
    @extends('master')
    @section('content')
        
    
    <section id="about" class="ef-about-sec pt-130 pb-80 adjust-margin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!--====== About Image Box =====-->
                    <div class="edufit-image-box style-one mb-50">
                        <div class="shape shape_one"><span><img
                                    src="{{ asset('template/home') }}/assets/images/about/shape1.png"
                                    alt="shape"></span></div>
                        <div class="shape shape_two"><span><img
                                    src="{{ asset('template/home') }}/assets/images/about/shape2.png"
                                    alt="shape"></span></div>
                        <!--====== Edufit Image =====-->
                        <div class="edufit-img image_one" data-aos="fade-up" data-aos-delay="10"
                            data-aos-duration="700">
                            <img src="{{ asset('images/ppabout2.png') }}" alt="About Image">
                        </div>
                        <!--====== Edufit Image =====-->

                        <!--====== Iconic Box =====-->
                        {{-- <div class="ef-iconic-box style-one" data-aos="fade-right" data-aos-delay="10"
                            data-aos-duration="700">
                            <div class="icon">
                                <i class="flaticon-reading-book"></i>
                            </div>
                            <div class="content">
                                <h5>2.5K</h5>
                                <p>Positive Review</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6">
                    <!--====== Section Content Box =====-->
                    <div class="edufit-content-box style-one mb-50">
                        <!--====== Section Title =====-->
                        <div class="section-title style-one mb-30" data-aos="fade-up" data-aos-delay="10"
                            data-aos-duration="800">
                            <span class="sub-heading"><i class="flaticon-mortarboard-1"></i>About
                                Stepuptraining.id</span>
                            <h2>Empowering People <span>to Step Up</span> and Lead</h2>
                        </div>
                        <p data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">StepUp Training provides
                            practical and engaging training programs designed to strengthen leadership, communication,
                            teamwork, and professional skills. We help individuals and organizations unlock their
                            potential, improve performance, and create sustainable growth.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <!--====== Iconic Box =====-->
                                <div class="ef-iconic-box style-two mb-40" data-aos="fade-up" data-aos-delay="30"
                                    data-aos-duration="1200">
                                    <div class="icon">
                                        <i class="flaticon-virtual-event"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Interactive Training</h5>
                                        <p>Practical learning sessions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!--====== Iconic Box =====-->
                                <div class="ef-iconic-box style-two mb-40" data-aos="fade-up" data-aos-delay="40"
                                    data-aos-duration="1400">
                                    <div class="icon">
                                        <i class="flaticon-learning-support"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Professional Programs</h5>
                                        <p>Comprehensive programs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== About Button Box =====-->
                        <div class="about-button-box d-flex align-items-center" data-aos="fade-up"
                            data-aos-delay="50" data-aos-duration="1600">
                            <div class="about-button">
                                <a href="#" class="theme-btn style-one">Get
                                    Started Now</a>
                            </div>
                            {{-- <div class="author-box style-one">
                                <div class="author-thumb">
                                    <img src="{{ asset('template/home') }}/assets/images/about/author1.jpg"
                                        alt="Author Image">
                                </div>
                                <div class="author-info">
                                    <h5>David Liam</h5>
                                    <span class="position">CEO & Founder</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End About Section ======-->
    <!--====== Start Category Section ======-->
    <section id="client" class="ef-category-sec gray-bg pt-120 pb-90 adjust-margin2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=== Section Title ===-->
                    <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                        data-aos-duration="800">
                        <span class="sub-heading"></span>
                        <h2>Our Clients

                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <!--=== Category Item ===-->
                    <a href="{{ asset('template') }}/pages/course-grid.html"
                        class="ef-category-item style-one bg_one mb-30" data-aos="fade-up" data-aos-delay="15"
                        data-aos-duration="900">
                        <div class="client-icon">
                            <img src="{{ asset('/storage/clients/arunika_edit.png') }}">
                        </div>
                        <div class="content">
                            <h5>PT.Arunika Digital Nusantara</h5>
                            <span>Teknologi Digital</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <!--=== Category Item ===-->
                    <a href="{{ asset('template') }}/pages/course-grid.html"
                        class="ef-category-item style-one bg_two mb-30" data-aos="fade-up" data-aos-delay="20"
                        data-aos-duration="1000">
                        <div class="client-icon">
                            <img src="{{ asset('/storage/clients/cpi_edit.png') }}">
                        </div>
                        <div class="content">
                            <h5>PT. Cakrawala Prima Industri</h5>
                            <span>Manufaktur</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <!--=== Category Item ===-->
                    <a href="#" class="ef-category-item style-one bg_three mb-30" data-aos="fade-up"
                        data-aos-delay="25" data-aos-duration="1100">
                        <div class="client-icon">
                            <img src="{{ asset('/storage/clients/skm_edit.png') }}">
                        </div>
                        <div class="content">
                            <h5>PT. Sinergi Karya Mandiri</h5>
                            <span>Konsultasi Bisnis</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <!--=== Category Item ===-->
                    <a href="#" class="ef-category-item style-one bg_four mb-30" data-aos="fade-up"
                        data-aos-delay="30" data-aos-duration="1200">
                        <div class="client-icon">
                            <img src="{{ asset('/storage/clients/lfi_edit.png') }}">
                        </div>
                        <div class="content">
                            <h5>PT. Lentera Finansial</h5>
                            <span>Keuangan,Investasi</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <!--=== Category Item ===-->
                    <a href="#" class="ef-category-item style-one bg_five mb-30" data-aos="fade-up"
                        data-aos-delay="35" data-aos-duration="1300">
                        <div class="client-icon">
                            <img src="{{ asset('/storage/clients/nlu_edit.png') }}">
                        </div>
                        <div class="content">
                            <h5>PT. Nusa Logistik Utama</h5>
                            <span>Logistik & Distribusi</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <!--=== Category Item ===-->
                    <a href="#" class="ef-category-item style-one bg_six mb-30" data-aos="fade-up"
                        data-aos-delay="40" data-aos-duration="1400">
                        <div class="client-icon">
                            <img src="{{ asset('/storage/clients/vistara.png') }}">
                        </div>
                        <div class="content">
                            <h5>PT. Vista Properti Sejahtera</h5>
                            <span>Properti, Konstruksi</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <!--=== Category Item ===-->
                    <a href="#" class="ef-category-item style-one bg_seven mb-30" data-aos="fade-up"
                        data-aos-delay="45" data-aos-duration="1500">
                        <div class="client-icon">
                            <img src="{{ asset('/storage/clients/bps_edit.png') }}">
                        </div>
                        <div class="content">
                            <h5>PT. Bumi Pangan Sentosa</h5>
                            <span>Pangan & Agribisnis</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="1600">
                    <!--=== Category Item ===-->
                    <a href="#" class="ef-category-item style-one bg_eight mb-30">
                        <div class="client-icon">
                            <img src="{{ asset('/storage/clients/eli_edit.png') }}">
                        </div>
                        <div class="content">
                            <h5>PT. Elevasi Talenta</h5>
                            <span>SDM Recruitment</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section><!--====== End Category Section ======-->
    <!--====== Start Courses Section ======-->
    <section id="training" class="ef-courses-sec pt-120 pb-130 adjust-margin3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=== Section Title ===-->
                    <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                        data-aos-duration="800">
                        <h2>Jadwal Training Terdekat</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $a = ['1', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'];
                @endphp

                @foreach ($a as $i)
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <!-- Course Item -->
                        <div class="ef-course-grid-item style-one training-card mb-30" data-aos="fade-up"
                            data-aos-delay="150" data-aos-duration="900">

                            <div class="course-thumbnail">
                                <a href="#">
                                    <img src="{{ asset('storage/trainings/training_image.png') }}"
                                        alt="Leadership Training" class="img-fluid">
                                </a>


                            </div>

                            <div class="course-info">
                                <h3 class="title">
                                    <a href="#">
                                        Leadership Excellence Training
                                    </a>
                                </h3>

                                <div class="course-meta">
                                    <div class="course-meta-item">
                                        <div class="meta-icon">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>

                                        <div class="meta-content">

                                            <span class="meta-value">20–21 Agustus 2026</span>
                                        </div>
                                    </div>

                                    <div class="course-meta-item">
                                        <div class="meta-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>

                                        <div class="meta-content">

                                            <span class="meta-value">Jakarta Convention Center </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="course-footer">
                                    <a href="{{ url('/training/slug') }}" class="theme-btn style-one order-training-btn">
                                        <i class="fas fa-shopping-cart"></i>
                                        Order
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--===  Course Button  ===-->
                    <div class="course-button text-center" data-aos="fade-up" data-aos-delay="45"
                        data-aos-duration="1500">
                        <a href="#"
                            class="theme-btn style-one">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Courses Section ======-->





    <!--====== Start In-House Training Section ======-->
    <section id="inhouse" class="ef-blog-sec gray-bg pt-120 pb-90 adjust-margin2">
        <div class="container">

            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                        data-aos-duration="800">

                        <span class="sub-heading">

                        </span>

                        <h2>
                            Inhouse Training Solutions

                        </h2>

                        <p class="mt-3">
                            Program pelatihan yang dirancang khusus berdasarkan
                            kebutuhan, tantangan, dan tujuan organisasi Anda.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Leadership Training -->
                <div class="col-xl-4 col-md-6">
                    <div class="ef-blog-grid-item style-one inhouse-card mb-40" data-aos="fade-up"
                        data-aos-delay="15" data-aos-duration="900">

                        <div class="post-thumbnail">
                            <img src="{{ asset('storage/trainings/training_image.png') }}"
                                alt="Leadership Development Training">
                        </div>

                        <div class="post-content">
                            <div class="post-meta">
                                <span>
                                    <a href="#">Leadership</a>
                                </span>

                                <span>
                                    <i class="far fa-clock"></i>
                                    1–2 Hari
                                </span>
                            </div>

                            <h4 class="title">
                                <a href="#">
                                    Leadership Development Program
                                </a>
                            </h4>

                            <p class="training-description">
                                Meningkatkan kemampuan memimpin, mengambil keputusan,
                                membangun kepercayaan, dan mengelola kinerja tim.
                            </p>

                            <div class="training-info">
                                <span>
                                    <i class="far fa-users"></i>
                                    Minimal 10 Peserta
                                </span>

                                <span>
                                    <i class="far fa-map-marker-alt"></i>
                                    Lokasi Perusahaan
                                </span>
                            </div>

                            <div class="inhouse-footer">
                                <a href="#" class="theme-btn style-one inhouse-btn">
                                    Konsultasikan Program
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Building -->
                <div class="col-xl-4 col-md-6">
                    <div class="ef-blog-grid-item style-one inhouse-card mb-40" data-aos="fade-up"
                        data-aos-delay="20" data-aos-duration="1000">

                        <div class="post-thumbnail">
                            <img src="{{ asset('storage/trainings/training_image.png') }}"
                                alt="Team Building Training">
                        </div>

                        <div class="post-content">
                            <div class="post-meta">
                                <span>
                                    <a href="#">Teamwork</a>
                                </span>

                                <span>
                                    <i class="far fa-clock"></i>
                                    1 Hari
                                </span>
                            </div>

                            <h4 class="title">
                                <a href="#">
                                    Team Building & Collaboration
                                </a>
                            </h4>

                            <p class="training-description">
                                Membangun kerja sama, kepercayaan, komunikasi, dan
                                sinergi untuk menciptakan tim yang lebih produktif.
                            </p>

                            <div class="training-info">
                                <span>
                                    <i class="far fa-users"></i>
                                    Minimal 15 Peserta
                                </span>

                                <span>
                                    <i class="far fa-map-marker-alt"></i>
                                    Indoor atau Outdoor
                                </span>
                            </div>

                            <div class="inhouse-footer">
                                <a href="#" class="theme-btn style-one inhouse-btn">
                                    Konsultasikan Program
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Communication Training -->
                <div class="col-xl-4 col-md-6">
                    <div class="ef-blog-grid-item style-one inhouse-card mb-40" data-aos="fade-up"
                        data-aos-delay="25" data-aos-duration="1100">

                        <div class="post-thumbnail">
                            <img src="{{ asset('storage/trainings/training_image.png') }}"
                                alt="Communication Training">
                        </div>

                        <div class="post-content">
                            <div class="post-meta">
                                <span>
                                    <a href="#">Communication</a>
                                </span>

                                <span>
                                    <i class="far fa-clock"></i>
                                    1–2 Hari
                                </span>
                            </div>

                            <h4 class="title">
                                <a href="#">
                                    Effective Communication Training
                                </a>
                            </h4>

                            <p class="training-description">
                                Mengembangkan kemampuan komunikasi profesional,
                                presentasi, pelayanan, dan penyelesaian konflik.
                            </p>

                            <div class="training-info">
                                <span>
                                    <i class="far fa-users"></i>
                                    Minimal 10 Peserta
                                </span>

                                <span>
                                    <i class="far fa-map-marker-alt"></i>
                                    Lokasi Fleksibel
                                </span>
                            </div>

                            <div class="inhouse-footer">
                                <a href="#" class="theme-btn style-one inhouse-btn">
                                    Konsultasikan Program
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom CTA -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="inhouse-bottom-cta text-center" data-aos="fade-up" data-aos-duration="900">

                        <p>
                            Belum menemukan program yang sesuai?
                            Kami dapat merancang materi khusus untuk organisasi Anda.
                        </p>

                        <a href="#" class="theme-btn style-one">
                            Request Custom Training
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--======  Start Contact Section  ======-->
    <section id="contact" class="contact-section pt-130 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <!--=== Edufit Content Box ===-->
                    <div class="edufit-content-box mb-20">
                        <!--=== Section Title ===-->
                        <div class="section-title style-two mb-20" data-aos="fade-up" data-aos-delay="10"
                            data-aos-duration="800">
                            <span class="sub-heading"><i class="flaticon-mortarboard-1"></i>Contact Us</span>
                            <h2>Let us Discuss
                                Your <span>Training Needs</span></h2>
                        </div>
                        <p data-aos="fade-up" data-aos-delay="15" data-aos-duration="900">Konsultasikan kebutuhan
                            pelatihan individu maupun organisasi Anda bersama
                            StepUp Training. Tim kami siap membantu merancang program yang sesuai dengan
                            tujuan dan kebutuhan Anda.</p>
                        <div class="row">
                            <div class="col-xl-12 col-lg-4">
                                <!--=== Iconic Info Box ===-->
                                <div class="ef-iconic-info-box style-two mb-30" data-aos="fade-up"
                                    data-aos-delay="20" data-aos-duration="1000">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <i class="flaticon-pin-map"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Office Address</h4>
                                        <p>Blitar, No. 145</p>
                                        <p>Jawa Timur, 20366</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-4">
                                <!--=== Iconic Info Box ===-->
                                <div class="ef-iconic-info-box style-two mb-30" data-aos="fade-up"
                                    data-aos-delay="25" data-aos-duration="1200">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Email Address</h4>
                                        <p><a href="mailto:support@stepuptraining.id">support@stepuptraining.id</a></p>
                                        <p><a href="mailto:info@edufit.com">info@stepuptraining.id</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-4">
                                <!--=== Iconic Info Box ===-->
                                <div class="ef-iconic-info-box style-two mb-30" data-aos="fade-up"
                                    data-aos-delay="30" data-aos-duration="1400">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Phone Number</h4>
                                        <p><a href="tel:+911-800-222-1222">+62-813-1222-1222</a></p>
                                        <p><a href="tel:+911-888-280-4331">+62-821-3280-4331</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <!--=== Contact Wrapper ===-->
                    <div class="contact-wrapper mb-60" data-aos="fade-up" data-aos-duration="1200">
                        <h2>Send us a message</h2>
                        <p>Contact us for personalized assistance and quick support anytime.</p>
                        <div style="margin-top:20px"></div>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name<span>*</span></label>
                                        <input type="text" class="form_control custom-control"
                                            placeholder="Enter your name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Email<span>*</span></label>
                                        <input type="email" class="form_control custom-control"
                                            placeholder="Enter your email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Phone<span>*</span></label>
                                        <input type="text" class="form_control custom-control"
                                            placeholder="Enter your phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Subject<span>*</span></label>
                                        <input type="text" class="form_control custom-control"
                                            placeholder="Enter your subject" name="subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Message<span>*</span></label>
                                        <textarea rows="4" class="form_control custom-control" placeholder="Write your message" name="message"
                                            id=""></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button class="theme-btn style-one">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--======  End Contact Section  ======-->
    <!--====== End In-House Training Section ======-->
    <!--====== Start Footer Area  ======-->

    @endsection