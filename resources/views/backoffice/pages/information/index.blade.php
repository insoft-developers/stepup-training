@extends('backoffice.master')

@section('content')
<div class="container-fluid">

    {{-- Header --}}
    <div class="py-3 mb-2">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h3 class="mb-1 fw-bold">Informasi Website</h3>
                <p class="text-muted mb-0">
                    Kelola identitas dan media sosial website Anda
                </p>
            </div>
        </div>
    </div>

    {{-- Alert --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="mdi mdi-check-circle me-1"></i>
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('backoffice.information.update', $information->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            {{-- KIRI --}}
            <div class="col-lg-8">

                {{-- Informasi Utama --}}
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white border-bottom">
                        <h5 class="mb-0">
                            <i class="mdi mdi-domain text-primary me-2"></i>
                            Informasi Utama
                        </h5>
                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Website</label>
                            <input type="text" name="title"
                                class="form-control"
                                value="{{ old('title',$information->title) }}"
                                placeholder="Contoh : Step Up Training">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Alamat</label>
                            <textarea name="address" rows="3"
                                class="form-control"
                                placeholder="Masukkan alamat lengkap">{{ old('address',$information->address) }}</textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" name="email"
                                    class="form-control"
                                    value="{{ old('email',$information->email) }}"
                                    placeholder="info@email.com">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">WhatsApp</label>
                                <input type="text" name="whatsapp"
                                    class="form-control"
                                    value="{{ old('whatsapp',$information->whatsapp) }}"
                                    placeholder="62812xxxxxxx">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">General CTA Text</label>
                                <input type="text" name="general_cta_text"
                                    class="form-control"
                                    value="{{ old('general_cta_text',$information->general_cta_text) }}"
                                    placeholder="Join Now, Get Started etc">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">General CTA Link</label>
                                <input type="text" name="general_cta_link"
                                    class="form-control"
                                    value="{{ old('general_cta_link',$information->general_cta_link) }}"
                                    placeholder="tuliskan url kemana website akan redirect saat tombol di klik">
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Footer --}}
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white border-bottom">
                        <h5 class="mb-0">
                            <i class="mdi mdi-view-dashboard text-success me-2"></i>
                            Footer Website
                        </h5>
                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Footer Title</label>
                            <textarea name="footer_title"
                                class="form-control">{{ old('footer_title',$information->footer_title) }}</textarea>
                        </div>

                        <div class="mb-0">
                            <label class="form-label fw-semibold">Footer Contact Title</label>
                            <textarea 
                                name="footer_contact_title"
                                class="form-control"
                                placeholder="Contoh : Hubungi Kami">{{ old('footer_contact_title',$information->footer_contact_title) }}</textarea>
                        </div>

                    </div>
                </div>

            </div>

            {{-- KANAN --}}
            <div class="col-lg-4">

                {{-- Media Sosial --}}
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <h5 class="mb-0">
                            <i class="mdi mdi-share-variant text-danger me-2"></i>
                            Media Sosial
                        </h5>
                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="mdi mdi-facebook text-primary me-1"></i>
                                Facebook
                            </label>
                            <input type="text"
                                name="facebook"
                                class="form-control"
                                value="{{ old('facebook',$information->facebook) }}"
                                placeholder="facebook.com/...">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="mdi mdi-instagram text-danger me-1"></i>
                                Instagram
                            </label>
                            <input type="text"
                                name="instagram"
                                class="form-control"
                                value="{{ old('instagram',$information->instagram) }}"
                                placeholder="instagram.com/...">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="mdi mdi-youtube text-danger me-1"></i>
                                YouTube
                            </label>
                            <input type="text"
                                name="youtube"
                                class="form-control"
                                value="{{ old('youtube',$information->youtube) }}"
                                placeholder="youtube.com/...">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="mdi mdi-music-note text-dark me-1"></i>
                                TikTok
                            </label>
                            <input type="text"
                                name="tiktok"
                                class="form-control"
                                value="{{ old('tiktok',$information->tiktok) }}"
                                placeholder="tiktok.com/@...">
                        </div>

                        <hr>

                        <button type="submit" class="btn btn-primary w-100 py-2">
                            <i class="mdi mdi-content-save me-1"></i>
                            Simpan Perubahan
                        </button>

                    </div>
                </div>

            </div>

        </div>
    </form>

</div>
@endsection