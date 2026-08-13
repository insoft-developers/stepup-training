 @extends('master')
 @section('content')
     <!--====== Start Hero Section ======-->

     <section id="about" class="ef-about-sec pt-10 pb-80">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-6">
                     <!--====== About Image Box =====-->
                     <div class="edufit-image-box style-one mb-50">
                         <div class="shape shape_one"><span><img
                                     src="{{ asset('template/home') }}/assets/images/about/shape1.png" alt="shape"></span>
                         </div>
                         <div class="shape shape_two"><span><img
                                     src="{{ asset('template/home') }}/assets/images/about/shape2.png"
                                     alt="shape"></span></div>
                         <!--====== Edufit Image =====-->
                         <div class="edufit-img image_one" data-aos="fade-up" data-aos-delay="10" data-aos-duration="700">
                             <img src="{{ asset('storage') }}/{{ $about->image }}" alt="About Image">
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
                             <span class="sub-heading"><i
                                     class="flaticon-mortarboard-1"></i>{{ $about->small_title }}</span>
                             <h2>{!! $about->title_text !!}</h2>
                         </div>
                         <p data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">{{ $about->about_text ?? '' }}
                         </p>
                         <div class="row">
                             <div class="col-md-6">
                                 <!--====== Iconic Box =====-->
                                 <div class="ef-iconic-box style-two mb-40" data-aos="fade-up" data-aos-delay="30"
                                     data-aos-duration="1200">
                                     <div class="icon">
                                         <i class="flaticon-virtual-event"></i>
                                     </div>
                                     <div class="content">
                                         <h5>{{ $about->item_title_1 }}</h5>
                                         <p>{{ $about->item_subtitle_1 ?? '' }}</p>
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
                                         <h5>{{ $about->item_title_2 }}</h5>
                                         <p>{{ $about->item_subtitle_2 ?? '' }}</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!--====== About Button Box =====-->
                         <div class="about-button-box d-flex align-items-center" data-aos="fade-up" data-aos-delay="50"
                             data-aos-duration="1600">
                             <div class="about-button">
                                 <a href="{{ $about->cta_link ?? '#' }}" target="_blank"
                                     class="theme-btn style-one">{{ $about->cta_text }}</a>
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
                         <h2>{{ $data->client_title }}

                         </h2>
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center">
                 @foreach ($clients as $client)
                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                         <!--=== Category Item ===-->
                         <a href="{{ asset('storage') }}/{{ $client->image }}"
                             class="ef-category-item style-one {{ $client->color }} mb-30" data-aos="fade-up"
                             data-aos-delay="15" data-aos-duration="900">
                             <div class="client-icon">
                                 <img class="gambar-client" src="{{ asset('storage') }}/{{ $client->image }}">
                             </div>
                             <div class="content">
                                 <h5>{{ $client->name ?? '' }}</h5>
                                 <span>{{ $client->tagline ?? '' }}</span>
                             </div>
                         </a>
                     </div>
                 @endforeach
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


                 @foreach ($trainings as $i)
                     <div class="col-xl-3 col-md-6 col-sm-12">
                         <!-- Course Item -->
                         <div class="ef-course-grid-item style-one training-card mb-30" data-aos="fade-up"
                             data-aos-delay="150" data-aos-duration="900">

                             <div class="course-thumbnail">
                                 <a href="#">
                                     <img src="{{ asset('storage') }}/{{ $i->thumb_image }}" alt="Leadership Training"
                                         class="img-fluid">
                                 </a>


                             </div>

                             <div class="course-info">
                                 <h3 class="title">
                                     <a href="#">
                                         {{ $i->title }}
                                     </a>
                                 </h3>

                                 <div class="course-meta">
                                     <div class="course-meta-item">
                                         <div class="meta-icon">
                                             <i class="far fa-calendar-alt"></i>
                                         </div>

                                         <div class="meta-content">

                                             <span class="meta-value">
                                                 @if ($i->start_at->isSameDay($i->finish_at))
                                                     {{ $i->start_at->translatedFormat('d F Y') }}
                                                 @else
                                                     {{ $i->start_at->format('d') }}
                                                     –
                                                     {{ $i->finish_at->translatedFormat('d F Y') }}
                                                 @endif

                                             </span>
                                         </div>
                                     </div>

                                     <div class="course-meta-item">
                                         <div class="meta-icon">
                                             <i class="fas fa-map-marker-alt"></i>
                                         </div>

                                         <div class="meta-content">

                                             <span class="meta-value">{{ $i->location }} </span>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="course-footer">
                                     <a href="{{ url('/training') }}/{{ $i->slug }}"
                                         class="theme-btn style-one order-training-btn">
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
                         <a href="#" class="theme-btn style-one">Explore More</a>
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
                             {{ $data->inhouse_title }}

                         </h2>

                         <p class="mt-3">
                             {{ $data->inhouse_subtitle }}
                         </p>
                     </div>
                 </div>
             </div>

             <div class="row justify-content-center">

                 <!-- Leadership Training -->
                 @foreach ($inhouses as $item)
                     <div class="col-xl-4 col-md-6">
                         <div class="ef-blog-grid-item style-one inhouse-card mb-40" data-aos="fade-up"
                             data-aos-delay="15" data-aos-duration="900">

                             <div class="post-thumbnail">
                                 <img src="{{ asset('storage') }}/{{ $item->image }}"
                                     alt="Leadership Development Training">
                             </div>

                             <div class="post-content">
                                 <div class="post-meta">
                                     <span>
                                         <a href="#">{{ $item->theme }}</a>
                                     </span>

                                     <span>
                                         <i class="far fa-clock"></i>
                                         {{ $item->duration }}
                                     </span>
                                 </div>

                                 <h4 class="title">
                                     <a href="#">
                                         {{ $item->title }}
                                     </a>
                                 </h4>

                                 <p class="training-description">
                                     {{ $item->paragraph }}
                                 </p>

                                 <div class="training-info">
                                     <span>
                                         <i class="far fa-users"></i>
                                         {{ $item->audience }}
                                     </span>

                                     <span>
                                         <i class="far fa-map-marker-alt"></i>
                                         {{ $item->location }}
                                     </span>
                                 </div>

                                 <div class="inhouse-footer">
                                     <a href="{{ $item->cta_link ?? '#' }}" class="theme-btn style-one inhouse-btn">
                                         {{ $data->inhouse_traning_buttom_text }}
                                         <i class="far fa-arrow-right"></i>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach



             </div>

             <!-- Bottom CTA -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="inhouse-bottom-cta text-center" data-aos="fade-up" data-aos-duration="900">

                         <p>
                             {{ $data->custom_text }}
                         </p>

                         <a href="{{ $data->custom_cta_link ?? '#' }}" class="theme-btn style-one">
                             {{ $data->custom_cta_text }}
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
                             <span class="sub-heading"><i
                                     class="flaticon-mortarboard-1"></i>{{ $contact->small_title ?? '' }}</span>
                             <h2>{!! $contact->title_text ?? '' !!}</h2>
                         </div>
                         <p data-aos="fade-up" data-aos-delay="15" data-aos-duration="900">
                             {{ $contact->paragraph ?? '' }}</p>
                         <div class="row">
                             <div class="col-xl-12 col-lg-4">
                                 <!--=== Iconic Info Box ===-->
                                 <div class="ef-iconic-info-box style-two mb-30" data-aos="fade-up" data-aos-delay="20"
                                     data-aos-duration="1000">
                                     <div class="icon-box">
                                         <div class="icon">
                                             <i class="flaticon-pin-map"></i>
                                         </div>
                                     </div>
                                     <div class="content">
                                         <h4>Office Address</h4>
                                         <p>{!! $data->address !!}</p>
                                         {{-- <p>Jawa Timur, 20366</p> --}}
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-12 col-lg-4">
                                 <!--=== Iconic Info Box ===-->
                                 <div class="ef-iconic-info-box style-two mb-30" data-aos="fade-up" data-aos-delay="25"
                                     data-aos-duration="1200">
                                     <div class="icon-box">
                                         <div class="icon">
                                             <i class="flaticon-email"></i>
                                         </div>
                                     </div>
                                     <div class="content">
                                         <h4>Email Address</h4>
                                         <p><a href="mailto:{{ $data->email }}">{{ $data->email }}</a></p>
                                         <p><a href="#"></a></p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-12 col-lg-4">
                                 <!--=== Iconic Info Box ===-->
                                 <div class="ef-iconic-info-box style-two mb-30" data-aos="fade-up" data-aos-delay="30"
                                     data-aos-duration="1400">
                                     <div class="icon-box">
                                         <div class="icon">
                                             <i class="flaticon-phone-call"></i>
                                         </div>
                                     </div>
                                     <div class="content">
                                         <h4>Phone Number</h4>
                                         <p><a href="#">{{ $data->whatsapp }}</a></p>
                                         <p><a href="#"></a></p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-7">
                     <!--=== Contact Wrapper ===-->
                     <div class="contact-wrapper mb-60" data-aos="fade-up" data-aos-duration="1200">
                         <h2>{{ $contact->message_header ?? '' }}</h2>
                         <p>{{ $contact->message_subtitle ?? '' }}</p>
                         <div style="margin-top:20px"></div>
                         <form class="contact-form">
                             <div class="row">
                                 <div class="col-lg-6">
                                     <div class="form-group">
                                         <label for="name">{{ $contact->name_label ?? '' }}<span>*</span></label>
                                         <input type="text" class="form_control custom-control"
                                             placeholder="{{ $contact->name_placeholder_text ?? '' }}" name="name"
                                             required>
                                     </div>
                                 </div>
                                 <div class="col-lg-6">
                                     <div class="form-group">
                                         <label for="name">{{ $contact->email_label ?? '' }}<span>*</span></label>
                                         <input type="email" class="form_control custom-control"
                                             placeholder="{{ $contact->email_placeholder_text ?? '' }}" name="email"
                                             required>
                                     </div>
                                 </div>
                                 <div class="col-lg-6">
                                     <div class="form-group">
                                         <label for="name">{{ $contact->phone_label ?? '' }}<span>*</span></label>
                                         <input type="text" class="form_control custom-control"
                                             placeholder="{{ $contact->phone_placeholder_text ?? '' }}" name="phone"
                                             required>
                                     </div>
                                 </div>
                                 <div class="col-lg-6">
                                     <div class="form-group">
                                         <label for="name">{{ $contact->subject_label ?? '' }}<span>*</span></label>
                                         <input type="text" class="form_control custom-control"
                                             placeholder="{{ $contact->subject_placeholder_text ?? '' }}" name="subject"
                                             required>
                                     </div>
                                 </div>
                                 <div class="col-lg-12">
                                     <div class="form-group">
                                         <label for="name">{{ $contact->message_label ?? '' }}<span>*</span></label>
                                         <textarea rows="4" class="form_control custom-control"
                                             placeholder="{{ $contact->message_placeholder_text ?? '' }}" name="message" id=""></textarea>
                                     </div>
                                 </div>
                                 <div class="col-lg-12">
                                     <div class="form-group">
                                         <button class="theme-btn style-one">{{ $contact->button_text ?? '' }}</button>
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
