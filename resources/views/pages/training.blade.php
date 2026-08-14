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
                                 {{ $data->theme ?? '' }}
                             </span>

                             <h1 data-aos="fade-up" data-aos-delay="10" data-aos-duration="1000">
                                 {!! $data->title !!}
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
                                         <strong>


                                             @if ($data->start_at->isSameDay($data->finish_at))
                                                 {{ $data->start_at->translatedFormat('d F Y') }}
                                             @else
                                                 {{ $data->start_at->format('d') }}
                                                 –
                                                 {{ $data->finish_at->translatedFormat('d F Y') }}
                                             @endif
                                         </strong>
                                     </div>
                                 </div>

                                 <div class="training-info-item">
                                     <div class="training-info-icon">
                                         <i class="fas fa-map-marker-alt"></i>
                                     </div>

                                     <div class="training-info-content">
                                         <span class="training-info-label">Location</span>
                                         <strong>{{ $data->location ?? '' }}</strong>
                                     </div>
                                 </div>
                             </div>

                             <p data-aos="fade-up" data-aos-delay="20" data-aos-duration="1200">
                                 {{ $data->paragraph ?? '' }}
                             </p>

                             <div class="hero-subscribe" data-aos="fade-up" data-aos-delay="30" data-aos-duration="1400">

                                 <div class="form-group">
                                     <a href="{{ $info->general_cta_link ?? '#' }}" class="theme-btn style-one">
                                         {{ $info->general_cta_text ?? '' }}
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-5">
                         <!--===  Hero Image Box  ===-->
                         <div class="hero-image-box">


                             <!--===  Hero Image  ===-->
                             <img src="{{ asset('storage') }}/{{ $data->detail_image }}" data-aos="fade-up"
                                 data-aos-delay="10" data-aos-duration="700" alt="Shape">
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
                         <h2>{{ $data->client_header_text ?? '' }}

                         </h2>
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center">


                 @foreach ($data->clients as $client)
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                         <!--=== Category Item ===-->
                         <a href="{{ asset('storage') }}/{{ $client->image }}"
                             class="ef-category-item style-one {{ $client->color }} mb-30" data-aos="fade-up"
                             data-aos-delay="15" data-aos-duration="900">
                             <div class="client-icon">
                                 <img src="{{ asset('storage') }}/{{ $client->image }}">
                             </div>
                             <div class="content">
                                 <h5>{{ $client->name }}</h5>
                                 <span>{{ $client->tagline }}</span>
                             </div>
                         </a>
                     </div>
                 @endforeach


             </div>
         </div>
     </section><!--====== End Category Section ======-->


     <section id="problem" class="pt-100 pb-100">

         <div class="container">

             <div class="row justify-content-center mb-5">
                 <div class="col-lg-8 text-center">
                     <span class="text-primary fw-bold">{{ $data->problem_small_title ?? '' }}</span>
                     <h2>{{ $data->problem_title ?? '' }}</h2>
                     <p class="text-muted">
                         {{ $data->problem_subtitle ?? '' }}
                     </p>
                 </div>
             </div>

             <div class="row g-4">

                 <div class="col-lg-4">
                     <div class="problem-card">
                         <div class="icon">
                             <i class="{{ $data->problem_item_icon_1 }}"></i>
                         </div>

                         <h5>{{ $data->problem_item_title_1 }}</h5>

                         <p>
                             {{ $data->problem_item_text_1 }}
                         </p>
                     </div>
                 </div>

                 <div class="col-lg-4">
                     <div class="problem-card">
                         <div class="icon">
                             <i class="{{ $data->problem_item_icon_2 }}"></i>
                         </div>

                         <h5>{{ $data->problem_item_title_2 }}</h5>

                         <p>
                             {{ $data->problem_item_text_2 }}
                         </p>
                     </div>
                 </div>

                 <div class="col-lg-4">
                     <div class="problem-card">
                         <div class="icon">
                             <i class="{{ $data->problem_item_icon_3 }}"></i>
                         </div>

                         <h5>{{ $data->problem_item_title_3 }}</h5>

                         <p>
                             {{ $data->problem_item_text_3 }}
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
                         {{ $data->benefit_small_title }}
                     </span>

                     <h2>
                         {{ $data->benefit_title }}
                     </h2>

                     <p class="text-muted">
                         {{ $data->benefit_subtitle }}
                     </p>

                 </div>

             </div>

             <div class="row g-4">


                 @foreach ($data->benefits as $key)
                     <div class="col-lg-6">

                         <div class="benefit-item">

                             <i class="fa fa-check-circle"></i>

                             <div>

                                 <h5>{{ $key->item_title }}</h5>

                                 <p>
                                     {{ $key->item_text }}
                                 </p>

                             </div>

                         </div>

                     </div>
                 @endforeach


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
                         <h2>Mengapa {{ $data->title }}</h2>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="edufit-content-box">
                         {!! $data->why_paragraph !!}
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center">
                 @foreach ($data->reasons as $key)
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
                                 <h5>{{ $key->item_title }}</h5>
                                 <p>{{ $key->item_text }}</p>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section><!--====== End Why Choose Section ======-->

     <section id="belajar-apa" class="pt-100 pb-100 bg-light">

         <div class="container">

             <div class="row justify-content-center mb-5">

                 <div class="col-lg-8 text-center">

                     <span class="text-primary fw-bold">
                         {{ $data->course_small_title }}
                     </span>

                     <h2 class="mt-2">
                         {{ $data->course_title }}
                     </h2>

                     <p class="text-muted">
                         {{ $data->course_subtitle }}
                     </p>

                 </div>

             </div>

             <div class="accordion modern-accordion" id="courseAccordion">

                 <!-- Item -->
                 @foreach ($data->courseItems as $index => $key)
                     <div class="accordion-item">

                         <h2 class="accordion-header">

                             <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#item_{{ $index }}">

                                 <span class="number">{{ $index + 1 }}</span>

                                 <div>

                                     <h5>{{ $key->item_title }}</h5>

                                     <small>
                                         {{ $key->item_subtitle }}
                                     </small>

                                 </div>

                             </button>

                         </h2>

                         <div id="item_{{ $index }}"
                             class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                             data-bs-parent="#courseAccordion">

                             <div class="accordion-body">

                                 {!! $key->item_text !!}

                             </div>

                         </div>

                     </div>
                 @endforeach


             </div>

         </div>

     </section>

     <section id="outline" class="pt-100 pb-100 bg-white">
         <div class="container">

             <div class="row justify-content-center mb-5">
                 <div class="col-lg-8 text-center">
                     <span class="text-primary fw-bold">{{ $data->outline_small_title }}</span>
                     <h2>{{ $data->outline_title }}</h2>
                     <p class="text-muted">
                         {{ $data->outline_subtitle }}
                     </p>
                 </div>
             </div>

             <div class="timeline">
                 @foreach ($data->outlineItems as $index => $key)
                     <!-- Hari 1 -->
                     <div class="timeline-item">

                         <div class="timeline-icon">
                             <span>{{ $index + 1 }}</span>
                         </div>

                         <div class="timeline-content">

                             <div class="day-badge">
                                 {{ $key->item_small_title }}
                             </div>

                             <h4>{{ $key->item_title }}</h4>

                             <p>
                                 {{ $key->item_text }}
                             </p>

                         </div>

                     </div>
                 @endforeach

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
                         <h2>{{ $data->wajib_ikut_header_text }}</h2>
                     </div>
                 </div>
             </div>

             <div class="row justify-content-center">
                 @foreach ($data->audiences as $key)
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
                                 <i class="{{ $key->item_icon }}"></i>
                             </div>
                             <div class="content">
                                 <h5>{{ $key->item_title }}</h5>
                                 <p>{{ $key->item_text }}</p>
                             </div>
                         </div>
                     </div>
                 @endforeach

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

                         <h2>{!! $data->testi_header_text !!}</h2>
                     </div>
                 </div>
             </div>
             <!--===  Testimonial Slider  ===-->
             <div class="testimonial-slider" data-aos="fade-up" data-aos-delay="15" data-aos-duration="1000">
                 <!--===  Testimonial Item  ===-->
                 @foreach ($data->testimonies as $key)
                     <div class="ef-testimonial-item style-one">
                         <div class="testimonial-content">
                             <div class="author-box-rating">
                                 <div class="author-box style-one">
                                     <div class="author-thumb">
                                         <img src="{{ asset('storage') }}/{{ $key->foto }}" alt="Author Image">
                                     </div>
                                     <div class="author-info">
                                         <h5>{{ $key->name }}</h5>
                                         <span class="position">{{ $key->position }}</span>
                                     </div>
                                 </div>
                                 @php
                                     $rating = $key->rating;
                                     $fullStars = floor($rating);
                                     $hasHalfStar = $rating - $fullStars >= 0.5;
                                     $emptyStars = 5 - $fullStars - ($hasHalfStar ? 1 : 0);
                                 @endphp

                                 <div class="rating">

                                     <ul class="ratings">

                                         {{-- Full Star --}}
                                         @for ($i = 0; $i < $fullStars; $i++)
                                             <li>
                                                 <i class="fas fa-star"></i>
                                             </li>
                                         @endfor


                                         {{-- Half Star --}}
                                         @if ($hasHalfStar)
                                             <li>
                                                 <i class="fas fa-star-half-alt"></i>
                                             </li>
                                         @endif


                                         {{-- Empty Star --}}
                                         @for ($i = 0; $i < $emptyStars; $i++)
                                             <li>
                                                 <i class="far fa-star"></i>
                                             </li>
                                         @endfor

                                     </ul>

                                 </div>
                             </div>

                             <p>{{ $key->comment ?? '' }}</p>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section><!--====== End Testimonial Section ======-->


     <section id="harga" class="pt-100 pb-100 gray-bg">
         <div class="container">

             <div class="row justify-content-center mb-5">
                 <div class="col-lg-8 text-center">
                     <span class="text-primary fw-bold">{{ $data->price_small_title }}</span>
                     <h2 class="mt-2">{{ $data->price_title }}</h2>
                     <p class="text-muted">
                         {{ $data->price_subtitle }}
                     </p>
                 </div>
             </div>

             <div class="row g-4">

                 <!-- Paket Group -->
                 @php
                     $count = $data->priceDetails->count();
                     $ly = 12 / (int) $count;
                 @endphp
                 @foreach ($data->priceDetails as $key)
                     <div class="col-lg-{{ $ly }}">

                         <div class="price-card">

                             <div class="price-header">
                                 <h4>{{ $key->price_category }}</h4>
                             </div>

                             <div class="price-item">
                                 <span class="badge-price">EARLY BIRD</span>
                                 <h2>{{ $key->price_early_bird }}</h2>
                                 <p>{{ $key->price_text_early_bird }}</p>
                             </div>

                             <hr>

                             <div class="price-item">
                                 <span class="badge-price gray">REGULER</span>
                                 <h3>{{ $key->price_reguler }}</h3>
                                 <p>{{ $key->price_text_reguler }}</p>
                             </div>

                             <a href="{{ $info->general_cta_link ?? '#' }}" class="theme-btn style-one w-100 mt-4">
                                 {{$info->general_cta_text ?? '' }}
                             </a>

                         </div>

                     </div>
                 @endforeach
             </div>

         </div>
     </section>

     <section id="fasilitas" class="pt-70 pb-100 bg-white">
         <div class="container">

             <div class="row justify-content-center">
                 <div class="col-lg-8">
                     <div class="section-title text-center mb-5">
                         <span class="text-primary fw-bold">{{ $data->facility_small_title }}</span>
                         <h2 class="mt-2">{{ $data->facility_title }}</h2>
                         <p class="text-muted">
                             {{ $data->facility_subtitle }}
                         </p>
                     </div>
                 </div>
             </div>

             <div class="row g-4 justify-content-center">
                 @foreach ($data->facilities as $key)
                     <div class="col-lg-3 col-md-4 col-sm-6">
                         <div class="facility-card">
                             <div class="icon">
                                 <i class="{{ $key->icon }}"></i>
                             </div>
                             <h5>{{ $key->name }}</h5>
                         </div>
                     </div>
                 @endforeach

             </div>

             <div class="text-center mt-5">
                 <a href="{{ $info->general_cta_link ?? '#' }}" class="theme-btn style-one px-5">
                     {{ $info->general_cta_text ?? '' }}
                 </a>
             </div>

         </div>
     </section>
     <div class="right-sidebar">

     </div>
 @endsection
