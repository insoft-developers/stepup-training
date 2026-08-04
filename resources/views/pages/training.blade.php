 @extends('master')
 @section('content')
 <section class="ef-page-hero bg_cover" style="background-image: url({{asset('template/pages')}}/assets/images/gallery/page-bg1.jpg);">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <!--=== Page Content ===-->
                 <div class="page-content text-center">
                     <h1 class="page-title">Training</h1>
                     <ul class="breadcrumb-link">
                         <li><a href="{{ url('/') }}">Home</a></li>
                         <li class="active">Training Details</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section><!--======  End Page Hero Section  ======-->
 <!--======  Start Course Details Page  ======-->
 <section class="ef-course-details-sec pt-130 pb-100">
     <div class="container">
         <div class="row">
             <div class="col-xl-9 col-lg-8">
                 <!--=== Course Details ===-->
                 <div class="course-details-wrapper">
                     <!--=== Thumbnail ===-->
                     <div class="course-thumbnail" data-aos="fade-up" data-aos-delay="10" data-aos-duration="900">
                         <img src="{{ asset('/template/pages') }}/assets/images/course/course-single1.jpg" alt="course thumbnail">
                     </div>
                     <!--=== Course Info ===-->
                     <div class="course-info">
                         <h3 class="title">How Write the Ultimate 1-Page Business Plan For Your Upcoming Company</h3>
                         <div class="course-meta">
                             <div class="instructor-box">
                                 <div class="thumbnail">
                                     <img src="{{ asset('/template/pages') }}/assets/images/course/instructor1.png" alt="Instructor">
                                 </div>
                                 <div class="info">
                                     <span class="position">Instructor</span>
                                     <h6>David Liam</h6>
                                 </div>
                             </div>
                             <div class="ef-category-box">
                                 <h6>Categories</h6>
                                 <a href="#">Business & Marketing</a>
                             </div>
                             <div class="ef-rating-box">
                                 <h6>Reviews</h6>
                                 <ul class="ratings">
                                     <li><span>4.85</span></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                     <li><i class="fas fa-star"></i></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="edufit-tabs" data-aos="fade-up" data-aos-delay="15" data-aos-duration="1000">
                             <!--=== Nav Tab ===-->
                             <ul class="nav nav-tabs">
                                 <li>
                                     <button class="nav-link active" data-bs-toggle="tab"
                                         data-bs-target="#overview">Overview</button>
                                 </li>
                                 <li>
                                     <button class="nav-link" data-bs-toggle="tab"
                                         data-bs-target="#curriculum">Curriculum</button>
                                 </li>
                                 <li>
                                     <button class="nav-link" data-bs-toggle="tab"
                                         data-bs-target="#instructor">Instructor</button>
                                 </li>
                                 <li>
                                     <button class="nav-link" data-bs-toggle="tab"
                                         data-bs-target="#reviews">Reviews</button>
                                 </li>
                             </ul>
                         </div>
                         <div class="tab-content" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1100">
                             <div class="tab-pane fade show active" id="overview">
                                 <!--=== Overview ===-->
                                 <div class="edufit-content-box">
                                     <p>Include a concise marketing strategy, key financial projections, and a basic
                                         outline of operational needs. Keep it simple, focused, and easy to read,
                                         allowing you to present your business idea effectively while leaving room for
                                         future adjustments as your company grows.</p>
                                     <p>Writing the ultimate 1-page business plan for your upcoming company is about
                                         focusing on the essentials. Start with a clear vision and mission statement
                                         that outlines your purpose and goals. Identify your target market, and briefly
                                         describe the products or services you will offer. Highlight your unique value
                                         proposition—what sets you apart from competitors.</p>
                                     <h4>What You’ll Learn From This Course</h4>
                                     <ul class="check-list style-one">
                                         <li><i class="flaticon-check-2"></i>Master the basic principles and terminology
                                             of the subject.</li>
                                         <li><i class="flaticon-check-2"></i>Learn how to present and apply your
                                             knowledge in professional settings</li>
                                         <li><i class="flaticon-check-2"></i>Explore more complex topics and deepen your
                                             expertise as you progress.</li>
                                         <li><i class="flaticon-check-2"></i>Develop critical thinking and
                                             troubleshooting skills for real-world scenarios.</li>
                                         <li><i class="flaticon-check-2"></i>Gain hands-on experience with tools,
                                             techniques, and real-world applications.</li>
                                     </ul>
                                     <h4>Certification</h4>
                                     <p>Boost your career with Edufit’s globally recognized certifications. Gain
                                         practical skills in web development, digital marketing, UI/UX design, and more
                                         through flexible, self-paced learning. Complete courses, earn your certificate,
                                         and showcase your expertise to stand out in today’s competitive market. Start
                                         your journey with Edufit today!</p>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="curriculum">
                                 <!--=== Curriculum ===-->
                                 <div class="edufit-content-box">
                                     <!--====== Accordion  ======-->
                                     <div class="accordion" id="accordionOne">
                                         <!--====== Accordion Item  ======-->
                                         <div class="ef-accordion-item mb-15">
                                             <div class="accordion-header">
                                                 <h6 class="accordion-title" data-bs-toggle="collapse"
                                                     data-bs-target="#collapse1" aria-expanded="true">
                                                     You Can Be a Communication Skills Master
                                                 </h6>
                                             </div>
                                             <div id="collapse1" class="accordion-collapse collapse show"
                                                 data-bs-parent="#accordionOne">
                                                 <div class="accordion-content">
                                                     <ul class="video-list">
                                                         <li>
                                                             <div class="text">Please Present Yourself</div>
                                                             <div class="duration">03:14</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">Instant Answers to Your Communication
                                                                 Skills</div>
                                                             <div class="duration">04:44</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">Direct versus indirect communication
                                                             </div>
                                                             <div class="duration">05:37</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">Exciting New Update to this Course
                                                             </div>
                                                             <div class="duration">03:54</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">Communications skills are the most
                                                                 important skills for success</div>
                                                             <div class="duration">02:12</div>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--====== Accordion Item  ======-->
                                         <div class="ef-accordion-item mb-15">
                                             <div class="accordion-header">
                                                 <h6 class="accordion-title" data-bs-toggle="collapse"
                                                     data-bs-target="#collapse2" aria-expanded="false">
                                                     Business Communication Skills for Job Interviews
                                                 </h6>
                                             </div>
                                             <div id="collapse2" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionOne">
                                                 <div class="accordion-content">
                                                     <ul class="video-list">
                                                         <li>
                                                             <div class="text">Establishing Your Job Interview Goals
                                                             </div>
                                                             <div class="duration">03:14</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">How to Dress for the Interview</div>
                                                             <div class="duration">04:44</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">How to Make Small Talk</div>
                                                             <div class="duration">05:37</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">Tell Me About Yourself</div>
                                                             <div class="duration">03:54</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">The Proper Job Interview Mindset</div>
                                                             <div class="duration">02:12</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">Ask for the Job</div>
                                                             <div class="duration">02:05</div>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--====== Accordion Item  ======-->
                                         <div class="ef-accordion-item mb-15">
                                             <div class="accordion-header">
                                                 <h6 class="accordion-title" data-bs-toggle="collapse"
                                                     data-bs-target="#collapse3" aria-expanded="false">
                                                     Communication Skills for Introducing Yourself
                                                 </h6>
                                             </div>
                                             <div id="collapse3" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionOne">
                                                 <div class="accordion-content">
                                                     <ul class="video-list">
                                                         <li>
                                                             <div class="text">How to Introduce Yourself Intro</div>
                                                             <div class="duration">03:14</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">What NOT to Do</div>
                                                             <div class="duration">04:44</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">How to Introduce Yourself The Right
                                                                 Way</div>
                                                             <div class="duration">05:37</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">How to Introduce Yourself Video
                                                                 Rehearsal</div>
                                                             <div class="duration">03:54</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">Friend Feedback</div>
                                                             <div class="duration">02:12</div>
                                                         </li>
                                                         <li>
                                                             <div class="text">How to Introduce Yourself Conclusion
                                                             </div>
                                                             <div class="duration">02:05</div>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="instructor">
                                 <!--=== Instructor ===-->
                                 <div class="course-instructor-box">
                                     <div class="instructor-thumbnail">
                                         <img src="{{ asset('/template/pages') }}/assets/images/instructor/instructor1.jpg"
                                             alt="instructor1 thumbnail">
                                     </div>
                                     <div class="instructor-info">
                                         <h4>David Carron</h4>
                                         <p>David Carron is a skilled educator with expertise in web development,
                                             digital marketing, and UI/UX design. As Edufit’s lead instructor, he
                                             provides practical, hands-on learning to help students succeed.</p>
                                         <ul class="social-link">
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                             <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="reviews">
                                 <!--=== Reviews ===-->
                                 <div class="edufit-content-box">
                                     <ul>
                                         <li>
                                             <div class="rating-box">
                                                 <div class="author-avatar">
                                                     <img src="{{ asset('/template/pages') }}/assets/images/course/author1.jpg" alt="comment author">
                                                 </div>
                                                 <div class="author-wrap">
                                                     <div class="author-content">
                                                         <span class="author-name">Albert flores<span
                                                                 class="date">May 25, 2023</span></span>
                                                         <ul class="ratings">
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                         </ul>
                                                         <p>David Carron is highly rated, with an average of 4.9/5.
                                                             Students praise his clear explanations, practical insights,
                                                             and engaging teaching style, making him a trusted mentor.
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </li>
                                         <li>
                                             <div class="rating-box">
                                                 <div class="author-avatar">
                                                     <img src="{{ asset('/template/pages') }}/assets/images/course/author2.jpg" alt="comment author">
                                                 </div>
                                                 <div class="author-wrap">
                                                     <div class="author-content">
                                                         <span class="author-name">Albert flores<span
                                                                 class="date">May 25, 2023</span></span>
                                                         <ul class="ratings">
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                             <li><a href="#"><i class="fas fa-star"></i></a>
                                                             </li>
                                                         </ul>
                                                         <p>Sophia Taylor earns a 4.9/5 rating for her engaging teaching
                                                             style, clear explanations, and practical, student-focused
                                                             approach.</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-4">
                 <!--=== Sidebar Widget Area ===-->
                 <div class="sidebar-widget-area">
                     <div class="sidebar-widget sidebar-course-info-widget mb-30" data-aos="fade-up"
                         data-aos-delay="10" data-aos-duration="900">
                         <div class="widget-content">
                             <div class="course-preview">
                                 <img src="{{ asset('/template/pages') }}/assets/images/course/preview.jpg" alt="Course Preview">
                                 <div class="hover-overlay">
                                     <div class="play-button">
                                         <a href="https://www.youtube.com/watch?v=D6446Z5z7p8" class="video-popup"><i
                                                 class="flaticon-play"></i></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="course-info">
                                 <h4><span class="price"><span class="currency">$</span>120</span>12 Day Left at Free
                                     Price!</h4>
                                 <div class="course-button text-center">
                                     <button class="theme-btn style-one">Add To Cart</button>
                                     <button class="theme-btn style-two">Buy Now</button>
                                     <p>30 Day Money-Back Guarantee</p>
                                 </div>
                                 <h4 class="title">This Course Includes:</h4>
                                 <ul>
                                     <li>Instructor<span>D. Liam</span></li>
                                     <li>Start Date<span>08, Oct 24</span></li>
                                     <li>Total Duration<span>05 Hrs 23 Min</span></li>
                                     <li>Enrolled<span>100</span></li>
                                     <li>Lectures<span>25</span></li>
                                     <li>Skill Level<span>Expert</span></li>
                                     <li>Language<span>English</span></li>
                                     <li>Quiz<span>Yes</span></li>
                                     <li>Certificate<span>Yes</span></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section><!--======  End Course Details Page  ======-->
@endsection