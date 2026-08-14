<div class="row">

    {{-- =====================================================
         BASIC INFORMATION
    ====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="mb-1">
                    <i class="mdi mdi-information-outline text-primary me-2"></i>
                    Informasi Training
                </h5>

                <small class="text-muted">
                    Informasi dasar program training.
                </small>

            </div>


            <div class="card-body">

                <div class="row">

                    {{-- THEME --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Theme
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" name="theme" class="form-control"
                            value="{{ old('theme', $training->theme ?? '') }}"
                            placeholder="Contoh: Communication, Technology etc">

                    </div>


                    {{-- TITLE --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Title
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" name="title" class="form-control"
                            value="{{ old('title', $training->title ?? '') }}" placeholder="Judul training">

                    </div>

                    {{-- STATUS --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Status
                            <span class="text-danger">*</span>
                        </label>

                        <select name="is_active" class="form-select">

                            <option value="1"
                                {{ old('is_active', $training->is_active ?? 1) == 1 ? 'selected' : '' }}>

                                Aktif

                            </option>

                            <option value="0"
                                {{ old('is_active', $training->is_active ?? 1) == 0 ? 'selected' : '' }}>

                                Nonaktif

                            </option>

                        </select>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Location
                        </label>

                        <input type="text" name="location" class="form-control"
                            value="{{ old('location', $training->location ?? '') }}"
                            placeholder="Contoh: Hotel Santika Medan">

                    </div>


                    {{-- START --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Start Date
                            <span class="text-danger">*</span>
                        </label>

                        <input type="date" name="start_at" class="form-control"
                            value="{{ old('start_at', isset($training) ? $training->start_at?->format('Y-m-d') : '') }}">

                    </div>


                    {{-- FINISH --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Finish Date
                            <span class="text-danger">*</span>
                        </label>

                        <input type="date" name="finish_at" class="form-control"
                            value="{{ old('finish_at', isset($training) ? $training->finish_at?->format('Y-m-d') : '') }}">

                    </div>


                    {{-- PARAGRAPH --}}
                    <div class="col-12">

                        <label class="form-label fw-semibold">
                            Paragraph
                            <span class="text-danger">*</span>
                        </label>

                        <textarea name="paragraph" rows="4" class="form-control" placeholder="Deskripsi singkat training">{{ old('paragraph', $training->paragraph ?? '') }}</textarea>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         IMAGE
    ====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="mb-1">
                    <i class="mdi mdi-image-outline text-primary me-2"></i>
                    Training Image
                </h5>

                <small class="text-muted">
                    Satu gambar akan otomatis dibuat menjadi Detail Image
                    dan Thumbnail.
                </small>

            </div>


            <div class="card-body">

                <div class="row">


                    {{-- DETAIL --}}
                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Detail Image
                        </label>

                        <div class="border rounded p-2" style="background:#f8f9fa;">

                            @if (isset($training) && $training->detail_image)
                                <img src="{{ asset('storage/' . $training->detail_image) }}" id="detailPreview"
                                    class="img-fluid w-100"
                                    style="
                                        height:250px;
                                        object-fit:cover;
                                        border-radius:8px;
                                    ">
                            @else
                                <img src="" id="detailPreview" class="img-fluid w-100 d-none"
                                    style="
                                        height:250px;
                                        object-fit:cover;
                                        border-radius:8px;
                                    ">

                                <div id="detailEmpty" class="d-flex align-items-center justify-content-center"
                                    style="height:250px;">

                                    <div class="text-center text-muted">

                                        <i class="mdi mdi-image-outline fs-1"></i>

                                        <div>
                                            Preview Detail Image
                                        </div>

                                    </div>

                                </div>
                            @endif

                        </div>

                    </div>


                    {{-- THUMB --}}
                    <div class="col-md-6">

                        <label class="form-label fw-semibold">
                            Thumbnail
                        </label>

                        <div class="border rounded p-2" style="background:#f8f9fa;">

                            @if (isset($training) && $training->thumb_image)
                                <img src="{{ asset('storage/' . $training->thumb_image) }}" id="thumbPreview"
                                    class="img-fluid w-100"
                                    style="
                                        height:250px;
                                        object-fit:cover;
                                        border-radius:8px;
                                    ">
                            @else
                                <img src="" id="thumbPreview" class="img-fluid w-100 d-none"
                                    style="
                                        height:250px;
                                        object-fit:cover;
                                        border-radius:8px;
                                    ">

                                <div id="thumbEmpty" class="d-flex align-items-center justify-content-center"
                                    style="height:250px;">

                                    <div class="text-center text-muted">

                                        <i class="mdi mdi-image-outline fs-1"></i>

                                        <div>
                                            Preview Thumbnail
                                        </div>

                                    </div>

                                </div>
                            @endif

                        </div>

                    </div>


                    {{-- UPLOAD --}}
                    <div class="col-12 mt-3">

                        <label class="form-label fw-semibold">

                            {{ isset($training) ? 'Ganti Gambar' : 'Upload Gambar' }}

                        </label>

                        <input type="file" name="image" id="image" class="form-control"
                            accept="image/jpeg,image/png,image/webp">

                        <small class="text-muted">
                            JPG, PNG, WebP. Maksimal 4MB.
                            Detail dan thumbnail dibuat otomatis dari gambar ini.
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         CLIENT
    ====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">
                <h5 class="mb-0">
                    Client Section
                </h5>
            </div>

            <div class="card-body">

                {{-- Client Header Text --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Client Header Text
                    </label>

                    <input type="text" name="client_header_text" class="form-control"
                        value="{{ old('client_header_text', $training->client_header_text ?? '') }}">
                </div>


                {{-- Clients --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Select Clients
                    </label>

                    @php
                        $selectedClients = old(
                            'client_ids',
                            isset($training) ? $training->clients->pluck('id')->toArray() : [],
                        );
                    @endphp

                    <select name="client_ids[]" class="form-select" multiple size="8">

                        @foreach ($clients as $client)
                            <option value="{{ $client->id }}"
                                {{ in_array($client->id, $selectedClients) ? 'selected' : '' }}>

                                {{ $client->name }}

                            </option>
                        @endforeach

                    </select>

                    <small class="text-muted">
                        Tekan <strong>Ctrl</strong> untuk memilih beberapa client.
                    </small>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         PROBLEM
    ====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="mb-0">
                    Problem Section
                </h5>

            </div>

            <div class="card-body">

                <div class="row">

                    @foreach ([
        'problem_small_title' => 'Small Title',
        'problem_title' => 'Title',
        'problem_subtitle' => 'Subtitle',
    ] as $field => $label)
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                {{ $label }}
                            </label>

                            <input type="text" name="{{ $field }}" class="form-control"
                                value="{{ old($field, $training->$field ?? '') }}">

                        </div>
                    @endforeach


                    {{-- ITEM 1 --}}
                    <div class="col-12">

                        <hr>

                        <h6 class="fw-bold">
                            Problem Item 1
                        </h6>

                    </div>

                    @foreach ([
        'problem_item_icon_1' => 'Icon',
        'problem_item_title_1' => 'Title',
        'problem_item_text_1' => 'Text',
    ] as $field => $label)
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                {{ $label }}
                            </label>

                            <input type="text" name="{{ $field }}" class="form-control"
                                value="{{ old($field, $training->$field ?? '') }}">

                        </div>
                    @endforeach


                    {{-- ITEM 2 --}}
                    <div class="col-12">

                        <hr>

                        <h6 class="fw-bold">
                            Problem Item 2
                        </h6>

                    </div>

                    @foreach ([
        'problem_item_icon_2' => 'Icon',
        'problem_item_title_2' => 'Title',
        'problem_item_text_2' => 'Text',
    ] as $field => $label)
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                {{ $label }}
                            </label>

                            <input type="text" name="{{ $field }}" class="form-control"
                                value="{{ old($field, $training->$field ?? '') }}">

                        </div>
                    @endforeach


                    {{-- ITEM 3 --}}
                    <div class="col-12">

                        <hr>

                        <h6 class="fw-bold">
                            Problem Item 3
                        </h6>

                    </div>

                    @foreach ([
        'problem_item_icon_3' => 'Icon',
        'problem_item_title_3' => 'Title',
        'problem_item_text_3' => 'Text',
    ] as $field => $label)
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                {{ $label }}
                            </label>

                            <input type="text" name="{{ $field }}" class="form-control"
                                value="{{ old($field, $training->$field ?? '') }}">

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         BENEFIT
    ====================================================== --}}
    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">
                <h5 class="mb-0">
                    Benefit Section
                </h5>
            </div>

            <div class="card-body">

                {{-- Benefit Header --}}
                <div class="row">

                    @foreach ([
        'benefit_small_title' => 'Small Title',
        'benefit_title' => 'Title',
        'benefit_subtitle' => 'Subtitle',
    ] as $field => $label)
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                {{ $label }}
                            </label>

                            <input type="text" name="{{ $field }}" class="form-control"
                                value="{{ old($field, $training->$field ?? '') }}">

                        </div>
                    @endforeach

                </div>


                <hr class="my-4">


                {{-- Benefit Items --}}
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h6 class="mb-0 fw-semibold">
                        Benefit Items
                    </h6>

                    <button type="button" class="btn btn-primary btn-sm" id="btn-add-benefit">
                        <i class="bi bi-plus-lg"></i>
                        Tambah Benefit
                    </button>

                </div>


                <div id="benefit-container">

                    @php
                        $benefits = old(
                            'benefits',
                            isset($training)
                                ? $training->benefits
                                    ->map(function ($benefit) {
                                        return [
                                            'item_title' => $benefit->item_title,
                                            'item_text' => $benefit->item_text,
                                        ];
                                    })
                                    ->toArray()
                                : [],
                        );

                        if (empty($benefits)) {
                            $benefits = [
                                [
                                    'item_title' => '',
                                    'item_text' => '',
                                ],
                            ];
                        }
                    @endphp


                    @foreach ($benefits as $index => $benefit)
                        <div class="benefit-item border rounded p-3 mb-3">

                            <div class="row">

                                <div class="col-md-5 mb-3">

                                    <label class="form-label fw-semibold">
                                        Benefit Title
                                    </label>

                                    <input type="text" name="benefits[{{ $index }}][item_title]"
                                        class="form-control" placeholder="Contoh: Sertifikat Pelatihan"
                                        value="{{ $benefit['item_title'] ?? '' }}">

                                </div>


                                <div class="col-md-6 mb-3">

                                    <label class="form-label fw-semibold">
                                        Benefit Text
                                    </label>

                                    <input type="text" name="benefits[{{ $index }}][item_text]"
                                        class="form-control" placeholder="Contoh: Mendapatkan sertifikat resmi"
                                        value="{{ $benefit['item_text'] ?? '' }}">

                                </div>


                                <div class="col-md-1 mb-3 d-flex align-items-end">

                                    <button type="button"
                                        class="btn btn-outline-danger text-danger btn-remove-benefit w-100"
                                        title="Hapus">

                                        <i class="mdi mdi-delete"></i>

                                    </button>

                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

    {{-- =====================================================
     WHY
====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">
                <h5 class="mb-0">
                    Why Section
                </h5>
            </div>

            <div class="card-body">

                {{-- Paragraph --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Why Paragraph
                    </label>

                    <textarea name="why_paragraph" id="why_paragraph" class="form-control">{{ old('why_paragraph', $training->why_paragraph ?? '') }}</textarea>

                </div>


                <hr class="my-4">


                {{-- Why Items Header --}}
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h6 class="mb-0 fw-semibold">
                        Why Items
                    </h6>

                    <button type="button" class="btn btn-primary btn-sm" id="btn-add-reason">

                        <i class="bi bi-plus-lg"></i>
                        Tambah Reason

                    </button>

                </div>


                {{-- Why Items --}}
                <div id="reason-container">

                    @php

                        $reasons = old(
                            'reasons',
                            isset($training)
                                ? $training->reasons
                                    ->map(function ($reason) {
                                        return [
                                            'item_title' => $reason->item_title,
                                            'item_text' => $reason->item_text,
                                        ];
                                    })
                                    ->toArray()
                                : [],
                        );

                        // Saat create, tampilkan satu baris kosong
                        if (empty($reasons)) {
                            $reasons = [
                                [
                                    'item_title' => '',
                                    'item_text' => '',
                                ],
                            ];
                        }

                    @endphp


                    @foreach ($reasons as $index => $reason)
                        <div class="reason-item border rounded p-3 mb-3">

                            <div class="row">

                                {{-- Title --}}
                                <div class="col-md-5 mb-3">

                                    <label class="form-label fw-semibold">
                                        Reason Title
                                    </label>

                                    <input type="text" name="reasons[{{ $index }}][item_title]"
                                        class="form-control" placeholder="Contoh: Instruktur Berpengalaman"
                                        value="{{ $reason['item_title'] ?? '' }}">

                                </div>


                                {{-- Text --}}
                                <div class="col-md-6 mb-3">

                                    <label class="form-label fw-semibold">
                                        Reason Text
                                    </label>

                                    <input type="text" name="reasons[{{ $index }}][item_text]"
                                        class="form-control"
                                        placeholder="Contoh: Dibimbing oleh instruktur profesional"
                                        value="{{ $reason['item_text'] ?? '' }}">

                                </div>


                                {{-- Delete --}}
                                <div class="col-md-1 mb-3 d-flex align-items-end">

                                    <button type="button"
                                        class="btn text-danger btn-outline-danger btn-remove-reason w-100"
                                        title="Hapus">

                                        <i class="mdi mdi-delete"></i>

                                    </button>

                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         COURSE
    ====================================================== --}}

    {{-- =====================================================
     COURSE
====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">
                <h5 class="mb-0">
                    Course Section
                </h5>
            </div>

            <div class="card-body">

                {{-- Course Header --}}
                <div class="row">

                    @foreach ([
        'course_small_title' => 'Small Title',
        'course_title' => 'Title',
        'course_subtitle' => 'Subtitle',
    ] as $field => $label)
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                {{ $label }}
                            </label>

                            <input type="text" name="{{ $field }}" class="form-control"
                                value="{{ old($field, $training->$field ?? '') }}">

                        </div>
                    @endforeach

                </div>


                <hr class="my-4">


                {{-- Course Items Header --}}
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h6 class="mb-0 fw-semibold">
                        Course Items
                    </h6>

                    <button type="button" class="btn btn-primary btn-sm" id="btn-add-course">

                        <i class="bi bi-plus-lg"></i>
                        Tambah Course

                    </button>

                </div>


                {{-- Course Items --}}
                <div id="course-container">

                    @php

                        $courses = old(
                            'courses',
                            isset($training)
                                ? $training->courseItems
                                    ->map(function ($course) {
                                        return [
                                            'item_title' => $course->item_title,
                                            'item_subtitle' => $course->item_subtitle,
                                            'item_text' => $course->item_text,
                                        ];
                                    })
                                    ->toArray()
                                : [],
                        );

                        if (empty($courses)) {
                            $courses = [
                                [
                                    'item_title' => '',
                                    'item_subtitle' => '',
                                    'item_text' => '',
                                ],
                            ];
                        }

                    @endphp


                    @foreach ($courses as $index => $course)
                        <div class="course-item border rounded p-3 mb-4">

                            <div class="row">

                                {{-- Title --}}
                                <div class="col-md-5 mb-3">

                                    <label class="form-label fw-semibold">
                                        Course Title
                                    </label>

                                    <input type="text" name="courses[{{ $index }}][item_title]"
                                        class="form-control" placeholder="Contoh: Basic Training"
                                        value="{{ $course['item_title'] ?? '' }}">

                                </div>


                                {{-- Subtitle --}}
                                <div class="col-md-6 mb-3">

                                    <label class="form-label fw-semibold">
                                        Course Subtitle
                                    </label>

                                    <input type="text" name="courses[{{ $index }}][item_subtitle]"
                                        class="form-control" placeholder="Contoh: Pelatihan Dasar"
                                        value="{{ $course['item_subtitle'] ?? '' }}">

                                </div>


                                {{-- Delete --}}
                                <div class="col-md-1 mb-3 d-flex align-items-end">

                                    <button type="button" class="btn btn-outline-danger btn-remove-course w-100"
                                        title="Hapus">

                                        <i class="mdi mdi-delete"></i>

                                    </button>

                                </div>


                                {{-- HTML Text --}}
                                <div class="col-12 mb-3">

                                    <label class="form-label fw-semibold">
                                        Course Content
                                    </label>

                                    <textarea name="courses[{{ $index }}][item_text]" class="form-control course-editor" rows="8"
                                        placeholder="Masukkan isi course dalam format HTML...">{{ $course['item_text'] ?? '' }}</textarea>

                                    <small class="text-muted">
                                        Anda dapat menggunakan editor untuk membuat
                                        <strong>HTML content</strong>.
                                    </small>

                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         OUTLINE
    ====================================================== --}}

    {{-- =====================================================
     OUTLINE
====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">
                <h5 class="mb-0">
                    Outline Section
                </h5>
            </div>

            <div class="card-body">

                {{-- Outline Header --}}
                <div class="row">

                    @foreach ([
        'outline_small_title' => 'Small Title',
        'outline_title' => 'Title',
        'outline_subtitle' => 'Subtitle',
    ] as $field => $label)
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                {{ $label }}
                            </label>

                            <input type="text" name="{{ $field }}" class="form-control"
                                value="{{ old($field, $training->$field ?? '') }}">

                        </div>
                    @endforeach

                </div>

                <hr class="my-4">

                {{-- Outline Items --}}
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h6 class="mb-0 fw-semibold">
                        Outline Items
                    </h6>

                    <button type="button" class="btn btn-primary btn-sm" id="btn-add-outline">

                        <i class="bi bi-plus-lg"></i>
                        Tambah Outline

                    </button>

                </div>


                <div id="outline-container">

                    @php

                        $outlines = old(
                            'outlines',
                            isset($training)
                                ? $training->outlineItems
                                    ->map(function ($outline) {
                                        return [
                                            'item_small_title' => $outline->item_small_title,
                                            'item_title' => $outline->item_title,
                                            'item_text' => $outline->item_text,
                                        ];
                                    })
                                    ->toArray()
                                : [],
                        );

                        // Saat create, tampilkan satu item kosong
                        if (empty($outlines)) {
                            $outlines = [
                                [
                                    'item_small_title' => '',
                                    'item_title' => '',
                                    'item_text' => '',
                                ],
                            ];
                        }

                    @endphp


                    @foreach ($outlines as $index => $outline)
                        <div class="outline-item border rounded p-3 mb-3">

                            <div class="row">

                                {{-- Small Title --}}
                                <div class="col-md-4 mb-3">

                                    <label class="form-label fw-semibold">
                                        Small Title
                                    </label>

                                    <input type="text" name="outlines[{{ $index }}][item_small_title]"
                                        class="form-control" placeholder="Contoh: Day 01"
                                        value="{{ $outline['item_small_title'] ?? '' }}">

                                </div>


                                {{-- Title --}}
                                <div class="col-md-5 mb-3">

                                    <label class="form-label fw-semibold">
                                        Title
                                    </label>

                                    <input type="text" name="outlines[{{ $index }}][item_title]"
                                        class="form-control" placeholder="Contoh: Introduction"
                                        value="{{ $outline['item_title'] ?? '' }}">

                                </div>


                                {{-- Delete --}}
                                <div class="col-md-3 mb-3 d-flex align-items-end">

                                    <button type="button" class="btn btn-outline-danger btn-remove-outline">

                                        <i class="bi bi-trash"></i>
                                        Hapus

                                    </button>

                                </div>


                                {{-- Text --}}
                                <div class="col-12">

                                    <label class="form-label fw-semibold">
                                        Description
                                    </label>

                                    <textarea name="outlines[{{ $index }}][item_text]" class="form-control" rows="4"
                                        placeholder="Masukkan deskripsi outline...">{{ $outline['item_text'] ?? '' }}</textarea>

                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         OTHER HEADERS
    ====================================================== --}}
    {{-- =====================================================
     WAJIB IKUT / AUDIENCE
====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">
                <h5 class="mb-0">
                    Wajib Ikut Section
                </h5>
            </div>

            <div class="card-body">

                {{-- Header --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Wajib Ikut Header Text
                    </label>

                    <input type="text" name="wajib_ikut_header_text" class="form-control"
                        placeholder="Contoh: Training ini cocok untuk..."
                        value="{{ old('wajib_ikut_header_text', $training->wajib_ikut_header_text ?? '') }}">

                </div>


                <hr class="my-4">


                {{-- Audience Header --}}
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h6 class="mb-0 fw-semibold">
                        Wajib Ikut Items
                    </h6>

                    <button type="button" class="btn btn-primary btn-sm" id="btn-add-audience">

                        <i class="bi bi-plus-lg"></i>
                        Tambah Item

                    </button>

                </div>


                {{-- Audience Items --}}
                <div id="audience-container">

                    @php

                        $audiences = old(
                            'audiences',
                            isset($training)
                                ? $training->audiences
                                    ->map(function ($audience) {
                                        return [
                                            'item_icon' => $audience->item_icon,
                                            'item_title' => $audience->item_title,
                                            'item_text' => $audience->item_text,
                                        ];
                                    })
                                    ->toArray()
                                : [],
                        );

                        // Saat create tampilkan satu item kosong
                        if (empty($audiences)) {
                            $audiences = [
                                [
                                    'item_icon' => '',
                                    'item_title' => '',
                                    'item_text' => '',
                                ],
                            ];
                        }

                    @endphp


                    @foreach ($audiences as $index => $audience)
                        <div class="audience-item border rounded p-3 mb-3">

                            <div class="row">

                                {{-- Icon --}}
                                <div class="col-md-3 mb-3">

                                    <label class="form-label fw-semibold">
                                        Icon
                                    </label>

                                    <input type="text" name="audiences[{{ $index }}][item_icon]"
                                        class="form-control" placeholder="Contoh: ri-user-line"
                                        value="{{ $audience['item_icon'] ?? '' }}">

                                    <small class="text-muted">
                                        Masukkan class/nama icon.
                                    </small>

                                </div>


                                {{-- Title --}}
                                <div class="col-md-4 mb-3">

                                    <label class="form-label fw-semibold">
                                        Title
                                    </label>

                                    <input type="text" name="audiences[{{ $index }}][item_title]"
                                        class="form-control" placeholder="Contoh: Supervisor"
                                        value="{{ $audience['item_title'] ?? '' }}">

                                </div>


                                {{-- Delete --}}
                                <div class="col-md-5 mb-3 d-flex align-items-end">

                                    <button type="button" class="btn btn-outline-danger btn-remove-audience">

                                        <i class="bi bi-trash"></i>
                                        Hapus

                                    </button>

                                </div>


                                {{-- Text --}}
                                <div class="col-12">

                                    <label class="form-label fw-semibold">
                                        Description
                                    </label>

                                    <input type="text" name="audiences[{{ $index }}][item_text]"
                                        class="form-control"
                                        placeholder="Contoh: Cocok untuk supervisor yang ingin meningkatkan kemampuan..."
                                        value="{{ $audience['item_text'] ?? '' }}">

                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

  {{-- =====================================================
     TESTIMONIAL
====================================================== --}}

<div class="col-12">

    <div class="card border-0 shadow-sm mb-4">

        <div class="card-header bg-white">

            <h5 class="mb-0">
                Testimonial Section
            </h5>

        </div>


        <div class="card-body">

            {{-- Header --}}
            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Testimonial Header Text
                    </label>

                    <input type="text"
                        name="testi_header_text"
                        class="form-control"
                        value="{{ old('testi_header_text', $training->testi_header_text ?? '') }}">

                </div>

            </div>


            <hr class="my-4">


            {{-- Testimonies --}}
            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Pilih Testimonial
                </label>

                <div class="text-muted small mb-3">
                    Pilih satu atau lebih testimonial yang akan ditampilkan pada training ini.
                </div>


                @php

                    $selectedTestimonies = old(
                        'testimonies',
                        isset($training)
                            ? $training->testimonies->pluck('id')->toArray()
                            : []
                    );

                @endphp


                <div class="row">

                    @forelse($testimonies as $testimony)

                        <div class="col-md-6 col-lg-4 mb-3">

                            <div class="border rounded p-3 h-100">

                                <div class="form-check">

                                    <input type="checkbox"
                                        class="form-check-input"
                                        name="testimonies[]"
                                        value="{{ $testimony->id }}"
                                        id="testimony_{{ $testimony->id }}"
                                        {{ in_array($testimony->id, $selectedTestimonies) ? 'checked' : '' }}>


                                    <label class="form-check-label w-100"
                                        for="testimony_{{ $testimony->id }}">

                                        <div class="d-flex align-items-start">

                                            {{-- Foto --}}
                                            <div class="me-3">

                                                @if ($testimony->foto)

                                                    <img src="{{ asset('storage/' . $testimony->foto) }}"
                                                        alt="{{ $testimony->name }}"
                                                        class="rounded-circle"
                                                        width="50"
                                                        height="50"
                                                        style="object-fit: cover;">

                                                @else

                                                    <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle"
                                                        style="width:50px;height:50px;">

                                                        <i class="mdi mdi-account fs-4"></i>

                                                    </div>

                                                @endif

                                            </div>


                                            {{-- Data --}}
                                            <div>

                                                <div class="fw-semibold">

                                                    {{ $testimony->name }}

                                                </div>


                                                <small class="text-muted">

                                                    {{ $testimony->position }}

                                                </small>


                                                <div class="text-warning mt-1">

                                                    @for ($i = 1; $i <= 5; $i++)

                                                        @if ($i <= $testimony->rating)

                                                            <i class="mdi mdi-star"></i>

                                                        @else

                                                            <i class="mdi mdi-star-outline"></i>

                                                        @endif

                                                    @endfor

                                                </div>

                                            </div>

                                        </div>


                                        {{-- Comment --}}
                                        <div class="text-muted small mt-2">

                                            {{ \Illuminate\Support\Str::limit($testimony->comment, 100) }}

                                        </div>

                                    </label>

                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="col-12">

                            <div class="alert alert-warning mb-0">

                                <i class="mdi mdi-alert-outline me-1"></i>

                                Belum ada testimonial.

                                <a href="{{ route('backoffice.testimonies.create') }}">
                                    Tambahkan testimonial terlebih dahulu.
                                </a>

                            </div>

                        </div>

                    @endforelse

                </div>

            </div>

        </div>

    </div>

</div>

    {{-- =====================================================
     PRICING
====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">
                <h5 class="mb-0">
                    Pricing Section
                </h5>
            </div>

            <div class="card-body">

                {{-- Pricing Header --}}
                <div class="row">

                    <div class="col-md-4 mb-3">

                        <label class="form-label fw-semibold">
                            Small Title
                        </label>

                        <input type="text" name="price_small_title" class="form-control"
                            value="{{ old('price_small_title', $training->price_small_title ?? '') }}">

                    </div>


                    <div class="col-md-4 mb-3">

                        <label class="form-label fw-semibold">
                            Title
                        </label>

                        <input type="text" name="price_title" class="form-control"
                            value="{{ old('price_title', $training->price_title ?? '') }}">

                    </div>


                    <div class="col-md-4 mb-3">

                        <label class="form-label fw-semibold">
                            Subtitle
                        </label>

                        <input type="text" name="price_subtitle" class="form-control"
                            value="{{ old('price_subtitle', $training->price_subtitle ?? '') }}">

                    </div>

                </div>


                <hr class="my-4">


                {{-- Price Details Header --}}
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <div>
                        <h6 class="mb-1 fw-semibold">
                            Price Details
                        </h6>

                        <small class="text-muted">
                            Maksimal 3 kategori harga.
                        </small>
                    </div>

                    <button type="button" class="btn btn-primary btn-sm" id="btn-add-price">

                        <i class="bi bi-plus-lg"></i>
                        Tambah Price

                    </button>

                </div>


                {{-- Price Items --}}
                <div id="price-container">

                    @php

                        $prices = old(
                            'prices',
                            isset($training)
                                ? $training->priceDetails
                                    ->map(function ($price) {
                                        return [
                                            'price_category' => $price->price_category,
                                            'price_early_bird' => $price->price_early_bird,
                                            'price_text_early_bird' => $price->price_text_early_bird,
                                            'price_reguler' => $price->price_reguler,
                                            'price_text_reguler' => $price->price_text_reguler,
                                        ];
                                    })
                                    ->toArray()
                                : [],
                        );

                        if (empty($prices)) {
                            $prices = [
                                [
                                    'price_category' => '',
                                    'price_early_bird' => '',
                                    'price_text_early_bird' => '',
                                    'price_reguler' => '',
                                    'price_text_reguler' => '',
                                ],
                            ];
                        }

                    @endphp


                    @foreach ($prices as $index => $price)
                        <div class="price-item border rounded p-3 mb-3">

                            <div class="row">

                                {{-- Category --}}
                                <div class="col-md-5 mb-3">

                                    <label class="form-label fw-semibold">
                                        Price Category
                                    </label>

                                    <input type="text" name="prices[{{ $index }}][price_category]"
                                        class="form-control" placeholder="Contoh: Public Training"
                                        value="{{ $price['price_category'] ?? '' }}">

                                </div>


                                {{-- Remove --}}
                                <div class="col-md-7 mb-3 d-flex align-items-end">

                                    <button type="button" class="btn btn-outline-danger btn-remove-price">

                                        <i class="bi bi-trash"></i>
                                        Hapus Price

                                    </button>

                                </div>


                                {{-- Early Bird --}}
                                <div class="col-md-6">

                                    <div class="border rounded p-3 h-100">

                                        <h6 class="fw-semibold mb-3">
                                            Early Bird
                                        </h6>

                                        <div class="mb-3">

                                            <label class="form-label">
                                                Price
                                            </label>

                                            <input type="text"
                                                name="prices[{{ $index }}][price_early_bird]"
                                                class="form-control" placeholder="Contoh: Rp 2.500.000"
                                                value="{{ $price['price_early_bird'] ?? '' }}">

                                        </div>

                                        <div>

                                            <label class="form-label">
                                                Text
                                            </label>

                                            <input type="text"
                                                name="prices[{{ $index }}][price_text_early_bird]"
                                                class="form-control"
                                                placeholder="Contoh: Berlaku sampai 20 Agustus 2026"
                                                value="{{ $price['price_text_early_bird'] ?? '' }}">

                                        </div>

                                    </div>

                                </div>


                                {{-- Reguler --}}
                                <div class="col-md-6">

                                    <div class="border rounded p-3 h-100">

                                        <h6 class="fw-semibold mb-3">
                                            Reguler
                                        </h6>

                                        <div class="mb-3">

                                            <label class="form-label">
                                                Price
                                            </label>

                                            <input type="text" name="prices[{{ $index }}][price_reguler]"
                                                class="form-control" placeholder="Contoh: Rp 3.000.000"
                                                value="{{ $price['price_reguler'] ?? '' }}">

                                        </div>

                                        <div>

                                            <label class="form-label">
                                                Text
                                            </label>

                                            <input type="text"
                                                name="prices[{{ $index }}][price_text_reguler]"
                                                class="form-control" placeholder="Contoh: Harga normal"
                                                value="{{ $price['price_text_reguler'] ?? '' }}">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

    {{-- =====================================================
     FACILITY
====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">
                <h5 class="mb-0">
                    Facility Section
                </h5>
            </div>

            <div class="card-body">

                {{-- Header --}}
                <div class="row">

                    <div class="col-md-4 mb-3">

                        <label class="form-label fw-semibold">
                            Small Title
                        </label>

                        <input type="text" name="facility_small_title" class="form-control"
                            value="{{ old('facility_small_title', $training->facility_small_title ?? '') }}">

                    </div>


                    <div class="col-md-4 mb-3">

                        <label class="form-label fw-semibold">
                            Title
                        </label>

                        <input type="text" name="facility_title" class="form-control"
                            value="{{ old('facility_title', $training->facility_title ?? '') }}">

                    </div>


                    <div class="col-md-4 mb-3">

                        <label class="form-label fw-semibold">
                            Subtitle
                        </label>

                        <input type="text" name="facility_subtitle" class="form-control"
                            value="{{ old('facility_subtitle', $training->facility_subtitle ?? '') }}">

                    </div>

                </div>


                <hr class="my-4">


                {{-- Facilities --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Pilih Facility
                    </label>

                    <div class="text-muted small mb-3">
                        Pilih satu atau lebih fasilitas yang tersedia pada training ini.
                    </div>


                    <div class="row">

                        @php
                            $selectedFacilities = old(
                                'facilities',
                                isset($training) ? $training->facilities->pluck('id')->toArray() : [],
                            );
                        @endphp


                        @forelse($facilities as $facility)
                            <div class="col-md-4 col-lg-3 mb-3">

                                <div class="border rounded p-3 h-100">

                                    <div class="form-check">

                                        <input type="checkbox" class="form-check-input" name="facilities[]"
                                            value="{{ $facility->id }}" id="facility_{{ $facility->id }}"
                                            {{ in_array($facility->id, $selectedFacilities) ? 'checked' : '' }}>

                                        <label class="form-check-label w-100" for="facility_{{ $facility->id }}">

                                            <div class="d-flex align-items-center">

                                                <div class="me-2 text-primary">

                                                    <i class="{{ $facility->icon }} fs-4"></i>

                                                </div>

                                                <div>

                                                    <div class="fw-semibold">
                                                        {{ $facility->name }}
                                                    </div>

                                                </div>

                                            </div>

                                        </label>

                                    </div>

                                </div>

                            </div>

                        @empty

                            <div class="col-12">

                                <div class="alert alert-warning mb-0">

                                    <i class="mdi mdi-alert-outline me-1"></i>

                                    Belum ada facility.

                                    <a href="{{ route('backoffice.facilities.create') }}">
                                        Tambahkan facility terlebih dahulu.
                                    </a>

                                </div>

                            </div>
                        @endforelse

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         SAVE
    ====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <a href="{{ route('backoffice.trainings.index') }}" class="btn btn-light">

                        Kembali

                    </a>


                    <button type="submit" class="btn btn-primary px-4">

                        <i class="mdi mdi-content-save-outline me-1"></i>

                        {{ isset($training) ? 'Simpan Perubahan' : 'Simpan Training' }}

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =====================================================
     IMAGE PREVIEW
====================================================== --}}

<script>
    document
        .getElementById('image')
        .addEventListener('change', function(event) {

            const file =
                event.target.files[0];

            if (!file) {
                return;
            }


            const reader =
                new FileReader();


            reader.onload = function(e) {

                const src =
                    e.target.result;


                /*
                 * Detail Preview
                 */

                const detail =
                    document.getElementById(
                        'detailPreview'
                    );

                detail.src = src;

                detail.classList
                    .remove('d-none');


                const detailEmpty =
                    document.getElementById(
                        'detailEmpty'
                    );

                if (detailEmpty) {

                    detailEmpty.classList
                        .add('d-none');

                }


                /*
                 * Thumb Preview
                 */

                const thumb =
                    document.getElementById(
                        'thumbPreview'
                    );

                thumb.src = src;

                thumb.classList
                    .remove('d-none');


                const thumbEmpty =
                    document.getElementById(
                        'thumbEmpty'
                    );

                if (thumbEmpty) {

                    thumbEmpty.classList
                        .add('d-none');

                }

            };


            reader.readAsDataURL(file);

        });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        const container = document.getElementById('benefit-container');
        const addButton = document.getElementById('btn-add-benefit');

        let benefitIndex = container.querySelectorAll('.benefit-item').length;

        addButton.addEventListener('click', function() {

            const html = `
            <div class="benefit-item border rounded p-3 mb-3">

                <div class="row">

                    <div class="col-md-5 mb-3">

                        <label class="form-label fw-semibold">
                            Benefit Title
                        </label>

                        <input type="text"
                            name="benefits[${benefitIndex}][item_title]"
                            class="form-control"
                            placeholder="Contoh: Sertifikat Pelatihan">

                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Benefit Text
                        </label>

                        <input type="text"
                            name="benefits[${benefitIndex}][item_text]"
                            class="form-control"
                            placeholder="Contoh: Mendapatkan sertifikat resmi">

                    </div>


                    <div class="col-md-1 mb-3 d-flex align-items-end">

                        <button type="button"
                            class="btn btn-outline-danger text-danger btn-remove-benefit w-100"
                            title="Hapus">

                            <i class="mdi mdi-delete"></i>

                        </button>

                    </div>

                </div>

            </div>
        `;

            container.insertAdjacentHTML('beforeend', html);

            benefitIndex++;
        });


        container.addEventListener('click', function(e) {

            const button = e.target.closest('.btn-remove-benefit');

            if (!button) {
                return;
            }

            const items = container.querySelectorAll('.benefit-item');

            // Jangan hapus jika hanya tersisa satu
            if (items.length <= 1) {
                items[0].querySelectorAll('input').forEach(input => {
                    input.value = '';
                });

                return;
            }

            button.closest('.benefit-item').remove();

        });

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const container = document.getElementById('reason-container');
        const addButton = document.getElementById('btn-add-reason');

        let reasonIndex = container.querySelectorAll('.reason-item').length;


        // Tambah Reason
        addButton.addEventListener('click', function() {

            const html = `
            <div class="reason-item border rounded p-3 mb-3">

                <div class="row">

                    <div class="col-md-5 mb-3">

                        <label class="form-label fw-semibold">
                            Reason Title
                        </label>

                        <input type="text"
                            name="reasons[${reasonIndex}][item_title]"
                            class="form-control"
                            placeholder="Contoh: Instruktur Berpengalaman">

                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Reason Text
                        </label>

                        <input type="text"
                            name="reasons[${reasonIndex}][item_text]"
                            class="form-control"
                            placeholder="Contoh: Dibimbing oleh instruktur profesional">

                    </div>


                    <div class="col-md-1 mb-3 d-flex align-items-end">

                        <button type="button"
                            class="btn btn-outline-danger btn-remove-reason w-100 text-danger"
                            title="Hapus">

                            <i class="mdi mdi-delete"></i>

                        </button>

                    </div>

                </div>

            </div>
        `;

            container.insertAdjacentHTML('beforeend', html);

            reasonIndex++;

        });


        // Hapus Reason
        container.addEventListener('click', function(e) {

            const button = e.target.closest('.btn-remove-reason');

            if (!button) {
                return;
            }

            const items = container.querySelectorAll('.reason-item');

            // Kalau hanya tersisa satu
            if (items.length <= 1) {

                items[0]
                    .querySelectorAll('input')
                    .forEach(input => input.value = '');

                return;
            }

            button.closest('.reason-item').remove();

        });

    });
</script>



@push('scripts')
    <script>
        $(document).ready(function() {

            const summernoteOptions = {
                height: 250,

                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            };


            // Why Paragraph
            $('#why_paragraph').summernote({
                ...summernoteOptions,
                placeholder: 'Masukkan penjelasan mengapa memilih training ini...'
            });


            // Course Items
            $('.course-editor').summernote({
                ...summernoteOptions,
                placeholder: 'Masukkan isi course...'
            });

        });
    </script>


    <script>
        $(document).ready(function() {

            const container = $('#course-container');

            let courseIndex = container.find('.course-item').length;


            // Initialize editor yang sudah ada
            $('.course-editor').summernote({
                height: 250,
                placeholder: 'Masukkan isi course...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            });


            // Tambah Course
            $('#btn-add-course').on('click', function() {

                const index = courseIndex++;

                const html = `
            <div class="course-item border rounded p-3 mb-4">

                <div class="row">

                    <div class="col-md-5 mb-3">

                        <label class="form-label fw-semibold">
                            Course Title
                        </label>

                        <input type="text"
                            name="courses[${index}][item_title]"
                            class="form-control"
                            placeholder="Contoh: Basic Training">

                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Course Subtitle
                        </label>

                        <input type="text"
                            name="courses[${index}][item_subtitle]"
                            class="form-control"
                            placeholder="Contoh: Pelatihan Dasar">

                    </div>


                    <div class="col-md-1 mb-3 d-flex align-items-end">

                        <button type="button"
                            class="btn btn-outline-danger btn-remove-course w-100">

                            <i class="mdi mdi-delete"></i>

                        </button>

                    </div>


                    <div class="col-12 mb-3">

                        <label class="form-label fw-semibold">
                            Course Content
                        </label>

                        <textarea
                            name="courses[${index}][item_text]"
                            class="form-control course-editor"
                            rows="8"
                            placeholder="Masukkan isi course..."></textarea>

                    </div>

                </div>

            </div>
        `;

                container.append(html);


                // Initialize Summernote pada item baru
                container
                    .find('.course-item')
                    .last()
                    .find('.course-editor')
                    .summernote({
                        height: 250,
                        placeholder: 'Masukkan isi course...',
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'italic', 'underline', 'clear']],
                            ['fontname', ['fontname']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture']],
                            ['view', ['fullscreen', 'codeview']]
                        ]
                    });

            });


            // Hapus Course
            container.on('click', '.btn-remove-course', function() {

                const items = container.find('.course-item');

                if (items.length <= 1) {

                    const item = items.first();

                    item.find('input').val('');

                    item.find('.course-editor').summernote('code', '');

                    return;
                }

                const item = $(this).closest('.course-item');

                // Hancurkan editor sebelum element dihapus
                item.find('.course-editor').summernote('destroy');

                item.remove();

            });

        });
    </script>
@endpush


<script>
    document.addEventListener('DOMContentLoaded', function() {

        const container = document.getElementById('outline-container');
        const addButton = document.getElementById('btn-add-outline');

        let outlineIndex = container.querySelectorAll('.outline-item').length;


        // Tambah Outline
        addButton.addEventListener('click', function() {

            const html = `
            <div class="outline-item border rounded p-3 mb-3">

                <div class="row">

                    <div class="col-md-4 mb-3">

                        <label class="form-label fw-semibold">
                            Small Title
                        </label>

                        <input type="text"
                            name="outlines[${outlineIndex}][item_small_title]"
                            class="form-control"
                            placeholder="Contoh: Day 01">

                    </div>


                    <div class="col-md-5 mb-3">

                        <label class="form-label fw-semibold">
                            Title
                        </label>

                        <input type="text"
                            name="outlines[${outlineIndex}][item_title]"
                            class="form-control"
                            placeholder="Contoh: Introduction">

                    </div>


                    <div class="col-md-3 mb-3 d-flex align-items-end">

                        <button type="button"
                            class="btn btn-outline-danger btn-remove-outline">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </button>

                    </div>


                    <div class="col-12">

                        <label class="form-label fw-semibold">
                            Description
                        </label>

                        <textarea
                            name="outlines[${outlineIndex}][item_text]"
                            class="form-control"
                            rows="4"
                            placeholder="Masukkan deskripsi outline..."></textarea>

                    </div>

                </div>

            </div>
        `;

            container.insertAdjacentHTML('beforeend', html);

            outlineIndex++;

        });


        // Hapus Outline
        container.addEventListener('click', function(e) {

            const button = e.target.closest('.btn-remove-outline');

            if (!button) {
                return;
            }

            const items = container.querySelectorAll('.outline-item');

            // Jika hanya tersisa satu
            if (items.length <= 1) {

                items[0]
                    .querySelectorAll('input, textarea')
                    .forEach(input => input.value = '');

                return;
            }

            button.closest('.outline-item').remove();

        });

    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        const container = document.getElementById('audience-container');
        const addButton = document.getElementById('btn-add-audience');

        let audienceIndex = container.querySelectorAll('.audience-item').length;


        // Tambah Audience
        addButton.addEventListener('click', function() {

            const html = `
            <div class="audience-item border rounded p-3 mb-3">

                <div class="row">

                    <div class="col-md-3 mb-3">

                        <label class="form-label fw-semibold">
                            Icon
                        </label>

                        <input type="text"
                            name="audiences[${audienceIndex}][item_icon]"
                            class="form-control"
                            placeholder="Contoh: ri-user-line">

                        <small class="text-muted">
                            Masukkan class/nama icon.
                        </small>

                    </div>


                    <div class="col-md-4 mb-3">

                        <label class="form-label fw-semibold">
                            Title
                        </label>

                        <input type="text"
                            name="audiences[${audienceIndex}][item_title]"
                            class="form-control"
                            placeholder="Contoh: Supervisor">

                    </div>


                    <div class="col-md-5 mb-3 d-flex align-items-end">

                        <button type="button"
                            class="btn btn-outline-danger btn-remove-audience">

                            <i class="bi bi-trash"></i>
                            Hapus

                        </button>

                    </div>


                    <div class="col-12">

                        <label class="form-label fw-semibold">
                            Description
                        </label>

                        <input type="text"
                            name="audiences[${audienceIndex}][item_text]"
                            class="form-control"
                            placeholder="Contoh: Cocok untuk supervisor yang ingin meningkatkan kemampuan...">

                    </div>

                </div>

            </div>
        `;

            container.insertAdjacentHTML('beforeend', html);

            audienceIndex++;

        });


        // Hapus Audience
        container.addEventListener('click', function(e) {

            const button = e.target.closest('.btn-remove-audience');

            if (!button) {
                return;
            }

            const items = container.querySelectorAll('.audience-item');

            // Jika hanya tersisa satu
            if (items.length <= 1) {

                items[0]
                    .querySelectorAll('input')
                    .forEach(input => input.value = '');

                return;
            }

            button.closest('.audience-item').remove();

        });

    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        const container = document.getElementById('price-container');
        const addButton = document.getElementById('btn-add-price');

        let priceIndex = container.querySelectorAll('.price-item').length;

        function updateAddButton() {

            const total = container.querySelectorAll('.price-item').length;

            if (total >= 3) {
                addButton.style.display = 'none';
            } else {
                addButton.style.display = '';
            }
        }


        // Initial
        updateAddButton();


        // Tambah Price
        addButton.addEventListener('click', function() {

            const total = container.querySelectorAll('.price-item').length;

            if (total >= 3) {
                return;
            }

            const html = `
            <div class="price-item border rounded p-3 mb-3">

                <div class="row">

                    <div class="col-md-5 mb-3">

                        <label class="form-label fw-semibold">
                            Price Category
                        </label>

                        <input type="text"
                            name="prices[${priceIndex}][price_category]"
                            class="form-control"
                            placeholder="Contoh: Public Training">

                    </div>


                    <div class="col-md-7 mb-3 d-flex align-items-end">

                        <button type="button"
                            class="btn btn-outline-danger btn-remove-price">

                            <i class="bi bi-trash"></i>
                            Hapus Price

                        </button>

                    </div>


                    <div class="col-md-6">

                        <div class="border rounded p-3 h-100">

                            <h6 class="fw-semibold mb-3">
                                Early Bird
                            </h6>

                            <div class="mb-3">

                                <label class="form-label">
                                    Price
                                </label>

                                <input type="text"
                                    name="prices[${priceIndex}][price_early_bird]"
                                    class="form-control"
                                    placeholder="Contoh: Rp 2.500.000">

                            </div>

                            <div>

                                <label class="form-label">
                                    Text
                                </label>

                                <input type="text"
                                    name="prices[${priceIndex}][price_text_early_bird]"
                                    class="form-control"
                                    placeholder="Contoh: Berlaku sampai 20 Agustus 2026">

                            </div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="border rounded p-3 h-100">

                            <h6 class="fw-semibold mb-3">
                                Reguler
                            </h6>

                            <div class="mb-3">

                                <label class="form-label">
                                    Price
                                </label>

                                <input type="text"
                                    name="prices[${priceIndex}][price_reguler]"
                                    class="form-control"
                                    placeholder="Contoh: Rp 3.000.000">

                            </div>

                            <div>

                                <label class="form-label">
                                    Text
                                </label>

                                <input type="text"
                                    name="prices[${priceIndex}][price_text_reguler]"
                                    class="form-control"
                                    placeholder="Contoh: Harga normal">

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        `;

            container.insertAdjacentHTML('beforeend', html);

            priceIndex++;

            updateAddButton();

        });


        // Hapus Price
        container.addEventListener('click', function(e) {

            const button = e.target.closest('.btn-remove-price');

            if (!button) {
                return;
            }

            const items = container.querySelectorAll('.price-item');

            if (items.length <= 1) {

                items[0]
                    .querySelectorAll('input')
                    .forEach(input => input.value = '');

                return;
            }

            button.closest('.price-item').remove();

            updateAddButton();

        });

    });
</script>
