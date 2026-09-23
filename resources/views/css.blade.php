<style>
    .custom-logo {
        height: 72px !important;
        width: auto !important;
        margin-top: -1px !important;
    }

    .bottom-logo {
        background: linear-gradient(rgb(255 255 255 / 65%), rgb(126 127 135 / 45%));
        border-radius: 30px;
        padding: 3px;
    }

    .header-navigation .site-branding {
        max-width: 295px !important;
    }

    .hero-subscribe .theme-btn {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
    }

    .adjust-margin {
        margin-top: -130px !important;
        margin-bottom: -80px !important;
    }

    .adjust-margin2 {
        padding-top: 30px !important;

        margin-bottom: -50px !important;
    }

    .adjust-margin3 {


        margin-bottom: -50px !important;
    }

    .adjust-margin4 {
        padding-top: 30px !important;

    }

    .client-icon img {
        /* width: 100px;
        height: 100px;
        object-fit: cover;
        padding-right: 29px; */

    }

    /* ==============================
   CLIENT CARD
================================ */

    .ef-category-item.style-one {
        display: block;
        background: #fff;
        border: 1px solid #eeeeee;
        border-radius: 18px;
        padding: 20px;

        text-align: center;

        transition: all 0.35s ease;
        overflow: hidden;
    }

    .ef-category-item.style-one:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    }


    /* ==============================
   CLIENT LOGO
================================ */

    .client-icon {
        width: 100%;
        height: 130px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 15px;

        background: #f8f9fa;
        border-radius: 14px;

        padding: 18px;

        overflow: hidden;
    }

    .gambar-client {
        max-width: 100%;
        max-height: 100%;

        width: auto;
        height: auto;

        object-fit: contain;

        transition: transform 0.35s ease;
    }

    .ef-category-item:hover .gambar-client {
        transform: scale(1.05);
    }


    /* ==============================
   CLIENT TEXT
================================ */

    .ef-category-item.style-one .content {
        padding: 0;
    }

    .ef-category-item.style-one .content h5 {
        margin: 0 0 5px;

        font-size: 17px;
        font-weight: 700;

        color: #222;
    }

    .ef-category-item.style-one .content span {
        display: block;

        font-size: 13px;
        line-height: 1.5;

        color: #888;
    }


    /* Card training lebih ringkas */
    .training-card {
        height: 100%;
        overflow: hidden;
        border-radius: 15px;
    }

    /* Kurangi tinggi gambar */
    .training-card .course-thumbnail img {
        width: 100%;
        height: 190px;
        object-fit: cover;
    }

    /* Kurangi ruang bagian isi */
    .training-card .course-info {
        padding: 16px 18px 18px;
    }

    /* Judul lebih ringkas */
    .training-card .title {
        margin: 0 0 12px;
        font-size: 18px;
        line-height: 1.35;
    }

    /* Tanggal dan lokasi dibuat berdekatan */
    .training-card .course-meta {
        display: flex;
        flex-direction: column;
        gap: 5px;
        margin: 0 0 14px;
        padding: 0;
    }

    /* Setiap baris informasi */
    .training-card .course-meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
        min-height: auto;
        margin: 0;
        padding: 4px 0;
        background: transparent;
        border: none;
    }

    /* Icon lebih kecil */
    .training-card .meta-icon {
        display: flex;
        flex: 0 0 26px;
        align-items: center;
        justify-content: center;
        width: 26px;
        height: 26px;
        color: #246bfd;
        font-size: 14px;
        background: #edf3ff;
        border-radius: 7px;
    }

    /* Hilangkan jarak bawaan */
    .training-card .meta-content {
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    /* Teks tanggal dan lokasi */
    .training-card .meta-value {
        margin: 0;
        color: #5b6475;
        font-size: 13px;
        font-weight: 500;
        line-height: 0.8;
        white-space: normal;
        margin-top: 10px !important;
    }

    /* Footer lebih rapat */
    .training-card .course-footer {
        margin: 0;
        padding-top: 12px;
        border-top: 1px solid #edf0f5;
    }

    /* Tombol lebih pendek */
    .training-card .order-training-btn {
        display: flex;
        width: 100%;
        min-height: auto;
        align-items: center;
        justify-content: center;
        gap: 7px;
        padding: 10px 15px;
        font-size: 13px;
        line-height: 1.2;
        border-radius: 9px;
    }

    .ef-course-grid-item.style-one .course-info {
        padding: 15px !important;
    }


    .ef-course-grid-item.style-one .course-info .course-meta {
        border-bottom: none !important;
        padding-bottom: 0px !important;
        margin-bottom: 0px !important;
    }


    .inhouse-card {
        height: calc(100% - 40px);
        overflow: hidden;
        border: 1px solid #edf0f5;
        border-radius: 16px;
        background: #ffffff;
        transition: all 0.3s ease;
    }

    .inhouse-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 18px 45px rgba(20, 35, 60, 0.12);
    }

    .inhouse-card .post-thumbnail {
        overflow: hidden;
    }

    .inhouse-card .post-thumbnail img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .inhouse-card:hover .post-thumbnail img {
        transform: scale(1.06);
    }

    .inhouse-card .post-content {
        padding: 24px;
    }

    .inhouse-card .title {
        margin-bottom: 12px;
        font-size: 21px;
        line-height: 1.4;
    }

    .training-description {
        min-height: 72px;
        margin-bottom: 18px;
        color: #687083;
        font-size: 14px;
        line-height: 1.7;
    }

    .training-info {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-bottom: 20px;
    }

    .training-info span {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #50596c;
        font-size: 14px;
    }

    .training-info i {
        width: 20px;
        color: #246bfd;
    }

    .inhouse-footer {
        padding-top: 18px;
        border-top: 1px solid #edf0f5;
    }

    .inhouse-btn {
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 16px;
    }

    .inhouse-bottom-cta {
        margin-top: 20px;
        padding: 32px;
        background: #f5f8ff;
        border-radius: 16px;
    }

    .inhouse-bottom-cta p {
        margin-bottom: 18px;
        color: #525d72;
        font-size: 16px;
    }








    .footer-contact-widget .contact-description {
        margin-bottom: 22px;
        font-size: 14px;
        line-height: 1.7;
    }

    .footer-contact-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .footer-contact-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 18px;
    }

    .footer-contact-list li:last-child {
        margin-bottom: 0;
    }

    .footer-contact-list .contact-icon {
        display: flex;
        flex: 0 0 38px;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        color: #ffffff;
        font-size: 15px;
        background-color: #246bfd;
        border-radius: 50%;
    }

    .footer-contact-list .contact-info {
        min-width: 0;
    }

    .footer-contact-list .contact-info span {
        display: block;
        margin-bottom: 3px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
    }

    .footer-contact-list .contact-info p {
        margin: 0;
        font-size: 13px;
        line-height: 1.6;
    }

    .footer-contact-list .contact-info a {
        color: inherit;
        transition: color 0.3s ease;
    }

    .footer-contact-list .contact-info a:hover {
        color: #246bfd;
    }


    .hero-training-info {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin: 22px 0 20px;
    }

    .hero-training-info .training-info-item {
        display: flex;
        min-width: 230px;
        align-items: center;
        gap: 11px;
        padding: 11px 16px;
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(20, 84, 172, 0.12);
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(20, 40, 80, 0.08);
    }

    .hero-training-info .training-info-icon {
        display: flex;
        flex: 0 0 38px;
        width: 38px;
        height: 38px;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size: 15px;
        background: #1469d2;
        border-radius: 9px;
    }

    .hero-training-info .training-info-content {
        display: flex;
        flex-direction: column;
    }

    .hero-training-info .training-info-label {
        margin-bottom: 2px;
        color: #747d8c;
        font-size: 11px;
        font-weight: 500;
        line-height: 1.2;
    }

    .hero-training-info .training-info-content strong {
        color: #17233d;
        font-size: 14px;
        font-weight: 700;
        line-height: 1.35;
    }

    .hero-content>p {
        margin-top: 0;
    }

    @media (max-width: 575px) {
        .hero-training-info {
            flex-direction: column;
            gap: 8px;
        }

        .hero-training-info .training-info-item {
            width: 100%;
            min-width: 0;
        }
    }

    .dark-custom-color {
        background: #013d85 !important;
    }

    .dark-custom-color h2,
    .dark-custom-color .edufit-content-box h3,
    .edufit-content-box h4,
    .dark-custom-color .edufit-content-box p {
        color: #fbfbfb !important;
    }

    .right-sidebar {}

    #fasilitas {
        background: #f8fafc;
    }

    .facility-card {
        background: #fff;
        border: 1px solid #ececec;
        border-radius: 18px;
        padding: 35px 20px;
        text-align: center;
        transition: .35s;
        height: 100%;
        box-shadow: 0 8px 25px rgba(0, 0, 0, .05);
    }

    .facility-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(0, 0, 0, .12);
        border-color: #0d6efd;
    }

    .facility-card .icon {
        width: 75px;
        height: 75px;
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #0d6efd, #4f8cff);
        color: #fff;
        font-size: 28px;
    }

    .facility-card h5 {
        font-weight: 600;
        margin: 0;
        color: #222;
        font-size: 18px;
    }

    .theme-btn.style-one {
        padding: 15px 45px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
    }

    #harga {
        background: #f8fafc;
    }

    .price-card {
        position: relative;
        background: #fff;
        border-radius: 20px;
        padding: 35px;
        text-align: center;
        box-shadow: 0 15px 35px rgba(0, 0, 0, .06);
        transition: .35s;
        border: 1px solid #eee;
        height: 100%;
    }

    .price-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, .12);
    }

    .price-card.featured {
        border: 2px solid #0d6efd;
        transform: scale(1.03);
    }

    .recommended {
        position: absolute;
        top: -14px;
        left: 50%;
        transform: translateX(-50%);
        background: #0d6efd;
        color: #fff;
        padding: 8px 18px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
    }

    .price-header h4 {
        font-weight: 700;
        margin-bottom: 30px;
    }

    .price-item h2 {
        font-size: 42px;
        font-weight: 700;
        color: #0d6efd;
        margin: 15px 0 5px;
    }

    .price-item h3 {
        font-size: 30px;
        font-weight: 700;
        color: #222;
    }

    .price-item p {
        color: #777;
        margin-bottom: 0;
    }

    .badge-price {
        display: inline-block;
        padding: 6px 16px;
        background: #28a745;
        color: #fff;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
    }

    .badge-price.gray {
        background: #6c757d;
    }

    .price-card hr {
        margin: 30px 0;
    }

    .price-card .theme-btn {
        width: 100%;
        border-radius: 50px;
        padding: 15px;
        font-weight: 600;
    }


    #outline {
        background: #f8fafc;
    }

    .timeline {
        position: relative;
        max-width: 900px;
        margin: auto;
    }

    .timeline::before {
        content: "";
        position: absolute;
        left: 32px;
        top: 0;
        width: 3px;
        height: 100%;
        background: #0d6efd;
    }

    .timeline-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 40px;
        position: relative;
    }

    .timeline-icon {
        width: 65px;
        height: 65px;
        background: #0d6efd;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        font-weight: bold;
        z-index: 2;
        flex-shrink: 0;
    }

    .timeline-content {
        margin-left: 25px;
        background: #fff;
        padding: 28px;
        border-radius: 18px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, .06);
        transition: .3s;
        width: 100%;
    }

    .timeline-content:hover {
        transform: translateY(-5px);
        box-shadow: 0 18px 45px rgba(0, 0, 0, .12);
    }

    .day-badge {
        display: inline-block;
        background: #e9f2ff;
        color: #0d6efd;
        padding: 6px 16px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .timeline-content h4 {
        font-weight: 700;
        margin-bottom: 15px;
    }

    .timeline-content p {
        margin-bottom: 0;
        color: #666;
        line-height: 1.8;
    }


    .problem-card {
        background: #fff;
        padding: 35px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .05);
        transition: .35s;
        height: 100%;
    }

    .problem-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(0, 0, 0, .12);
    }

    .problem-card .icon {
        width: 80px;
        height: 80px;
        background: #ffecec;
        color: #dc3545;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        margin: auto auto 20px;
    }

    .problem-card h5 {
        font-weight: 700;
        margin-bottom: 15px;
    }

    .problem-card p {
        color: #666;
        margin: 0;
    }

    .benefit-item {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        background: #fff;
        padding: 25px;
        border-radius: 18px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, .05);
        transition: .3s;
        height: 100%;
    }

    .benefit-item:hover {
        transform: translateY(-5px);
    }

    .benefit-item i {
        font-size: 32px;
        color: #28a745;
    }

    .benefit-item h5 {
        margin-bottom: 8px;
        font-weight: 700;
    }

    .benefit-item p {
        margin: 0;
        color: #666;
    }


    #belajar-apa {
        background: #f8fafc;
    }

    .modern-accordion .accordion-item {
        border: none;
        margin-bottom: 18px;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .05);
    }

    .modern-accordion .accordion-button {
        background: #fff;
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: none;

    }

    .modern-accordion .accordion-button:not(.collapsed) {
        background: #013b81;
        color: #fff;
    }

    .modern-accordion .accordion-button:not(.collapsed) small {
        color: rgba(255, 255, 255, .8);
    }

    .modern-accordion .accordion-button::after {
        margin-left: auto;
    }

    .number {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #013b81;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: 700;
        flex-shrink: 0;
    }

    .accordion-button:not(.collapsed) .number {
        background: #fff;
        color: #013b81;

    }

    .accordion-button h5 {
        margin-bottom: 5px;
        font-weight: 700;
        color: orange;
    }




    .accordion-button small {
        color: #666;
    }

    .accordion-body {
        background: #fff;
        padding: 25px 35px 30px;
    }

    .course-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .course-list li {
        padding: 12px 0;
        border-bottom: 1px solid #eee;
        font-size: 15px;
    }

    .course-list li:last-child {
        border-bottom: none;
    }


    #contact h4 {
        color: black !important;
    }

    .form-control::placeholder {
        color: #adb5bd;
        opacity: 1;
    }
</style>




@if($view == 'training')
<style>
    /* =========================================================
   MOBILE RESPONSIVE - STEP UP TRAINING
   ========================================================= */

    /* ---------- TABLET ---------- */
    @media (max-width: 991.98px) {

        html,
        body {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
        }

        .container,
        .container-fluid {
            width: 100%;
            max-width: 100%;
        }

        /* Header */
        .header-top {
            display: none !important;
        }

        .header-navigation {
            min-height: 70px;
        }

        .header-navigation .nav-inner-menu {
            min-height: 70px;
            padding: 0 20px;
        }

        .custom-logo {
            height: 65px !important;
            width: auto !important;
            margin-top: -5px !important;
        }

        .header-navigation .site-branding {
            max-width: 220px !important;
        }

        /* Main content */
        .section-padding {
            padding-top: 65px !important;
            padding-bottom: 65px !important;
        }

        /* Hero */
        .hero-content h1 {
            font-size: 42px;
            line-height: 1.15;
        }

        .hero-content p {
            font-size: 15px;
            line-height: 1.7;
        }

        /* Training */
        .training-card .course-thumbnail img {
            height: 210px;
        }

        /* In House */
        .inhouse-card .post-thumbnail img {
            height: 210px;
        }

        .inhouse-card .post-content {
            padding: 20px;
        }

        /* Facility */
        .facility-card {
            padding: 28px 18px;
        }

        /* Pricing */
        .price-card {
            padding: 28px 22px;
        }

        .price-card.featured {
            transform: none;
        }

        .price-item h2 {
            font-size: 36px;
        }

        /* Timeline */
        .timeline-content {
            padding: 22px;
        }

        /* Problem */
        .problem-card {
            padding: 28px 20px;
        }

        .benefit-item {
            padding: 20px;
            gap: 15px;
        }

        /* Accordion */
        .modern-accordion .accordion-button {
            padding: 20px;
            gap: 15px;
        }

        .accordion-body {
            padding: 20px;
        }
    }


    /* =========================================================
   MOBILE PHONE
   ========================================================= */

    @media (max-width: 575.98px) {

        html,
        body {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden !important;
        }

        body {
            font-size: 14px;
        }

        /* -----------------------------------------
       CONTAINER
       ----------------------------------------- */

        .container,
        .container-fluid {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .row {
            --bs-gutter-x: 20px;
        }

        /* -----------------------------------------
       HEADER
       ----------------------------------------- */

        .header-top {
            display: none !important;
        }

        .header-navigation {
            min-height: 62px;
        }

        .header-navigation .nav-inner-menu {
            min-height: 62px;
            padding: 0 15px;
        }

        .header-navigation .site-branding {
            max-width: 180px !important;
        }

        .custom-logo {
            height: 55px !important;
            width: auto !important;
            margin-top: 0 !important;
        }

        /*
       Logo pada menu mobile
    */
        .edufit-menu-top .custom-logo {
            height: 55px !important;
        }

        /* Menu button */
        .navbar-toggler,
        .navbar-toggle,
        .menu-toggle {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* -----------------------------------------
       SECTION SPACING
       ----------------------------------------- */

        section {
            overflow: hidden;
        }

        .section-padding,
        .pt-100,
        .pb-100 {
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }

        .pt-120,
        .pb-120 {
            padding-top: 55px !important;
            padding-bottom: 55px !important;
        }

        /* -----------------------------------------
       SECTION TITLE
       ----------------------------------------- */

        .section-title {
            margin-bottom: 30px !important;
        }

        .section-title h2,
        .section-title .title {
            font-size: 28px !important;
            line-height: 1.2 !important;
            margin-bottom: 12px !important;
        }

        .section-title p {
            font-size: 14px !important;
            line-height: 1.7 !important;
        }

        /* -----------------------------------------
       HERO
       ----------------------------------------- */

        .hero-area,
        .hero-section {
            min-height: auto !important;
        }

        .hero-content {
            padding-top: 35px !important;
            padding-bottom: 35px !important;
        }

        .hero-content h1 {
            font-size: 30px !important;
            line-height: 1.2 !important;
            margin-bottom: 15px !important;
        }

        .hero-content h2 {
            font-size: 25px !important;
            line-height: 1.25 !important;
        }

        .hero-content p {
            font-size: 14px !important;
            line-height: 1.7 !important;
            margin-bottom: 18px !important;
        }

        /* Hero buttons */
        .hero-content .theme-btn,
        .hero-content .main-btn,
        .hero-content a.theme-btn {
            width: 100%;
            min-height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 18px !important;
            font-size: 14px !important;
        }

        /* -----------------------------------------
       HERO TRAINING INFO
       ----------------------------------------- */

        .hero-training-info {
            display: flex !important;
            flex-direction: column !important;
            gap: 8px !important;
            margin: 18px 0 !important;
        }

        .hero-training-info .training-info-item {
            width: 100% !important;
            min-width: 0 !important;
            padding: 10px 12px !important;
            border-radius: 10px !important;
        }

        .hero-training-info .training-info-icon {
            flex: 0 0 34px !important;
            width: 34px !important;
            height: 34px !important;
            font-size: 13px !important;
            border-radius: 8px !important;
        }

        .hero-training-info .training-info-label {
            font-size: 10px !important;
        }

        .hero-training-info .training-info-content strong {
            font-size: 12px !important;
            line-height: 1.35 !important;
        }

        /* -----------------------------------------
       TRAINING CARD
       ----------------------------------------- */

        .training-card,
        .ef-course-grid-item.style-one {
            border-radius: 14px !important;
        }

        .training-card .course-thumbnail img {
            height: 175px !important;
            min-height: 175px !important;
            object-fit: cover !important;
        }

        .training-card .course-info,
        .ef-course-grid-item.style-one .course-info {
            padding: 15px !important;
        }

        .training-card .title {
            font-size: 17px !important;
            line-height: 1.35 !important;
            margin-bottom: 10px !important;

            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .training-card .course-meta {
            gap: 4px !important;
            margin-bottom: 12px !important;
        }

        .training-card .course-meta-item {
            gap: 7px !important;
            padding: 3px 0 !important;
        }

        .training-card .meta-icon {
            flex: 0 0 25px !important;
            width: 25px !important;
            height: 25px !important;
            font-size: 12px !important;
        }

        .training-card .meta-value {
            font-size: 12px !important;
            line-height: 1.35 !important;
            margin-top: 0 !important;
        }

        .training-card .course-footer {
            padding-top: 10px !important;
        }

        .training-card .order-training-btn {
            min-height: 42px !important;
            padding: 10px 12px !important;
            font-size: 12px !important;
            border-radius: 8px !important;
        }

        /* -----------------------------------------
       IN HOUSE TRAINING
       ----------------------------------------- */

        .inhouse-card {
            height: auto !important;
            margin-bottom: 20px;
            border-radius: 14px !important;
        }

        .inhouse-card .post-thumbnail img {
            height: 175px !important;
        }

        .inhouse-card .post-content {
            padding: 17px !important;
        }

        .inhouse-card .title {
            font-size: 18px !important;
            line-height: 1.35 !important;
            margin-bottom: 9px !important;
        }

        .training-description {
            min-height: auto !important;
            margin-bottom: 15px !important;
            font-size: 13px !important;
            line-height: 1.65 !important;
        }

        .training-info {
            gap: 7px !important;
            margin-bottom: 15px !important;
        }

        .training-info span {
            font-size: 13px !important;
            line-height: 1.5;
        }

        .inhouse-footer {
            padding-top: 14px !important;
        }

        .inhouse-btn {
            min-height: 43px;
            padding: 10px 14px !important;
            font-size: 13px !important;
        }

        .inhouse-bottom-cta {
            margin-top: 15px !important;
            padding: 22px 18px !important;
            border-radius: 14px !important;
        }

        .inhouse-bottom-cta p {
            font-size: 14px !important;
            line-height: 1.6;
        }

        /* -----------------------------------------
       CLIENT / LOGO CARD
       ----------------------------------------- */

        .ef-category-item.style-one {
            padding: 14px !important;
            border-radius: 14px !important;
        }

        .client-icon {
            height: 100px !important;
            padding: 14px !important;
            margin-bottom: 10px !important;
            border-radius: 10px !important;
        }

        .ef-category-item.style-one .content h5 {
            font-size: 15px !important;
        }

        .ef-category-item.style-one .content span {
            font-size: 12px !important;
        }

        /* -----------------------------------------
       FACILITY
       ----------------------------------------- */

        .facility-card {
            padding: 23px 15px !important;
            border-radius: 15px !important;
        }

        .facility-card .icon {
            width: 60px !important;
            height: 60px !important;
            margin-bottom: 14px !important;
            font-size: 22px !important;
        }

        .facility-card h5 {
            font-size: 16px !important;
            line-height: 1.35 !important;
        }

        /* -----------------------------------------
       BUTTON
       ----------------------------------------- */

        .theme-btn.style-one {
            min-height: 44px;
            padding: 11px 22px !important;
            font-size: 14px !important;
        }

        /* -----------------------------------------
       PRICE CARD
       ----------------------------------------- */

        .price-card {
            padding: 25px 18px !important;
            border-radius: 16px !important;
            margin-bottom: 20px;
        }

        .price-card.featured {
            transform: none !important;
            border-width: 2px;
        }

        .recommended {
            top: -12px !important;
            padding: 6px 14px !important;
            font-size: 11px !important;
            white-space: nowrap;
        }

        .price-header h4 {
            font-size: 18px !important;
            margin-bottom: 20px !important;
        }

        .price-item h2 {
            font-size: 32px !important;
            line-height: 1.1;
            margin: 12px 0 5px !important;
        }

        .price-item h3 {
            font-size: 24px !important;
        }

        .price-item p {
            font-size: 13px !important;
        }

        .price-card hr {
            margin: 20px 0 !important;
        }

        .price-card .theme-btn {
            min-height: 45px;
            padding: 12px !important;
            font-size: 14px !important;
        }

        /* -----------------------------------------
       TIMELINE
       ----------------------------------------- */

        .timeline {
            padding-left: 0 !important;
        }

        .timeline::before {
            left: 22px !important;
            width: 2px !important;
        }

        .timeline-item {
            margin-bottom: 22px !important;
        }

        .timeline-icon {
            width: 45px !important;
            height: 45px !important;
            font-size: 16px !important;
        }

        .timeline-content {
            margin-left: 13px !important;
            padding: 18px !important;
            border-radius: 14px !important;
        }

        .day-badge {
            padding: 5px 12px !important;
            font-size: 11px !important;
            margin-bottom: 10px !important;
        }

        .timeline-content h4 {
            font-size: 17px !important;
            line-height: 1.35 !important;
            margin-bottom: 8px !important;
        }

        .timeline-content p {
            font-size: 13px !important;
            line-height: 1.65 !important;
        }

        /* -----------------------------------------
       PROBLEM CARD
       ----------------------------------------- */

        .problem-card {
            padding: 24px 17px !important;
            border-radius: 15px !important;
            margin-bottom: 15px;
        }

        .problem-card .icon {
            width: 62px !important;
            height: 62px !important;
            font-size: 25px !important;
            margin-bottom: 15px !important;
        }

        .problem-card h5 {
            font-size: 16px !important;
            line-height: 1.4 !important;
            margin-bottom: 8px !important;
        }

        .problem-card p {
            font-size: 13px !important;
            line-height: 1.65 !important;
        }

        /* -----------------------------------------
       BENEFIT
       ----------------------------------------- */

        .benefit-item {
            padding: 17px !important;
            gap: 13px !important;
            border-radius: 14px !important;
            margin-bottom: 15px;
        }

        .benefit-item i {
            font-size: 25px !important;
        }

        .benefit-item h5 {
            font-size: 15px !important;
            line-height: 1.4 !important;
        }

        .benefit-item p {
            font-size: 13px !important;
            line-height: 1.6 !important;
        }

        /* -----------------------------------------
       ACCORDION
       ----------------------------------------- */

        .modern-accordion .accordion-item {
            margin-bottom: 10px !important;
            border-radius: 13px !important;
        }

        .modern-accordion .accordion-button {
            padding: 15px !important;
            gap: 11px !important;
            min-height: 65px;
        }

        .number {
            width: 40px !important;
            height: 40px !important;
            min-width: 40px !important;
            font-size: 15px !important;
        }

        .accordion-button h5 {
            font-size: 14px !important;
            line-height: 1.3 !important;
            margin-bottom: 3px !important;
        }

        .accordion-button small {
            display: block;
            font-size: 11px !important;
            line-height: 1.35 !important;
        }

        .accordion-body {
            padding: 15px 17px 20px !important;
        }

        .course-list li {
            padding: 10px 0 !important;
            font-size: 13px !important;
            line-height: 1.5;
        }

        /* -----------------------------------------
       FOOTER
       ----------------------------------------- */

        .footer-contact-list li {
            gap: 10px !important;
            margin-bottom: 14px !important;
        }

        .footer-contact-list .contact-icon {
            flex: 0 0 34px !important;
            width: 34px !important;
            height: 34px !important;
            font-size: 13px !important;
        }

        .footer-contact-list .contact-info span {
            font-size: 13px !important;
        }

        .footer-contact-list .contact-info p {
            font-size: 12px !important;
            line-height: 1.55 !important;
            overflow-wrap: anywhere;
        }

        /* -----------------------------------------
       FORM
       ----------------------------------------- */

        .form-control {
            min-height: 45px;
            font-size: 14px !important;
        }

        textarea.form-control {
            min-height: 120px;
        }

        /* -----------------------------------------
       FIX NEGATIVE MARGINS
       ----------------------------------------- */

        .adjust-margin,
        .adjust-margin2,
        .adjust-margin3,
        .adjust-margin4 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .adjust-margin2,
        .adjust-margin4 {
            padding-top: 0 !important;
        }

        /* -----------------------------------------
       IMAGES
       ----------------------------------------- */

        img {
            max-width: 100%;
            height: auto;
        }

        /* -----------------------------------------
       TEXT
       ----------------------------------------- */

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            overflow-wrap: break-word;
        }

        /* -----------------------------------------
       MOBILE TOUCH
       ----------------------------------------- */

        a,
        button,
        .theme-btn {
            -webkit-tap-highlight-color: transparent;
        }

        /* -----------------------------------------
       REMOVE HOVER TRANSFORM ON TOUCH
       ----------------------------------------- */

        .training-card:hover,
        .inhouse-card:hover,
        .price-card:hover,
        .problem-card:hover,
        .benefit-item:hover,
        .facility-card:hover,
        .timeline-content:hover {
            transform: none !important;
        }
    }


    /* =========================================================
   VERY SMALL PHONE - 360px
   ========================================================= */

    @media (max-width: 380px) {

        .container,
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }

        .custom-logo {
            height: 50px !important;
        }

        .hero-content h1 {
            font-size: 27px !important;
        }

        .section-title h2,
        .section-title .title {
            font-size: 25px !important;
        }

        .training-card .course-thumbnail img,
        .inhouse-card .post-thumbnail img {
            height: 160px !important;
            min-height: 160px !important;
        }

        .training-card .title {
            font-size: 16px !important;
        }

        .price-card {
            padding: 22px 15px !important;
        }

        .price-item h2 {
            font-size: 29px !important;
        }

        .timeline-icon {
            width: 42px !important;
            height: 42px !important;
        }

        .timeline::before {
            left: 20px !important;
        }

        .timeline-content {
            margin-left: 10px !important;
            padding: 15px !important;
        }
    }
</style>
@endif

@if($view =='dashboard')
<style>
    /* ==========================================================
   STEP UP TRAINING
   MOBILE MASTER RESPONSIVE
   ========================================================== */

    @media (max-width: 767.98px) {

        /* ======================================================
       1. GLOBAL
       ====================================================== */

        html,
        body {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden !important;
        }

        body {
            font-size: 14px;
            line-height: 1.6;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
        }

        .container,
        .container-fluid {
            width: 100% !important;
            max-width: 100% !important;
            padding-left: 16px !important;
            padding-right: 16px !important;
        }

        .row {
            margin-left: -8px !important;
            margin-right: -8px !important;
        }

        .row>[class*="col-"] {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }


        /* ======================================================
       2. SECTION SPACING
       ====================================================== */

        section {
            position: relative;
            overflow: hidden;
        }

        .section-padding,
        .pt-100,
        .pb-100 {
            padding-top: 52px !important;
            padding-bottom: 52px !important;
        }

        .pt-120,
        .pb-120 {
            padding-top: 58px !important;
            padding-bottom: 58px !important;
        }

        /* Hilangkan spacing palsu akibat desktop */
        .adjust-margin,
        .adjust-margin2,
        .adjust-margin3,
        .adjust-margin4 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .adjust-margin2,
        .adjust-margin4 {
            padding-top: 0 !important;
        }


        /* ======================================================
       3. SECTION TITLE
       ====================================================== */

        .section-title {
            margin-bottom: 28px !important;
        }

        .section-title h2,
        .section-title .title {
            font-size: 27px !important;
            line-height: 1.2 !important;
            margin-bottom: 10px !important;
        }

        .section-title p {
            font-size: 14px !important;
            line-height: 1.7 !important;
            margin-bottom: 0 !important;
        }


        /* ======================================================
       4. HEADER
       ====================================================== */

        .header-top {
            display: none !important;
        }

        .header-navigation {
            min-height: 64px !important;
        }

        .header-navigation .nav-inner-menu {
            min-height: 64px !important;
            padding: 0 16px !important;
        }

        .header-navigation .site-branding {
            max-width: 190px !important;
        }

        .custom-logo {
            height: 54px !important;
            width: auto !important;
            margin-top: 0 !important;
        }

        .edufit-menu-top .custom-logo {
            height: 52px !important;
        }


        /* ======================================================
       5. HERO
       ====================================================== */

        .hero-area,
        .hero-section {
            min-height: auto !important;
            height: auto !important;
        }

        .hero-content {
            padding-top: 35px !important;
            padding-bottom: 35px !important;
        }

        .hero-content h1 {
            font-size: 30px !important;
            line-height: 1.18 !important;
            margin-bottom: 14px !important;
        }

        .hero-content h2 {
            font-size: 24px !important;
            line-height: 1.25 !important;
        }

        .hero-content p {
            font-size: 14px !important;
            line-height: 1.7 !important;
            margin-bottom: 16px !important;
        }

        .hero-content .theme-btn,
        .hero-content .main-btn {
            width: 100%;
            min-height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        /* ======================================================
       6. HERO TRAINING INFO
       ====================================================== */

        .hero-training-info {
            display: flex !important;
            flex-direction: column !important;
            gap: 8px !important;
            margin: 18px 0 !important;
        }

        .hero-training-info .training-info-item {
            width: 100% !important;
            min-width: 0 !important;
            padding: 10px 12px !important;
            border-radius: 11px !important;
        }

        .hero-training-info .training-info-icon {
            flex: 0 0 35px !important;
            width: 35px !important;
            height: 35px !important;
        }

        .hero-training-info .training-info-label {
            font-size: 10px !important;
        }

        .hero-training-info .training-info-content strong {
            font-size: 12px !important;
        }


        /* ======================================================
       7. TRAINING CARD
       ====================================================== */

        .training-card {
            width: 100% !important;
            height: auto !important;
            margin-bottom: 18px !important;
            border-radius: 14px !important;
            overflow: hidden !important;
        }

        .training-card .course-thumbnail,
        .training-card .course-thumbnail a {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            display: block !important;
        }

        .training-card .course-thumbnail img {
            display: block !important;
            width: 100% !important;
            max-width: none !important;
            height: 175px !important;
            min-height: 175px !important;
            margin: 0 !important;
            object-fit: cover !important;
            object-position: center center !important;
        }

        .training-card .course-info {
            padding: 16px !important;
        }

        .training-card .title {
            font-size: 17px !important;
            line-height: 1.35 !important;
            margin-bottom: 10px !important;
        }

        .training-card .course-meta {
            display: flex !important;
            flex-direction: column !important;
            gap: 5px !important;
            margin-bottom: 12px !important;
        }

        .training-card .course-meta-item {
            display: flex !important;
            align-items: center !important;
            gap: 8px !important;
            padding: 3px 0 !important;
            margin: 0 !important;
        }

        .training-card .meta-icon {
            flex: 0 0 26px !important;
            width: 26px !important;
            height: 26px !important;
            font-size: 12px !important;
        }

        .training-card .meta-content {
            min-width: 0 !important;
        }

        .training-card .meta-value {
            display: block !important;
            margin: 0 !important;
            font-size: 12px !important;
            line-height: 1.4 !important;
            white-space: normal !important;
        }

        .training-card .course-footer {
            padding-top: 12px !important;
        }

        .training-card .order-training-btn {
            width: 100% !important;
            min-height: 43px !important;
            padding: 10px 14px !important;
            font-size: 13px !important;
        }


        /* ======================================================
       8. IN HOUSE TRAINING
       ====================================================== */

        .inhouse-card {
            width: 100% !important;
            height: auto !important;
            margin-bottom: 18px !important;
            border-radius: 14px !important;
        }

        .inhouse-card .post-thumbnail {
            width: 100% !important;
        }

        .inhouse-card .post-thumbnail img {
            width: 100% !important;
            height: 175px !important;
            display: block !important;
            object-fit: cover !important;
        }

        .inhouse-card .post-content {
            padding: 17px !important;
        }

        .inhouse-card .title {
            font-size: 18px !important;
            line-height: 1.35 !important;
            margin-bottom: 9px !important;
        }

        .training-description {
            min-height: 0 !important;
            margin-bottom: 14px !important;
            font-size: 13px !important;
            line-height: 1.65 !important;
        }

        .training-info {
            gap: 6px !important;
            margin-bottom: 14px !important;
        }

        .training-info span {
            font-size: 13px !important;
            line-height: 1.5 !important;
        }

        .inhouse-footer {
            padding-top: 13px !important;
        }

        .inhouse-btn {
            min-height: 43px !important;
            font-size: 13px !important;
        }

        .inhouse-bottom-cta {
            margin-top: 15px !important;
            padding: 22px 17px !important;
            border-radius: 14px !important;
        }


        /* ======================================================
       9. CLIENT
       ====================================================== */

        .ef-category-item.style-one {
            padding: 14px !important;
            border-radius: 14px !important;
        }

        .client-icon {
            height: 95px !important;
            padding: 12px !important;
            margin-bottom: 10px !important;
        }

        .ef-category-item.style-one .content h5 {
            font-size: 15px !important;
        }

        .ef-category-item.style-one .content span {
            font-size: 12px !important;
        }


        /* ======================================================
       10. FASILITAS
       ====================================================== */

        #fasilitas {
            padding-top: 52px !important;
            padding-bottom: 52px !important;
        }

        .facility-card {
            padding: 22px 14px !important;
            border-radius: 15px !important;
        }

        .facility-card .icon {
            width: 58px !important;
            height: 58px !important;
            margin-bottom: 13px !important;
            font-size: 21px !important;
        }

        .facility-card h5 {
            font-size: 15px !important;
            line-height: 1.4 !important;
        }


        /* ======================================================
       11. HARGA
       ====================================================== */

        #harga {
            padding-top: 55px !important;
            padding-bottom: 55px !important;
        }

        .price-card {
            width: 100% !important;
            padding: 25px 18px !important;
            margin-bottom: 18px !important;
            border-radius: 16px !important;
        }

        .price-card.featured {
            transform: none !important;
        }

        .recommended {
            top: -11px !important;
            padding: 6px 14px !important;
            font-size: 10px !important;
        }

        .price-header h4 {
            font-size: 18px !important;
            margin-bottom: 18px !important;
        }

        .price-item h2 {
            font-size: 31px !important;
            line-height: 1.1 !important;
        }

        .price-item h3 {
            font-size: 24px !important;
        }

        .price-card hr {
            margin: 20px 0 !important;
        }

        .price-card .theme-btn {
            min-height: 44px !important;
            padding: 11px !important;
        }


        /* ======================================================
       12. OUTLINE / TIMELINE
       ====================================================== */

        #outline {
            padding-top: 55px !important;
            padding-bottom: 55px !important;
        }

        .timeline {
            width: 100% !important;
            padding: 0 !important;
        }

        .timeline::before {
            left: 21px !important;
            width: 2px !important;
        }

        .timeline-item {
            margin-bottom: 22px !important;
        }

        .timeline-icon {
            width: 44px !important;
            height: 44px !important;
            font-size: 15px !important;
        }

        .timeline-content {
            margin-left: 12px !important;
            padding: 17px !important;
            border-radius: 14px !important;
        }

        .day-badge {
            padding: 5px 11px !important;
            font-size: 10px !important;
            margin-bottom: 9px !important;
        }

        .timeline-content h4 {
            font-size: 16px !important;
            line-height: 1.35 !important;
            margin-bottom: 7px !important;
        }

        .timeline-content p {
            font-size: 13px !important;
            line-height: 1.65 !important;
        }


        /* ======================================================
       13. MASALAH / PROBLEM
       ====================================================== */

        .problem-card {
            padding: 23px 16px !important;
            margin-bottom: 16px !important;
            border-radius: 15px !important;
        }

        .problem-card .icon {
            width: 60px !important;
            height: 60px !important;
            font-size: 24px !important;
            margin-bottom: 14px !important;
        }

        .problem-card h5 {
            font-size: 16px !important;
            line-height: 1.4 !important;
            margin-bottom: 8px !important;
        }

        .problem-card p {
            font-size: 13px !important;
            line-height: 1.65 !important;
        }


        /* ======================================================
       14. BENEFIT
       ====================================================== */

        .benefit-item {
            padding: 17px !important;
            gap: 12px !important;
            margin-bottom: 14px !important;
            border-radius: 14px !important;
        }

        .benefit-item i {
            font-size: 24px !important;
            flex-shrink: 0;
        }

        .benefit-item h5 {
            font-size: 15px !important;
            line-height: 1.4 !important;
        }

        .benefit-item p {
            font-size: 13px !important;
            line-height: 1.6 !important;
        }


        /* ======================================================
       15. ACCORDION
       ====================================================== */

        #belajar-apa {
            padding-top: 55px !important;
            padding-bottom: 55px !important;
        }

        .modern-accordion .accordion-item {
            margin-bottom: 9px !important;
            border-radius: 13px !important;
        }

        .modern-accordion .accordion-button {
            min-height: 62px !important;
            padding: 13px !important;
            gap: 10px !important;
        }

        .number {
            width: 38px !important;
            height: 38px !important;
            min-width: 38px !important;
            font-size: 14px !important;
        }

        .accordion-button h5 {
            font-size: 14px !important;
            line-height: 1.3 !important;
            margin-bottom: 2px !important;
        }

        .accordion-button small {
            font-size: 10px !important;
            line-height: 1.3 !important;
        }

        .accordion-body {
            padding: 14px 16px 18px !important;
        }

        .course-list li {
            padding: 9px 0 !important;
            font-size: 13px !important;
            line-height: 1.5 !important;
        }


        /* ======================================================
       16. CONTACT
       ====================================================== */

        #contact {
            padding-top: 55px !important;
            padding-bottom: 55px !important;
        }

        #contact h4 {
            font-size: 20px !important;
            line-height: 1.3 !important;
        }

        .form-control {
            min-height: 45px !important;
            font-size: 14px !important;
            border-radius: 9px !important;
        }

        textarea.form-control {
            min-height: 115px !important;
        }


        /* ======================================================
       17. FOOTER
       ====================================================== */

        .footer-contact-list li {
            gap: 10px !important;
            margin-bottom: 13px !important;
        }

        .footer-contact-list .contact-icon {
            flex: 0 0 34px !important;
            width: 34px !important;
            height: 34px !important;
            font-size: 13px !important;
        }

        .footer-contact-list .contact-info span {
            font-size: 13px !important;
        }

        .footer-contact-list .contact-info p {
            font-size: 12px !important;
            line-height: 1.55 !important;
            overflow-wrap: anywhere;
        }


        /* ======================================================
       18. BUTTON GLOBAL
       ====================================================== */

        .theme-btn.style-one {
            min-height: 44px !important;
            padding: 11px 20px !important;
            font-size: 13px !important;
        }


        /* ======================================================
       19. REMOVE DESKTOP HOVER EFFECT
       ====================================================== */

        .training-card:hover,
        .inhouse-card:hover,
        .price-card:hover,
        .facility-card:hover,
        .problem-card:hover,
        .benefit-item:hover,
        .timeline-content:hover {
            transform: none !important;
        }
    }


    /* ==========================================================
   SMALL PHONE 360px
   ========================================================== */

    @media (max-width: 380px) {

        .container,
        .container-fluid {
            padding-left: 13px !important;
            padding-right: 13px !important;
        }

        .hero-content h1 {
            font-size: 27px !important;
        }

        .section-title h2,
        .section-title .title {
            font-size: 25px !important;
        }

        .training-card .course-thumbnail img,
        .inhouse-card .post-thumbnail img {
            height: 160px !important;
            min-height: 160px !important;
        }

        .training-card .course-info {
            padding: 14px !important;
        }

        .price-card {
            padding: 22px 15px !important;
        }

        .price-item h2 {
            font-size: 28px !important;
        }

        .timeline-icon {
            width: 42px !important;
            height: 42px !important;
        }

        .timeline::before {
            left: 20px !important;
        }

        .timeline-content {
            margin-left: 9px !important;
            padding: 15px !important;
        }



    }

    /* ==========================================================
   ABOUT SECTION - MOBILE SPACING
   ========================================================== */

    @media (max-width: 767.98px) {

        /* Section About */
        #about {
            padding-top: 35px !important;
            padding-bottom: 35px !important;
        }

        /* Kolom gambar */
        #about .about-image,
        #about .about-thumbnail,
        #about .about-img {
            margin-top: 0 !important;
            margin-bottom: 20px !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        /* Image wrapper */
        #about .image-wrapper,
        #about .thumbnail,
        #about .about-image-wrapper {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        /* Gambar */
        #about img {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            height: auto !important;
            margin-top: -98px !important;
            margin-bottom: 0 !important;
        }

        /* Judul About */
        #about .section-title {
            margin-bottom: 20px !important;
        }

        #about .section-title h2,
        #about h2 {
            margin-top: 0 !important;
        }
    }
</style>

@endif