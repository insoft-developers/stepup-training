@extends('backoffice.master')

@section('content')

    <div class="container-fluid">

        {{-- Header --}}
        <div class="py-3 py-lg-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="mb-1 fw-bold">
                        Tambah Testimony
                    </h3>

                    <p class="text-muted mb-0">
                        Tambahkan testimonial peserta training.
                    </p>

                </div>

                <a href="{{ route('backoffice.testimonies.index') }}"
                    class="btn btn-light">

                    <i class="mdi mdi-arrow-left me-1"></i>

                    Kembali

                </a>

            </div>

        </div>


        {{-- Form --}}
        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white border-bottom">

                <div class="d-flex align-items-center">

                    <div class="me-3">

                        <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded"
                            style="width:42px;height:42px;">

                            <i class="mdi mdi-comment-quote-outline fs-4"></i>

                        </div>

                    </div>

                    <div>

                        <h5 class="mb-1">
                            Testimony Information
                        </h5>

                        <small class="text-muted">
                            Masukkan informasi testimonial.
                        </small>

                    </div>

                </div>

            </div>


            <div class="card-body">

                <form action="{{ route('backoffice.testimonies.store') }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="row">

                        {{-- Foto --}}
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                Foto
                            </label>

                            <input type="file"
                                name="foto"
                                class="form-control @error('foto') is-invalid @enderror"
                                accept="image/*">

                            @error('foto')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                            <small class="text-muted">
                                JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
                            </small>

                        </div>


                        {{-- Name --}}
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                Name
                            </label>

                            <input type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}"
                                placeholder="Nama peserta">

                            @error('name')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Position --}}
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                Position
                            </label>

                            <input type="text"
                                name="position"
                                class="form-control @error('position') is-invalid @enderror"
                                value="{{ old('position') }}"
                                placeholder="Contoh: HR Manager">

                            @error('position')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Comment --}}
                        <div class="col-md-8 mb-3">

                            <label class="form-label fw-semibold">
                                Comment
                            </label>

                            <textarea name="comment"
                                rows="5"
                                class="form-control @error('comment') is-invalid @enderror"
                                placeholder="Tuliskan testimonial...">{{ old('comment') }}</textarea>

                            @error('comment')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Rating --}}
                        <div class="col-md-4 mb-3">

                            <label class="form-label fw-semibold">
                                Rating
                            </label>

                            <input type="number"
                                name="rating"
                                class="form-control @error('rating') is-invalid @enderror"
                                value="{{ old('rating', 5) }}"
                                min="0"
                                max="5"
                                step="0.1"
                                placeholder="5">

                            @error('rating')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                            <small class="text-muted">
                                Nilai 0 sampai 5.
                            </small>

                        </div>

                    </div>


                    <div class="mt-3">

                        <button type="submit"
                            class="btn btn-primary">

                            <i class="mdi mdi-content-save-outline me-1"></i>

                            Simpan Testimony

                        </button>

                        <a href="{{ route('backoffice.testimonies.index') }}"
                            class="btn btn-light">

                            Batal

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection