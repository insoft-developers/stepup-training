@extends('backoffice.master')

@section('content')

<div class="container-fluid">

    {{-- Page Header --}}
    <div class="py-3 py-lg-4">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <h3 class="page-title mb-1 fw-bold">
                    Contact
                </h3>

                <p class="text-muted mb-0">
                    Kelola informasi dan tampilan halaman contact website.
                </p>

            </div>

        </div>

    </div>


    {{-- Success --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            <i class="mdi mdi-check-circle-outline me-1"></i>

            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- Validation --}}
    @if($errors->any())

        <div class="alert alert-danger">

            <strong>
                Terdapat kesalahan:
            </strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <form
        action="{{ route('backoffice.contact.update', $contact->id) }}"
        method="POST">

        @csrf

        @method('PUT')


        <div class="row">


            {{-- =========================================
                 LEFT COLUMN
            ========================================== --}}

            <div class="col-lg-7">


                {{-- CONTACT INTRO --}}
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-white border-bottom">

                        <h5 class="mb-1 fw-semibold">

                            <i class="mdi mdi-text-box-outline text-primary me-2"></i>

                            Contact Information

                        </h5>

                        <small class="text-muted">
                            Informasi yang ditampilkan pada bagian contact.
                        </small>

                    </div>


                    <div class="card-body">


                        {{-- Small Title --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Small Title
                            </label>

                            <input
                                type="text"
                                name="small_title"
                                class="form-control"
                                value="{{ old('small_title', $contact->small_title ?? '') }}"
                                placeholder="Contoh: Contact Us">

                        </div>


                        {{-- Title --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Title
                            </label>

                            <input
                                type="text"
                                name="title_text"
                                class="form-control"
                                value="{{ old('title_text', $contact->title_text ?? '') }}"
                                placeholder="Contoh: Get In Touch With Us">

                        </div>


                        {{-- Paragraph --}}
                        <div class="mb-0">

                            <label class="form-label fw-semibold">
                                Paragraph
                            </label>

                            <textarea
                                name="paragraph"
                                rows="4"
                                class="form-control"
                                placeholder="Tulis deskripsi contact...">{{ old('paragraph', $contact->paragraph ?? '') }}</textarea>

                        </div>

                    </div>

                </div>



                {{-- =========================================
                     MESSAGE FORM
                ========================================== --}}

                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-white border-bottom">

                        <h5 class="mb-1 fw-semibold">

                            <i class="mdi mdi-message-text-outline text-primary me-2"></i>

                            Message Form

                        </h5>

                        <small class="text-muted">
                            Pengaturan teks pada form pesan.
                        </small>

                    </div>


                    <div class="card-body">


                        {{-- Message Header --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Message Header
                            </label>

                            <input
                                type="text"
                                name="message_header"
                                class="form-control"
                                value="{{ old('message_header', $contact->message_header ?? '') }}"
                                placeholder="Contoh: Send Us A Message">

                        </div>


                        {{-- Message Subtitle --}}
                        <div class="mb-0">

                            <label class="form-label fw-semibold">
                                Message Subtitle
                            </label>

                            <input
                                type="text"
                                name="message_subtitle"
                                class="form-control"
                                value="{{ old('message_subtitle', $contact->message_subtitle ?? '') }}"
                                placeholder="Contoh: We would love to hear from you.">

                        </div>

                    </div>

                </div>


            </div>



            {{-- =========================================
                 RIGHT COLUMN
            ========================================== --}}

            <div class="col-lg-5">


                {{-- FIELD LABELS --}}
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-white border-bottom">

                        <h5 class="mb-1 fw-semibold">

                            <i class="mdi mdi-format-list-bulleted text-primary me-2"></i>

                            Field Labels

                        </h5>

                        <small class="text-muted">
                            Label yang muncul pada form contact.
                        </small>

                    </div>


                    <div class="card-body">


                        {{-- Name --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Name Label
                            </label>

                            <input
                                type="text"
                                name="name_label"
                                class="form-control"
                                value="{{ old('name_label', $contact->name_label ?? '') }}">

                        </div>


                        {{-- Email --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Email Label
                            </label>

                            <input
                                type="text"
                                name="email_label"
                                class="form-control"
                                value="{{ old('email_label', $contact->email_label ?? '') }}">

                        </div>


                        {{-- Phone --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Phone Label
                            </label>

                            <input
                                type="text"
                                name="phone_label"
                                class="form-control"
                                value="{{ old('phone_label', $contact->phone_label ?? '') }}">

                        </div>


                        {{-- Subject --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Subject Label
                            </label>

                            <input
                                type="text"
                                name="subject_label"
                                class="form-control"
                                value="{{ old('subject_label', $contact->subject_label ?? '') }}">

                        </div>


                        {{-- Message --}}
                        <div class="mb-0">

                            <label class="form-label fw-semibold">
                                Message Label
                            </label>

                            <input
                                type="text"
                                name="message_label"
                                class="form-control"
                                value="{{ old('message_label', $contact->message_label ?? '') }}">

                        </div>

                    </div>

                </div>


            </div>


        </div>



        {{-- =========================================
             PLACEHOLDER
        ========================================== --}}

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white border-bottom">

                <h5 class="mb-1 fw-semibold">

                    <i class="mdi mdi-form-textbox text-primary me-2"></i>

                    Placeholder Form

                </h5>

                <small class="text-muted">
                    Teks petunjuk yang muncul di dalam input.
                </small>

            </div>


            <div class="card-body">

                <div class="row">


                    {{-- Name --}}
                    <div class="col-lg-6 mb-3">

                        <label class="form-label fw-semibold">
                            Name Placeholder
                        </label>

                        <input
                            type="text"
                            name="name_placeholder_text"
                            class="form-control"
                            value="{{ old('name_placeholder_text', $contact->name_placeholder_text ?? '') }}"
                            placeholder="Enter your name">

                    </div>


                    {{-- Email --}}
                    <div class="col-lg-6 mb-3">

                        <label class="form-label fw-semibold">
                            Email Placeholder
                        </label>

                        <input
                            type="text"
                            name="email_placeholder_text"
                            class="form-control"
                            value="{{ old('email_placeholder_text', $contact->email_placeholder_text ?? '') }}"
                            placeholder="Enter your email">

                    </div>


                    {{-- Phone --}}
                    <div class="col-lg-6 mb-3">

                        <label class="form-label fw-semibold">
                            Phone Placeholder
                        </label>

                        <input
                            type="text"
                            name="phone_placeholder_text"
                            class="form-control"
                            value="{{ old('phone_placeholder_text', $contact->phone_placeholder_text ?? '') }}"
                            placeholder="Enter your phone">

                    </div>


                    {{-- Subject --}}
                    <div class="col-lg-6 mb-3">

                        <label class="form-label fw-semibold">
                            Subject Placeholder
                        </label>

                        <input
                            type="text"
                            name="subject_placeholder_text"
                            class="form-control"
                            value="{{ old('subject_placeholder_text', $contact->subject_placeholder_text ?? '') }}"
                            placeholder="Enter subject">

                    </div>


                    {{-- Message --}}
                    <div class="col-lg-6 mb-3">

                        <label class="form-label fw-semibold">
                            Message Placeholder
                        </label>

                        <input
                            type="text"
                            name="message_placeholder_text"
                            class="form-control"
                            value="{{ old('message_placeholder_text', $contact->message_placeholder_text ?? '') }}"
                            placeholder="Enter your message">

                    </div>


                    {{-- Button --}}
                    <div class="col-lg-6 mb-3">

                        <label class="form-label fw-semibold">
                            Button Text
                        </label>

                        <input
                            type="text"
                            name="button_text"
                            class="form-control"
                            value="{{ old('button_text', $contact->button_text ?? '') }}"
                            placeholder="Send Message">

                    </div>

                </div>

            </div>

        </div>



        {{-- SAVE BUTTON --}}

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-end gap-2">

                    <button
                        type="submit"
                        class="btn btn-primary px-4">

                        <i class="mdi mdi-content-save me-1"></i>

                        Simpan Perubahan

                    </button>

                </div>

            </div>

        </div>


    </form>

</div>

@endsection