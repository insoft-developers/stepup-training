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

    @if($view == 'dashboard')
    .client-icon img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        padding-right: 29px;

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

    .custom-control {
        padding: 10px;
        border-radius: 7px;
        font-size: 17px;
        border: 2px solid whitesmoke;
        margin-bottom: 14px;
    }

    .contact-wrapper {
        padding: 44px;
        margin-top: 71px;
        background: whitesmoke;
        border-radius: 10px;
    }


    @endif


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
</style>
