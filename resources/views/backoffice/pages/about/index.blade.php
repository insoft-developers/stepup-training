@extends('backoffice.master')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="py-3 mb-2">
        <div class="d-flex justify-content-between align-items-center">

            <div>
                <h3 class="mb-1 fw-bold">
                    About Website
                </h3>

                <p class="text-muted mb-0">
                    Kelola informasi About yang ditampilkan pada website.
                </p>
            </div>

        </div>
    </div>


    {{-- Success Alert --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show"
             role="alert">

            <i class="mdi mdi-check-circle me-1"></i>

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- Validation Error --}}
    @if($errors->any())

        <div class="alert alert-danger alert-dismissible fade show"
             role="alert">

            <strong>
                Terjadi kesalahan:
            </strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    <form action="{{ route('backoffice.about.update', $about->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        @method('PUT')


        <div class="row">

            {{-- =====================================================
                 LEFT
            ====================================================== --}}

            <div class="col-lg-8">


                {{-- CONTENT --}}
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-white border-bottom">

                        <h5 class="mb-1">

                            <i class="mdi mdi-information-outline text-primary me-2"></i>

                            About Content

                        </h5>

                        <small class="text-muted">
                            Informasi utama tentang website atau perusahaan.
                        </small>

                    </div>


                    <div class="card-body">


                        {{-- Small Title --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">

                                Small Title

                                <span class="text-danger">*</span>

                            </label>

                            <input type="text"
                                   name="small_title"
                                   class="form-control @error('small_title') is-invalid @enderror"
                                   value="{{ old('small_title', $about->small_title) }}"
                                   placeholder="Contoh: Tentang Kami">

                            @error('small_title')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Title --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">

                                Title

                                <span class="text-danger">*</span>

                            </label>

                            <input type="text"
                                   name="title_text"
                                   class="form-control @error('title_text') is-invalid @enderror"
                                   value="{{ old('title_text', $about->title_text) }}"
                                   placeholder="Masukkan judul utama">

                            @error('title_text')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- About Text --}}
                        <div class="mb-0">

                            <label class="form-label fw-semibold">

                                About Text

                                <span class="text-danger">*</span>

                            </label>

                            <textarea name="about_text"
                                      rows="5"
                                      class="form-control @error('about_text') is-invalid @enderror"
                                      placeholder="Tuliskan informasi tentang perusahaan atau website...">{{ old('about_text', $about->about_text) }}</textarea>

                            @error('about_text')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                    </div>

                </div>


                {{-- ITEMS --}}
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-white border-bottom">

                        <h5 class="mb-1">

                            <i class="mdi mdi-format-list-bulleted text-success me-2"></i>

                            About Items

                        </h5>

                        <small class="text-muted">
                            Dua poin informasi yang ingin ditampilkan.
                        </small>

                    </div>


                    <div class="card-body">

                        <div class="row">


                            {{-- ITEM 1 --}}
                            <div class="col-md-6">

                                <div class="p-3 border rounded mb-3">

                                    <div class="d-flex align-items-center mb-3">

                                        <span class="badge bg-primary rounded-circle p-2 me-2">
                                            1
                                        </span>

                                        <strong>
                                            Item Pertama
                                        </strong>

                                    </div>


                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Item Title
                                        </label>

                                        <input type="text"
                                               name="item_title_1"
                                               class="form-control"
                                               value="{{ old('item_title_1', $about->item_title_1) }}"
                                               placeholder="Judul item pertama">

                                    </div>


                                    <div class="mb-0">

                                        <label class="form-label fw-semibold">
                                            Item Subtitle
                                        </label>

                                        <input type="text"
                                               name="item_subtitle_1"
                                               class="form-control"
                                               value="{{ old('item_subtitle_1', $about->item_subtitle_1) }}"
                                               placeholder="Subjudul item pertama">

                                    </div>

                                </div>

                            </div>


                            {{-- ITEM 2 --}}
                            <div class="col-md-6">

                                <div class="p-3 border rounded mb-3">

                                    <div class="d-flex align-items-center mb-3">

                                        <span class="badge bg-success rounded-circle p-2 me-2">
                                            2
                                        </span>

                                        <strong>
                                            Item Kedua
                                        </strong>

                                    </div>


                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Item Title
                                        </label>

                                        <input type="text"
                                               name="item_title_2"
                                               class="form-control"
                                               value="{{ old('item_title_2', $about->item_title_2) }}"
                                               placeholder="Judul item kedua">

                                    </div>


                                    <div class="mb-0">

                                        <label class="form-label fw-semibold">
                                            Item Subtitle
                                        </label>

                                        <input type="text"
                                               name="item_subtitle_2"
                                               class="form-control"
                                               value="{{ old('item_subtitle_2', $about->item_subtitle_2) }}"
                                               placeholder="Subjudul item kedua">

                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>

                </div>


                {{-- CTA --}}
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-white border-bottom">

                        <h5 class="mb-0">

                            <i class="mdi mdi-bullhorn text-warning me-2"></i>

                            Call To Action

                        </h5>

                    </div>


                    <div class="card-body">

                        <label class="form-label fw-semibold">

                            CTA Text

                            <span class="text-danger">*</span>

                        </label>

                        <input type="text"
                               name="cta_text"
                               class="form-control"
                               value="{{ old('cta_text', $about->cta_text) }}"
                               placeholder="Contoh: Pelajari Selengkapnya">

                    </div>

                </div>


            </div>


            {{-- =====================================================
                 RIGHT
            ====================================================== --}}

            <div class="col-lg-4">


                {{-- IMAGE --}}
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-header bg-white border-bottom">

                        <h5 class="mb-1">

                            <i class="mdi mdi-image-outline text-danger me-2"></i>

                            About Image

                        </h5>

                        <small class="text-muted">
                            Gunakan gambar JPG, PNG atau WebP.
                        </small>

                    </div>


                    <div class="card-body">


                        {{-- IMAGE PREVIEW --}}
                        <div class="mb-3">

                            <div class="border rounded overflow-hidden"
                                 style="background:#f8f9fa;">

                                @if($about->image)

                                    <img src="{{ asset('storage/' . $about->image) }}"
                                         id="imagePreview"
                                         class="img-fluid w-100"
                                         style="height:260px; object-fit:cover;">

                                @else

                                    <img src="{{ asset('images/default-about.jpg') }}"
                                         id="imagePreview"
                                         class="img-fluid w-100"
                                         style="height:260px; object-fit:cover;">

                                @endif

                            </div>

                        </div>


                        {{-- FILE --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Ganti Image
                            </label>

                            <input type="file"
                                   name="image"
                                   id="image"
                                   class="form-control @error('image') is-invalid @enderror"
                                   accept="image/jpeg,image/png,image/webp">

                            @error('image')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                            <small class="text-muted d-block mt-2">
                                Maksimal 2MB.
                            </small>

                        </div>


                        {{-- SAVE --}}
                        <button type="submit"
                                class="btn btn-primary w-100 py-2">

                            <i class="mdi mdi-content-save me-1"></i>

                            Simpan Perubahan

                        </button>


                    </div>

                </div>


                {{-- INFO --}}
                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex">

                            <i class="mdi mdi-information-outline text-primary fs-3 me-3"></i>

                            <div>

                                <h6 class="fw-bold mb-1">
                                    Tips
                                </h6>

                                <p class="text-muted mb-0 small">
                                    Gunakan gambar dengan ukuran landscape
                                    agar tampilan About pada website terlihat
                                    lebih proporsional.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </form>

</div>


{{-- IMAGE PREVIEW --}}
<script>

document.getElementById('image').addEventListener('change', function(event) {

    const file = event.target.files[0];

    if (!file) {
        return;
    }

    const reader = new FileReader();

    reader.onload = function(e) {

        document.getElementById('imagePreview').src = e.target.result;

    };

    reader.readAsDataURL(file);

});

</script>

@endsection