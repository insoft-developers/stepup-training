@extends('backoffice.master')

@section('content')

    <div class="container-fluid">

        {{-- Header --}}
        <div class="py-3 py-lg-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="mb-1 fw-bold">
                        Tambah Facility
                    </h3>

                    <p class="text-muted mb-0">
                        Tambahkan fasilitas baru untuk training.
                    </p>

                </div>

                <a href="{{ route('backoffice.facilities.index') }}"
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

                            <i class="mdi mdi-office-building-outline fs-4"></i>

                        </div>

                    </div>

                    <div>

                        <h5 class="mb-1">
                            Facility Information
                        </h5>

                        <small class="text-muted">
                            Masukkan informasi facility.
                        </small>

                    </div>

                </div>

            </div>


            <div class="card-body">

                <form action="{{ route('backoffice.facilities.store') }}"
                    method="POST">

                    @csrf

                    <div class="row">

                        {{-- Icon --}}
                        <div class="col-lg-4 mb-3">

                            <label class="form-label fw-semibold">
                                Icon
                            </label>

                            <input type="text"
                                name="icon"
                                class="form-control @error('icon') is-invalid @enderror"
                                value="{{ old('icon') }}"
                                placeholder="Contoh: mdi mdi-wifi">

                            @error('icon')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                            <small class="text-muted">
                                Masukkan class icon, contoh:
                                <code>mdi mdi-wifi</code>
                            </small>

                        </div>


                        {{-- Name --}}
                        <div class="col-lg-8 mb-3">

                            <label class="form-label fw-semibold">
                                Facility Name
                            </label>

                            <input type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}"
                                placeholder="Contoh: WiFi Gratis">

                            @error('name')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>

                    </div>


                    <div class="mt-3">

                        <button type="submit"
                            class="btn btn-primary">

                            <i class="mdi mdi-content-save-outline me-1"></i>

                            Simpan Facility

                        </button>

                        <a href="{{ route('backoffice.facilities.index') }}"
                            class="btn btn-light">

                            Batal

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection