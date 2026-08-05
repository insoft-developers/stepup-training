 @extends('master')
 @section('content')
     <section class="ef-hero-sec adjust-margin4">
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
                 <div class="col-lg-11">
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


     <section id="problem" class="ef-course-details-sec pt-50 pb-100">
         <div class="container">
             <div class="row">
                 <div class="col-lg-11">
                     <!--=== Section Title ===-->
                     <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <span class="sub-heading"></span>
                         <h2>Menjawab Masalah Apa?

                         </h2>
                     </div>
                     <div class="edufit-content-box">
                         <p>Include a concise marketing strategy, key financial projections, and a basic outline of
                             operational needs. Keep it simple, focused, and easy to read, allowing you to present your
                             business idea effectively while leaving room for future adjustments as your company grows.</p>
                         <p>Writing the ultimate 1-page business plan for your upcoming company is about focusing on the
                             essentials. Start with a clear vision and mission statement that outlines your purpose and
                             goals. Identify your target market, and briefly describe the products or services you will
                             offer. Highlight your unique value proposition—what sets you apart from competitors.</p>
                         <h4>What You’ll Learn From This Course</h4>
                         <ul class="check-list style-two">
                             <li><i class="flaticon-check-2"></i>Master the basic principles and terminology of the
                                 subject.</li>
                             <li><i class="flaticon-check-2"></i>Learn how to present and apply your knowledge in
                                 professional settings</li>
                             <li><i class="flaticon-check-2"></i>Explore more complex topics and deepen your expertise as
                                 you progress.</li>
                             <li><i class="flaticon-check-2"></i>Develop critical thinking and troubleshooting skills for
                                 real-world scenarios.</li>
                             <li><i class="flaticon-check-2"></i>Gain hands-on experience with tools, techniques, and
                                 real-world applications.</li>
                         </ul>

                         <br>
                         <p>Boost your career with Edufit’s globally recognized certifications. Gain practical skills in web
                             development, digital marketing, UI/UX design, and more through flexible, self-paced learning.
                             Complete courses, earn your certificate, and showcase your expertise to stand out in today’s
                             competitive market. Start your journey with Edufit today!</p>
                     </div>
                 </div>
             </div>

         </div>
     </section><!--====== End Category Section ======-->

     <section id="manfaat" class="ef-course-details-sec pt-50 pb-100 gray-bg">
         <div class="container">
             <div class="row">
                 <div class="col-lg-11">
                     <!--=== Section Title ===-->
                     <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <span class="sub-heading"></span>
                         <h2>Manfaat Yang Anda Peroleh?

                         </h2>
                     </div>
                     <div class="edufit-content-box">
                         <h4>What You’ll Learn From This Course</h4>
                         <ul class="check-list">
                             <li><i class="flaticon-check-2"></i>Master the basic principles and terminology of the
                                 subject.</li>
                             <li><i class="flaticon-check-2"></i>Learn how to present and apply your knowledge in
                                 professional settings</li>
                             <li><i class="flaticon-check-2"></i>Explore more complex topics and deepen your expertise as
                                 you progress.</li>
                             <li><i class="flaticon-check-2"></i>Develop critical thinking and troubleshooting skills for
                                 real-world scenarios.</li>
                             <li><i class="flaticon-check-2"></i>Gain hands-on experience with tools, techniques, and
                                 real-world applications.</li>
                         </ul>

                         <br>
                         <p>Boost your career with Edufit’s globally recognized certifications. Gain practical skills in web
                             development, digital marketing, UI/UX design, and more through flexible, self-paced learning.
                             Complete courses, earn your certificate, and showcase your expertise to stand out in today’s
                             competitive market. Start your journey with Edufit today!</p>
                     </div>
                 </div>
             </div>

         </div>
     </section><!--====== End Category Section ======-->

     <!--====== Start Why Choose Section ======-->
     <section class="ef-why-choose-sec pt-100 pb-100 dark-custom-color">
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
                 <div class="col-lg-11">
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

     <section class="ef-faq-sec pt-90 pb-100">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <!--==== Section Title ====-->
                     <div class="section-title style-two text-center mb-50" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">

                         <h2>Apa Yang Anda Akan Pelajari</h2>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-xl-11">
                     <!--====== Accordion  ======-->
                     <div class="accordion" id="accordionOne" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <!--====== Accordion Item  ======-->
                         <div class="ef-accordion-item mb-15">
                             <div class="accordion-header">
                                 <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse1"
                                     aria-expanded="true">
                                     Kualifikasi Prospek
                                 </h6>
                             </div>
                             <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
                                 <div class="accordion-content">
                                     <p>We offer a diverse selection of languages, including Spanish, French, German,
                                         Mandarin, Japanese, Italian, Arabic, Portuguese, Russian, and English. Our courses
                                         cater to all levels, from beginners to advanced learners.</p>
                                 </div>
                             </div>
                         </div>
                         <!--====== Accordion Item  ======-->
                         <div class="ef-accordion-item mb-15">
                             <div class="accordion-header">
                                 <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse2"
                                     aria-expanded="false">
                                     Membangun Hubungan
                                 </h6>
                             </div>
                             <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                 <div class="accordion-content">
                                     <p>We offer a diverse selection of languages, including Spanish, French, German,
                                         Mandarin, Japanese, Italian, Arabic, Portuguese, Russian, and English. Our courses
                                         cater to all levels, from beginners to advanced learners.</p>
                                 </div>
                             </div>
                         </div>
                         <!--====== Accordion Item  ======-->
                         <div class="ef-accordion-item mb-15">
                             <div class="accordion-header">
                                 <h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse3"
                                     aria-expanded="false">
                                     Konversi Penjualan
                                 </h6>
                             </div>
                             <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                 <div class="accordion-content">
                                     <p>We offer a diverse selection of languages, including Spanish, French, German,
                                         Mandarin, Japanese, Italian, Arabic, Portuguese, Russian, and English. Our courses
                                         cater to all levels, from beginners to advanced learners.</p>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>

             </div>
         </div>
     </section><!--======  End Faq Section  ======-->

     <section id="outline" class="ef-course-details-sec pt-50 pb-100 gray-bg">
         <div class="container">
             <div class="row">
                 <div class="col-lg-11">
                     <!--=== Section Title ===-->
                     <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <span class="sub-heading"></span>
                         <h2>Outline

                         </h2>
                     </div>
                     <div class="edufit-content-box">
                         <h3>Hari Pertama - Fundamental Penjualan</h3>


                         <br>
                         <p>Boost your career with Edufit’s globally recognized certifications. Gain practical skills in web
                             development, digital marketing, UI/UX design, and more through flexible, self-paced learning.
                             Complete courses, earn your certificate, and showcase your expertise to stand out in today’s
                             competitive market. Start your journey with Edufit today!</p>


                         <h3>Hari Kedua - Kualifikasi dan Menggali Kebutuhan</h3>


                         <br>
                         <p>Boost your career with Edufit’s globally recognized certifications. Gain practical skills in web
                             development, digital marketing, UI/UX design, and more through flexible, self-paced learning.
                             Complete courses, earn your certificate, and showcase your expertise to stand out in today’s
                             competitive market. Start your journey with Edufit today!</p>

                         <h3>Hari Ketiga - Penutupan & Pertumbuhan Diri</h3>


                         <br>
                         <p>Boost your career with Edufit’s globally recognized certifications. Gain practical skills in web
                             development, digital marketing, UI/UX design, and more through flexible, self-paced learning.
                             Complete courses, earn your certificate, and showcase your expertise to stand out in today’s
                             competitive market. Start your journey with Edufit today!</p>
                     </div>
                 </div>
             </div>

         </div>
     </section><!--====== End Category Section ======-->

     <section class="ef-why-choose-sec pt-100 pb-100 dark-custom-color">
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
     <section class="ef-testimonial-sec pt-100 pb-100">
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


     <section class="ef-pricing-sec pt-100 pb-100 gray-bg">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <!--====  Section Title  ===-->
                     <div class="section-title text-center mb-55" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <span class="sub-heading">
                             <h2>Biaya Investasi</h2>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-xl-4 col-md-6 col-sm-12">
                     <!--====  Pricing Item  ===-->
                     <div class="ef-pricing-item style-one mb-30" data-aos="fade-up" data-aos-delay="15"
                         data-aos-duration="900">
                         <div class="pricing-top">
                             <div class="pce-title">
                                 <h4>Min5</h4>
                             </div>

                         </div>
                         <div class="pricing-body">

                             <ul class="check-list style-one">
                                 <li class="check"><i class="flaticon-check-2"></i>Min 5 Orang Early Bird <br>Rp.
                                     4.995.000</li>
                                 <li class="check"><i class="flaticon-check-2"></i>Min 5 Orang Reguler <br>Rp. 6.995.000
                                 </li>

                             </ul>
                         </div>
                         <div class="pricing-footer">
                             <a href="pricing.html" class="theme-btn style-one">Order</a>

                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-md-6 col-sm-12">
                     <!--====  Pricing Item  ===-->
                     <div class="ef-pricing-item style-one mb-30" data-aos="fade-up" data-aos-delay="15"
                         data-aos-duration="900">
                         <div class="pricing-top">
                             <div class="pce-title">
                                 <h4>Individual</h4>
                             </div>

                         </div>
                         <div class="pricing-body">

                             <ul class="check-list style-one">
                                 <li class="check"><i class="flaticon-check-2"></i>Individu Early Bird <br>Rp. 4.995.000
                                 </li>
                                 <li class="check"><i class="flaticon-check-2"></i>Individu Reguler <br>Rp. 6.995.000
                                 </li>

                             </ul>
                         </div>
                         <div class="pricing-footer">
                             <a href="pricing.html" class="theme-btn style-one">Order</a>

                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-md-6 col-sm-12">
                     <!--====  Pricing Item  ===-->
                     <div class="ef-pricing-item style-one mb-30" data-aos="fade-up" data-aos-delay="15"
                         data-aos-duration="900">
                         <div class="pricing-top">
                             <div class="pce-title">
                                 <h4>Reseat</h4>
                             </div>

                         </div>
                         <div class="pricing-body">

                             <ul class="check-list style-one">
                                 <li class="check"><i class="flaticon-check-2"></i>Min 5 Orang Early Bird <br>Rp.
                                     4.995.000</li>
                                 <li class="check"><i class="flaticon-check-2"></i>Min 5 Orang Reguler <br>Rp. 6.995.000
                                 </li>

                             </ul>
                         </div>
                         <div class="pricing-footer">
                             <a href="pricing.html" class="theme-btn style-one">Order</a>

                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </section><!--======  End Pricing Section  ======-->

     <section id="client" class="ef-category-sec pt-50 pb-100 ">
         <div class="container">
             <div class="row">
                 <div class="col-lg-11">
                     <!--=== Section Title ===-->
                     <div class="section-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="10"
                         data-aos-duration="800">
                         <span class="sub-heading"></span>
                         <h2>Facility (Include)

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

                         <div class="content">
                             <h4>Program Tatap Muka</h4> <i style="font-size: 20px;" class="fa fa-handshake"></i>

                         </div>
                     </a>
                 </div>
                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                     <!--=== Category Item ===-->
                     <a href="{{ asset('template') }}/pages/course-grid.html"
                         class="ef-category-item style-one bg_one mb-30" data-aos="fade-up" data-aos-delay="15"
                         data-aos-duration="900">

                         <div class="content">
                             <h4>Seminar Kit</h4> <i style="font-size: 20px;" class="fa fa-poll-people"></i>

                         </div>
                     </a>
                 </div>

                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                     <!--=== Category Item ===-->
                     <a href="{{ asset('template') }}/pages/course-grid.html"
                         class="ef-category-item style-one bg_one mb-30" data-aos="fade-up" data-aos-delay="15"
                         data-aos-duration="900">

                         <div class="content">
                             <h4>Sertifikat</h4>
                             <i style="font-size: 20px;" class="fa fa-file-certificate"></i>

                         </div>
                     </a>
                 </div>

                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                     <!--=== Category Item ===-->
                     <a href="{{ asset('template') }}/pages/course-grid.html"
                         class="ef-category-item style-one bg_one mb-30" data-aos="fade-up" data-aos-delay="15"
                         data-aos-duration="900">

                         <div class="content">
                             <h4>2x Coffe Break</h4><i style="font-size: 20px;" class="fa fa-coffee"></i>

                         </div>
                     </a>
                 </div>

                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                     <!--=== Category Item ===-->
                     <a href="{{ asset('template') }}/pages/course-grid.html"
                         class="ef-category-item style-one bg_one mb-30" data-aos="fade-up" data-aos-delay="15"
                         data-aos-duration="900">

                         <div class="content">
                             <h4>Makan Siang</h4><i style="font-size: 20px;" class="fa fa-knife-kitchen"></i>

                         </div>
                     </a>
                 </div>
                 <div class="col-lg-12">
                     <div class="form-group">
                         <center><button class="theme-btn style-one">Order Now</button></center>
                     </div>
                 </div>

             </div>
         </div>
     </section><!--====== End Category Section ======-->
 @endsection
