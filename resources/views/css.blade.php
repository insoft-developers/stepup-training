<style>
    .custom-logo {
        height: 90px !important;
        width: auto !important;
        margin-top: -15px !important;
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
