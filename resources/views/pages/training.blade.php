 @extends('master')
 @section('content')
     <section class="ef-hero-sec pt-10 pb-0">
         <div class="hero-wrapper bg_cover overflow-hidden"
             style="background-image: url({{ asset('template/home') }}/assets/images/hero/hero_bg1.jpg);">
             <div class="elements element_one"><span><img src="{{ asset('template/home') }}/assets/images/hero/shape1.png"
                         alt=""></span></div>
             <div class="elements element_two"><span><img src="{{ asset('template/home') }}/assets/images/hero/shape2.png"
                         alt=""></span></div>
             <div class="elements element_three"><span><img src="{{ asset('template/home') }}/assets/images/hero/shape6.png"
                         alt=""></span></div>
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
                             <span class="sub-heading" data-aos="fade-up" data-aos-duration="800">
                                 Management Development Program
                             </span>

                             <h1 data-aos="fade-up" data-aos-delay="10" data-aos-duration="1000">
                                 How To Be The
                                 <span class="c1">World Class</span>
                                 Manager.
                             </h1>

                             <!-- Training Information -->
                             <div class="hero-training-info" data-aos="fade-up" data-aos-delay="15"
                                 data-aos-duration="1100">

                                 <div class="training-info-item">
                                     <div class="training-info-icon">
                                         <i class="far fa-calendar-alt"></i>
                                     </div>

                                     <div class="training-info-content">
                                         <span class="training-info-label">Date</span>
                                         <strong>20–21 Agustus 2026</strong>
                                     </div>
                                 </div>

                                 <div class="training-info-item">
                                     <div class="training-info-icon">
                                         <i class="fas fa-map-marker-alt"></i>
                                     </div>

                                     <div class="training-info-content">
                                         <span class="training-info-label">Location</span>
                                         <strong>Jakarta Convention Center</strong>
                                     </div>
                                 </div>
                             </div>

                             <p data-aos="fade-up" data-aos-delay="20" data-aos-duration="1200">
                                 Belajar bagaimana berlatih keterampilan manajerial yang tepat dan benar (deliberate
                                 practise), sehingga bisa menjadi manajer profesional yang memiliki kualifikasi manajer
                                 kelas dunia.
                             </p>

                             <div class="hero-subscribe" data-aos="fade-up" data-aos-delay="30" data-aos-duration="1400">

                                 <div class="form-group">
                                     <a href="#registration" class="theme-btn style-one">
                                         Order Now
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-5">
                         <!--===  Hero Image Box  ===-->
                         <div class="hero-image-box">


                             <!--===  Hero Image  ===-->
                             <img src="{{ asset('images/header_pp.png') }}" data-aos="fade-up" data-aos-delay="10"
                                 data-aos-duration="700" alt="Shape">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--======  Start Course Details Page  ======-->
     <!--====== Start Category Section ======-->
     <section id="client" class="ef-category-sec gray-bg pt-50 pb-100 ">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <!--=== Section Title ===-->
                     <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <span class="sub-heading"></span>
                         <h2>Meet Our Clients

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


     <section id="problem" class="pt-100 pb-100">

         <div class="container">

             <div class="row justify-content-center mb-5">
                 <div class="col-lg-8 text-center">
                     <span class="text-primary fw-bold">WHY THIS TRAINING?</span>
                     <h2>Masalah yang Sering Dihadapi</h2>
                     <p class="text-muted">
                         Banyak tenaga penjualan memiliki produk yang bagus,
                         namun kesulitan menghasilkan penjualan yang konsisten.
                     </p>
                 </div>
             </div>

             <div class="row g-4">

                 <div class="col-lg-4">
                     <div class="problem-card">
                         <div class="icon">
                             <i class="fa fa-times-circle"></i>
                         </div>

                         <h5>Sulit Closing</h5>

                         <p>
                             Presentasi sudah dilakukan tetapi pelanggan
                             belum mengambil keputusan.
                         </p>
                     </div>
                 </div>

                 <div class="col-lg-4">
                     <div class="problem-card">
                         <div class="icon">
                             <i class="fa fa-comments"></i>
                         </div>

                         <h5>Komunikasi Kurang Efektif</h5>

                         <p>
                             Sulit menggali kebutuhan sehingga solusi
                             yang ditawarkan kurang tepat.
                         </p>
                     </div>
                 </div>

                 <div class="col-lg-4">
                     <div class="problem-card">
                         <div class="icon">
                             <i class="fa fa-chart-line"></i>
                         </div>

                         <h5>Target Tidak Tercapai</h5>

                         <p>
                             Penjualan stagnan dan performa tim belum
                             sesuai harapan perusahaan.
                         </p>
                     </div>
                 </div>

             </div>

         </div>

     </section>

     <section id="manfaat" class="pt-100 pb-100 bg-light">

         <div class="container">

             <div class="row justify-content-center mb-5">

                 <div class="col-lg-8 text-center">

                     <span class="text-primary fw-bold">
                         BENEFIT
                     </span>

                     <h2>
                         Manfaat Yang Akan Anda Peroleh
                     </h2>

                     <p class="text-muted">
                         Setelah mengikuti pelatihan, peserta akan memiliki
                         kemampuan yang dapat langsung diterapkan.
                     </p>

                 </div>

             </div>

             <div class="row g-4">

                 <div class="col-lg-6">

                     <div class="benefit-item">

                         <i class="fa fa-check-circle"></i>

                         <div>

                             <h5>Teknik Closing yang Efektif</h5>

                             <p>
                                 Meningkatkan peluang closing melalui pendekatan yang tepat.
                             </p>

                         </div>

                     </div>

                 </div>

                 <div class="col-lg-6">

                     <div class="benefit-item">

                         <i class="fa fa-check-circle"></i>

                         <div>

                             <h5>Komunikasi Lebih Percaya Diri</h5>

                             <p>
                                 Mampu membangun hubungan dengan calon pelanggan.
                             </p>

                         </div>

                     </div>

                 </div>

                 <div class="col-lg-6">

                     <div class="benefit-item">

                         <i class="fa fa-check-circle"></i>

                         <div>

                             <h5>Meningkatkan Produktivitas Sales</h5>

                             <p>
                                 Memiliki proses penjualan yang lebih terstruktur.
                             </p>

                         </div>

                     </div>

                 </div>

                 <div class="col-lg-6">

                     <div class="benefit-item">

                         <i class="fa fa-check-circle"></i>

                         <div>

                             <h5>Siap Diterapkan di Lapangan</h5>

                             <p>
                                 Materi berbasis studi kasus sehingga mudah dipraktikkan.
                             </p>

                         </div>

                     </div>

                 </div>

             </div>

         </div>

     </section>

     <!--====== Start Why Choose Section ======-->
     <section id="kenapa" class="ef-why-choose-sec pt-100 pb-100 dark-custom-color">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <!--===  Section Title  ===-->
                     <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <h2>Mengapa How To Be World Class Manager</h2>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="edufit-content-box">
                         <h3>Tentang World Class Manager</h3>
                         <br>
                         <p>Boost your career with Edufit’s globally recognized certifications. Gain practical skills in web
                             development, digital marketing, UI/UX design, and more through flexible, self-paced learning.
                             Complete courses, earn your certificate, and showcase your expertise to stand out in today’s
                             competitive market. Start your journey with Edufit today!</p>


                         <h3>Metodologi Pengajaran</h3>
                         <br>
                         <p>Boost your career with Edufit’s globally recognized certifications. Gain practical skills in web
                             development, digital marketing, UI/UX design, and more through flexible, self-paced learning.
                             Complete courses, earn your certificate, and showcase your expertise to stand out in today’s
                             competitive market. Start your journey with Edufit today!</p>
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center">
                 <div class="col-xl-3 col-md-6 col-sm-12">
                     <!--===  Iconic Box  ===-->


                     <div class="ef-iconic-box style-three mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <div class="shape line_one"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line2.png"
                                     alt="line"></span></div>
                         <div class="shape line_two"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line3.png"
                                     alt="line"></span></div>
                         <div class="icon">
                             <i class="flaticon-virtual-event"></i>
                         </div>
                         <div class="content">
                             <h5>Lower Learning Cost</h5>
                             <p>Affordable education without compromising on quality.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6 col-sm-12">
                     <!--===  Iconic Box  ===-->
                     <div class="ef-iconic-box style-three mb-40" data-aos="fade-up" data-aos-delay="15"
                         data-aos-duration="900">
                         <div class="shape line_one"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line2.png"
                                     alt="line"></span></div>
                         <div class="shape line_two"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line3.png"
                                     alt="line"></span></div>
                         <div class="icon">
                             <i class="flaticon-virtual-event"></i>
                         </div>
                         <div class="content">
                             <h5>Different Course Variation</h5>
                             <p>Affordable education without compromising on quality.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6 col-sm-12">
                     <!--===  Iconic Box  ===-->
                     <div class="ef-iconic-box style-three mb-40" data-aos="fade-up" data-aos-delay="20"
                         data-aos-duration="1000">
                         <div class="shape line_one"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line2.png"
                                     alt="line"></span></div>
                         <div class="shape line_two"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line3.png"
                                     alt="line"></span></div>
                         <div class="icon">
                             <i class="flaticon-virtual-event"></i>
                         </div>
                         <div class="content">
                             <h5>Trusted By Thousands</h5>
                             <p>Affordable education without compromising on quality.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6 col-sm-12">
                     <!--===  Iconic Box  ===-->
                     <div class="ef-iconic-box style-three mb-40" data-aos="fade-up" data-aos-delay="25"
                         data-aos-duration="1100">
                         <div class="shape line_one"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line2.png"
                                     alt="line"></span></div>
                         <div class="shape line_two"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line3.png"
                                     alt="line"></span></div>
                         <div class="icon">
                             <i class="flaticon-virtual-event"></i>
                         </div>
                         <div class="content">
                             <h5>Suitable Learning</h5>
                             <p>Affordable education without compromising on quality.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section><!--====== End Why Choose Section ======-->

    <section id="belajar-apa" class="pt-100 pb-100 bg-light">

    <div class="container">

        <div class="row justify-content-center mb-5">

            <div class="col-lg-8 text-center">

                <span class="text-primary fw-bold">
                    COURSE CURRICULUM
                </span>

                <h2 class="mt-2">
                    Apa yang Akan Anda Pelajari
                </h2>

                <p class="text-muted">
                    Materi disusun secara sistematis mulai dari membangun mindset,
                    memahami pelanggan, hingga meningkatkan kemampuan closing.
                </p>

            </div>

        </div>

        <div class="accordion modern-accordion" id="courseAccordion">

            <!-- Item -->
            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#item1">

                        <span class="number">01</span>

                        <div>

                            <h5>Kualifikasi Prospek</h5>

                            <small>
                                Menentukan calon pelanggan yang benar-benar potensial.
                            </small>

                        </div>

                    </button>

                </h2>

                <div id="item1"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#courseAccordion">

                    <div class="accordion-body">

                        <ul class="course-list">
                            <li>✔ Menentukan target market</li>
                            <li>✔ Mengenali customer ideal</li>
                            <li>✔ Teknik qualifying prospect</li>
                            <li>✔ Prioritas peluang penjualan</li>
                        </ul>

                    </div>

                </div>

            </div>

            <!-- Item -->
            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#item2">

                        <span class="number">02</span>

                        <div>

                            <h5>Membangun Hubungan</h5>

                            <small>
                                Membangun kepercayaan pelanggan.
                            </small>

                        </div>

                    </button>

                </h2>

                <div id="item2"
                    class="accordion-collapse collapse"
                    data-bs-parent="#courseAccordion">

                    <div class="accordion-body">

                        <ul class="course-list">
                            <li>✔ Teknik komunikasi efektif</li>
                            <li>✔ Active Listening</li>
                            <li>✔ Membangun trust</li>
                            <li>✔ Menangani keberatan</li>
                        </ul>

                    </div>

                </div>

            </div>

            <!-- Item -->
            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#item3">

                        <span class="number">03</span>

                        <div>

                            <h5>Konversi Penjualan</h5>

                            <small>
                                Mengubah prospek menjadi pelanggan.
                            </small>

                        </div>

                    </button>

                </h2>

                <div id="item3"
                    class="accordion-collapse collapse"
                    data-bs-parent="#courseAccordion">

                    <div class="accordion-body">

                        <ul class="course-list">
                            <li>✔ Teknik closing</li>
                            <li>✔ Follow up efektif</li>
                            <li>✔ Upselling & Cross Selling</li>
                            <li>✔ Customer Retention</li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

     <section id="outline" class="pt-100 pb-100 bg-white">
         <div class="container">

             <div class="row justify-content-center mb-5">
                 <div class="col-lg-8 text-center">
                     <span class="text-primary fw-bold">TRAINING OUTLINE</span>
                     <h2>Materi Pelatihan 3 Hari</h2>
                     <p class="text-muted">
                         Kurikulum dirancang secara sistematis agar peserta memahami proses
                         penjualan dari dasar hingga mampu melakukan closing secara efektif.
                     </p>
                 </div>
             </div>

             <div class="timeline">

                 <!-- Hari 1 -->
                 <div class="timeline-item">

                     <div class="timeline-icon">
                         <span>1</span>
                     </div>

                     <div class="timeline-content">

                         <div class="day-badge">
                             Hari Pertama
                         </div>

                         <h4>Fundamental Penjualan</h4>

                         <p>
                             Memahami mindset seorang sales profesional, proses penjualan,
                             komunikasi yang efektif, serta membangun kepercayaan pelanggan.
                         </p>

                     </div>

                 </div>

                 <!-- Hari 2 -->
                 <div class="timeline-item">

                     <div class="timeline-icon">
                         <span>2</span>
                     </div>

                     <div class="timeline-content">

                         <div class="day-badge">
                             Hari Kedua
                         </div>

                         <h4>Kualifikasi & Menggali Kebutuhan</h4>

                         <p>
                             Teknik menggali kebutuhan pelanggan, memahami pain point,
                             melakukan presentasi solusi, dan menangani keberatan pelanggan.
                         </p>

                     </div>

                 </div>

                 <!-- Hari 3 -->
                 <div class="timeline-item">

                     <div class="timeline-icon">
                         <span>3</span>
                     </div>

                     <div class="timeline-content">

                         <div class="day-badge">
                             Hari Ketiga
                         </div>

                         <h4>Closing & Personal Growth</h4>

                         <p>
                             Strategi closing yang elegan, teknik follow-up, membangun
                             hubungan jangka panjang, dan pengembangan mental seorang sales.
                         </p>

                     </div>

                 </div>

             </div>

         </div>
     </section>

     <section id="wajib-ikut" class="ef-why-choose-sec pt-100 pb-100 dark-custom-color">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <!--===  Section Title  ===-->
                     <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <h2>Siapa Saja yang Wajib Ikut</h2>
                     </div>
                 </div>
             </div>

             <div class="row justify-content-center">
                 <div class="col-xl-4 col-md-6 col-sm-12">
                     <!--===  Iconic Box  ===-->


                     <div class="ef-iconic-box style-three mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <div class="shape line_one"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line2.png"
                                     alt="line"></span></div>
                         <div class="shape line_two"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line3.png"
                                     alt="line"></span></div>
                         <div class="icon">
                             <i class="flaticon-avatar"></i>
                         </div>
                         <div class="content">
                             <h5>Direktur</h5>
                             <p>Affordable education without compromising on quality.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-md-6 col-sm-12">
                     <!--===  Iconic Box  ===-->
                     <div class="ef-iconic-box style-three mb-40" data-aos="fade-up" data-aos-delay="15"
                         data-aos-duration="900">
                         <div class="shape line_one"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line2.png"
                                     alt="line"></span></div>
                         <div class="shape line_two"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line3.png"
                                     alt="line"></span></div>
                         <div class="icon">
                             <i class="flaticon-avatar"></i>
                         </div>
                         <div class="content">
                             <h5>Manajer</h5>
                             <p>Affordable education without compromising on quality.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-md-6 col-sm-12">
                     <!--===  Iconic Box  ===-->
                     <div class="ef-iconic-box style-three mb-40" data-aos="fade-up" data-aos-delay="20"
                         data-aos-duration="1000">
                         <div class="shape line_one"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line2.png"
                                     alt="line"></span></div>
                         <div class="shape line_two"><span><img
                                     src="{{ asset('template/home') }}/assets/images/gallery/line3.png"
                                     alt="line"></span></div>
                         <div class="icon">
                             <i class="flaticon-avatar"></i>
                         </div>
                         <div class="content">
                             <h5>Supervisor</h5>
                             <p>Affordable education without compromising on quality.</p>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </section><!--====== End Why Choose Section ======-->

     <!--====== Start Testimonial Section ======-->
     <section id="testimoni" class="ef-testimonial-sec pt-100 pb-100">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <!--===  Section Title  ===-->
                     <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">

                         <h2>Sudah Ribuan Orang Merasakan Manfaatnya<br><span>Kini Giliranmu</span></h2>
                     </div>
                 </div>
             </div>
             <!--===  Testimonial Slider  ===-->
             <div class="testimonial-slider" data-aos="fade-up" data-aos-delay="15" data-aos-duration="1000">
                 <!--===  Testimonial Item  ===-->
                 <div class="ef-testimonial-item style-one">
                     <div class="testimonial-content">
                         <div class="author-box-rating">
                             <div class="author-box style-one">
                                 <div class="author-thumb">
                                     <img src="{{ asset('storage/trainings') }}/author2.jpg" alt="Author Image">
                                 </div>
                                 <div class="author-info">
                                     <h5>David Liam</h5>
                                     <span class="position">CEO & Founder</span>
                                 </div>
                             </div>
                             <div class="rating">
                                 <ul class="ratings">
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                 </ul>
                             </div>
                         </div>

                         <p>We value your input and are committed to continuously improving educational offerings. Please
                             share your thoughts experiences, and suggestions with us. Your feedback helps us enhance our
                             programs and better serve our learning community.</p>
                     </div>
                 </div>
                 <!--===  Testimonial Item  ===-->
                 <div class="ef-testimonial-item style-one">
                     <div class="testimonial-content">
                         <div class="author-box-rating">
                             <div class="author-box style-one">
                                 <div class="author-thumb">
                                     <img src="{{ asset('storage/trainings') }}/author2.jpg" alt="Author Image">
                                 </div>
                                 <div class="author-info">
                                     <h5>David Liam</h5>
                                     <span class="position">CEO & Founder</span>
                                 </div>
                             </div>
                             <div class="rating">
                                 <ul class="ratings">
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                 </ul>
                             </div>
                         </div>

                         <p>We value your input and are committed to continuously improving educational offerings. Please
                             share your thoughts experiences, and suggestions with us. Your feedback helps us enhance our
                             programs and better serve our learning community.</p>
                     </div>
                 </div>
                 <!--===  Testimonial Item  ===-->
                 <div class="ef-testimonial-item style-one">
                     <div class="testimonial-content">
                         <div class="author-box-rating">
                             <div class="author-box style-one">
                                 <div class="author-thumb">
                                     <img src="{{ asset('storage/trainings') }}/author1.jpg" alt="Author Image">
                                 </div>
                                 <div class="author-info">
                                     <h5>David Liam</h5>
                                     <span class="position">CEO & Founder</span>
                                 </div>
                             </div>
                             <div class="rating">
                                 <ul class="ratings">
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                 </ul>
                             </div>
                         </div>

                         <p>We value your input and are committed to continuously improving educational offerings. Please
                             share your thoughts experiences, and suggestions with us. Your feedback helps us enhance our
                             programs and better serve our learning community.</p>
                     </div>
                 </div>
             </div>
         </div>
     </section><!--====== End Testimonial Section ======-->


     <section id="harga" class="pt-100 pb-100 gray-bg">
         <div class="container">

             <div class="row justify-content-center mb-5">
                 <div class="col-lg-8 text-center">
                     <span class="text-primary fw-bold">INVESTASI TRAINING</span>
                     <h2 class="mt-2">Pilih Paket Terbaik Anda</h2>
                     <p class="text-muted">
                         Semua paket sudah termasuk fasilitas training, seminar kit, sertifikat,
                         coffee break, dan makan siang.
                     </p>
                 </div>
             </div>

             <div class="row g-4">

                 <!-- Paket Group -->
                 <div class="col-lg-4">

                     <div class="price-card">

                         <div class="price-header">
                             <h4>👥 Group (Min. 5 Peserta)</h4>
                         </div>

                         <div class="price-item">
                             <span class="badge-price">EARLY BIRD</span>
                             <h2>Rp4.995.000</h2>
                             <p>/orang</p>
                         </div>

                         <hr>

                         <div class="price-item">
                             <span class="badge-price gray">REGULER</span>
                             <h3>Rp6.995.000</h3>
                             <p>/orang</p>
                         </div>

                         <a href="#" class="theme-btn style-one w-100 mt-4">
                             Order Sekarang
                         </a>

                     </div>

                 </div>

                 <!-- Individual -->
                 <div class="col-lg-4">

                     <div class="price-card featured">

                         <div class="recommended">
                             PALING POPULER
                         </div>

                         <div class="price-header">
                             <h4>👤 Individual</h4>
                         </div>

                         <div class="price-item">
                             <span class="badge-price">EARLY BIRD</span>
                             <h2>Rp4.995.000</h2>
                             <p>/peserta</p>
                         </div>

                         <hr>

                         <div class="price-item">
                             <span class="badge-price gray">REGULER</span>
                             <h3>Rp6.995.000</h3>
                             <p>/peserta</p>
                         </div>

                         <a href="#" class="theme-btn style-one w-100 mt-4">
                             Order Sekarang
                         </a>

                     </div>

                 </div>

                 <!-- Reseat -->
                 <div class="col-lg-4">

                     <div class="price-card">

                         <div class="price-header">
                             <h4>🔄 Reseat</h4>
                         </div>

                         <div class="price-item">
                             <span class="badge-price">EARLY BIRD</span>
                             <h2>Rp4.995.000</h2>
                             <p>/peserta</p>
                         </div>

                         <hr>

                         <div class="price-item">
                             <span class="badge-price gray">REGULER</span>
                             <h3>Rp6.995.000</h3>
                             <p>/peserta</p>
                         </div>

                         <a href="#" class="theme-btn style-one w-100 mt-4">
                             Order Sekarang
                         </a>

                     </div>

                 </div>

             </div>

         </div>
     </section>

     <section id="fasilitas" class="pt-70 pb-100 bg-white">
         <div class="container">

             <div class="row justify-content-center">
                 <div class="col-lg-8">
                     <div class="section-title text-center mb-5">
                         <span class="text-primary fw-bold">WHAT YOU GET</span>
                         <h2 class="mt-2">Facilities Included</h2>
                         <p class="text-muted">
                             Every participant will receive the following facilities during the training.
                         </p>
                     </div>
                 </div>
             </div>

             <div class="row g-4 justify-content-center">

                 <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="facility-card">
                         <div class="icon">
                             <i class="fa fa-handshake"></i>
                         </div>
                         <h5>Program Tatap Muka</h5>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="facility-card">
                         <div class="icon">
                             <i class="fa fa-poll-people"></i>
                         </div>
                         <h5>Seminar Kit</h5>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="facility-card">
                         <div class="icon">
                             <i class="fa fa-file-certificate"></i>
                         </div>
                         <h5>Sertifikat</h5>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="facility-card">
                         <div class="icon">
                             <i class="fa fa-coffee"></i>
                         </div>
                         <h5>2x Coffee Break</h5>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="facility-card">
                         <div class="icon">
                             <i class="fa fa-utensils"></i>
                         </div>
                         <h5>Makan Siang</h5>
                     </div>
                 </div>

             </div>

             <div class="text-center mt-5">
                 <a href="#order" class="theme-btn style-one px-5">
                     Order Now
                 </a>
             </div>

         </div>
     </section>
     <div class="right-sidebar">

     </div>
 @endsection
