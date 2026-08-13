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

                <label class="form-label fw-semibold">
                    Client Header Text
                </label>

                <input type="text" name="client_header_text" class="form-control"
                    value="{{ old('client_header_text', $training->client_header_text ?? '') }}">

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

                <label class="form-label fw-semibold">
                    Why Paragraph
                </label>

                <textarea name="why_paragraph" rows="5" class="form-control">{{ old('why_paragraph', $training->why_paragraph ?? '') }}</textarea>

            </div>

        </div>

    </div>


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

            </div>

        </div>

    </div>


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

            </div>

        </div>

    </div>


    {{-- =====================================================
         OTHER HEADERS
    ====================================================== --}}

    <div class="col-12">

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white">

                <h5 class="mb-0">
                    Other Sections
                </h5>

            </div>

            <div class="card-body">

                <div class="row">

                    @foreach ([
        'wajib_ikut_header_text' => 'Wajib Ikut Header Text',

        'testi_header_text' => 'Testimonial Header Text',

        'price_small_title' => 'Price Small Title',

        'price_title' => 'Price Title',

        'price_subtitle' => 'Price Subtitle',

        'facility_small_title' => 'Facility Small Title',

        'facility_title' => 'Facility Title',

        'facility_subtitle' => 'Facility Subtitle',
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
