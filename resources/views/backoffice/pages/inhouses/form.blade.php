<div class="row">


    {{-- =========================================
         LEFT
    ========================================== --}}

    <div class="col-lg-8">


        {{-- PROGRAM --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white border-bottom">

                <h5 class="mb-1">

                    <i class="mdi mdi-school-outline text-primary me-2"></i>

                    Informasi Program

                </h5>

                <small class="text-muted">

                    Informasi utama program Inhouse Training.

                </small>

            </div>


            <div class="card-body">


                {{-- TITLE --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Judul Program

                        <span class="text-danger">*</span>

                    </label>

                    <input type="text" name="title" class="form-control"
                        value="{{ old('title', $inhouse->title ?? '') }}" placeholder="Contoh: Leadership Training">

                </div>


                {{-- PARAGRAPH --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        Deskripsi

                        <span class="text-danger">*</span>

                    </label>

                    <textarea name="paragraph" rows="6" class="form-control" placeholder="Deskripsi program training...">{{ old('paragraph', $inhouse->paragraph ?? '') }}</textarea>

                </div>


                <div class="row">


                    {{-- DURATION --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Durasi

                            <span class="text-danger">*</span>

                        </label>

                        <input type="text" name="duration" class="form-control"
                            value="{{ old('duration', $inhouse->duration ?? '') }}" placeholder="Contoh: 2 Days">

                    </div>


                    {{-- AUDIENCE --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Audience

                            <span class="text-danger">*</span>

                        </label>

                        <input type="text" name="audience" class="form-control"
                            value="{{ old('audience', $inhouse->audience ?? '') }}"
                            placeholder="Contoh: Staff & Manager">

                    </div>


                    {{-- LOCATION --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            Location

                            <span class="text-danger">*</span>

                        </label>

                        <input type="text" name="location" class="form-control"
                            value="{{ old('location', $inhouse->location ?? '') }}" placeholder="Contoh: Jakarta">

                    </div>


                    {{-- CTA --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">

                            CTA Link

                            <span class="text-danger">*</span>

                        </label>

                        <input type="text" name="cta_link" class="form-control"
                            value="{{ old('cta_link', $inhouse->cta_link ?? '') }}" placeholder="Contoh: /contact">

                    </div>

                </div>


                {{-- THEME --}}
                <div class="mb-0">

                    <label class="form-label fw-semibold">
                        Tema
                        <span class="text-danger">*</span>
                    </label>

                    <input type="text" name="theme" class="form-control"
                        value="{{ old('theme', $inhouse->theme ?? '') }}"
                        placeholder="Contoh: Communication, Technology">

                    <small class="text-muted">
                        Masukkan tema pelatihan ini.
                    </small>

                </div>

                {{-- STATUS --}}
                <div class="mb-0 mt-3">

                    <label class="form-label fw-semibold">
                        Status
                        <span class="text-danger">*</span>
                    </label>

                    <select name="is_active" class="form-select">

                        <option value="1" {{ old('is_active', $inhouse->is_active ?? 1) == 1 ? 'selected' : '' }}>
                            Aktif
                        </option>

                        <option value="0" {{ old('is_active', $inhouse->is_active ?? 1) == 0 ? 'selected' : '' }}>
                            Tidak Aktif
                        </option>

                    </select>

                    <small class="text-muted">
                        Hanya data aktif yang akan ditampilkan di website.
                    </small>

                </div>

                

            </div>

        </div>

    </div>



    {{-- =========================================
         RIGHT
    ========================================== --}}

    <div class="col-lg-4">


        {{-- IMAGE --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white border-bottom">

                <h5 class="mb-1">

                    <i class="mdi mdi-image-outline text-primary me-2"></i>

                    Image

                </h5>

                <small class="text-muted">

                    JPG, PNG atau WebP maksimal 2MB.

                </small>

            </div>


            <div class="card-body">


                {{-- PREVIEW --}}
                <div class="border rounded p-2 mb-3" style="background:#f8f9fa;">

                    @if (isset($inhouse) && $inhouse->image)
                        <img src="{{ asset('storage/' . $inhouse->image) }}" id="imagePreview" class="img-fluid w-100"
                            style="
                                height:220px;
                                object-fit:cover;
                                border-radius:8px;
                            ">
                    @else
                        <div id="emptyImage" class="d-flex align-items-center justify-content-center"
                            style="height:220px;">

                            <div class="text-center text-muted">

                                <i class="mdi mdi-image-outline fs-1"></i>

                                <div>
                                    Preview Image
                                </div>

                            </div>

                        </div>


                        <img src="" id="imagePreview" class="img-fluid w-100 d-none"
                            style="
                                height:220px;
                                object-fit:cover;
                                border-radius:8px;
                            ">
                    @endif

                </div>


                {{-- FILE --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">

                        {{ isset($inhouse) ? 'Ganti Image' : 'Image' }}

                    </label>


                    <input type="file" name="image" id="image" class="form-control"
                        accept="image/jpeg,image/png,image/webp">

                </div>


                {{-- BUTTON --}}
                <button type="submit" class="btn btn-primary w-100 py-2">

                    <i class="mdi mdi-content-save me-1"></i>

                    {{ isset($inhouse) ? 'Simpan Perubahan' : 'Simpan Inhouse' }}

                </button>


                <a href="{{ route('backoffice.inhouses.index') }}" class="btn btn-light w-100 mt-2">

                    Kembali

                </a>

            </div>

        </div>

    </div>

</div>


{{-- IMAGE PREVIEW --}}

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


            reader.onload =
                function(e) {

                    const preview =
                        document.getElementById(
                            'imagePreview'
                        );


                    preview.src =
                        e.target.result;


                    preview.classList
                        .remove('d-none');


                    const emptyImage =
                        document.getElementById(
                            'emptyImage'
                        );


                    if (emptyImage) {

                        emptyImage.classList
                            .add('d-none');

                    }

                };


            reader.readAsDataURL(file);

        });
</script>
