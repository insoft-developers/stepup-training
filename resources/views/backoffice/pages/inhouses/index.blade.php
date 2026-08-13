@extends('backoffice.master')

@section('content')
    <div class="container-fluid">

        {{-- Header --}}
        <div class="py-3 py-lg-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="mb-1 fw-bold">
                        Inhouse Training
                    </h3>

                    <p class="text-muted mb-0">
                        Kelola program inhouse training yang ditampilkan pada website.
                    </p>

                </div>


                <a href="{{ route('backoffice.inhouses.create') }}" class="btn btn-success">

                    <i class="mdi mdi-plus me-1"></i>

                    Tambah Inhouse

                </a>

            </div>

        </div>


        {{-- Success --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">

                <i class="mdi mdi-check-circle-outline me-1"></i>

                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert">
                </button>

            </div>
        @endif

        {{-- EDIT JUDUL CLIENT --}}
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white border-bottom">

                <div class="d-flex align-items-center">

                    <div class="me-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded"
                            style="width:42px;height:42px;">

                            <i class="mdi mdi-format-title fs-4"></i>

                        </div>
                    </div>

                    <div>

                        <h5 class="mb-1">
                            Judul Section Inhouse Training
                        </h5>

                        <small class="text-muted">
                            Atur judul yang akan ditampilkan pada section Inhouse Training.
                        </small>

                    </div>

                </div>

            </div>


            <div class="card-body">

                <form action="{{ route('backoffice.inhouse.update.title') }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="row align-items-end">

                        <div class="col-lg-5">

                            <label class="form-label fw-semibold">
                                Judul Inhouse Training
                            </label>

                            <input type="text" name="inhouse_title" class="form-control"
                                value="{{ old('inhouse_title', $inhouseTitle ?? '') }}"
                                placeholder="Contoh: Our Clients">

                            @error('inhouse_title')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="col-lg-5">

                            <label class="form-label fw-semibold">
                                Subjudul Inhouse Training
                            </label>

                            <input type="text" name="inhouse_subtitle" class="form-control"
                                value="{{ old('inhouse_subtitle', $inhouseSubtitle ?? '') }}"
                                placeholder="Contoh: Keterangan tentang judul">

                            @error('inhouse_subtitle')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div style="margin-top: 15px"></div>

                         <div class="col-lg-5">

                            <label class="form-label fw-semibold">
                                Inhouse Traning Button Text
                            </label>

                            <input type="text" name="inhouse_traning_buttom_text" class="form-control"
                                value="{{ old('inhouse_traning_buttom_text', $inhouseButtonText ?? '') }}"
                                placeholder="Ubah text tombol pada setiap item inhouse training">

                            @error('inhouse_traning_buttom_text')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <div class="col-lg-5">

                            <label class="form-label fw-semibold">
                                Custom Text
                            </label>

                            <input type="text" name="custom_text" class="form-control"
                                value="{{ old('custom_text', $customText ?? '') }}"
                                placeholder="Contoh: Isi penawaran khusus disini...">

                            @error('custom_text')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                         <div style="margin-top: 15px"></div>

                        <div class="col-lg-5">

                            <label class="form-label fw-semibold">
                                CTA Custom Text
                            </label>

                            <input type="text" name="custom_cta_text" class="form-control"
                                value="{{ old('custom_cta_text', $customCtaText ?? '') }}"
                                placeholder="Contoh: Text pada tombol Custom Offer">

                            @error('custom_cta_text')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <div class="col-lg-5">

                            <label class="form-label fw-semibold">
                                CTA Custom Link
                            </label>

                            <input type="text" name="custom_cta_link" class="form-control"
                                value="{{ old('custom_cta_link', $customCtaLink ?? '') }}"
                                placeholder="Contoh: url kemana mengarah kalau tombil custom di klik">

                            @error('custom_cta_link')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        


                        <div class="col-lg-2 mt-3 mt-lg-0">

                            <button type="submit" class="btn btn-warning w-100">

                                <i class="mdi mdi-content-save-outline me-1"></i>

                                Simpan Judul

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>


        {{-- Card --}}
        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white border-bottom">

                <h5 class="mb-1">
                    Daftar Inhouse Training
                </h5>

                <small class="text-muted">
                    Total {{ $inhouses->count() }} program
                </small>

            </div>


            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-light">

                            <tr>

                                <th width="60">
                                    #
                                </th>

                                <th width="130">
                                    Image
                                </th>

                                <th>
                                    Program
                                </th>

                                <th>
                                    Theme
                                </th>

                                <th>
                                    Duration
                                </th>

                                <th>
                                    Audience
                                </th>

                                <th>
                                    Location
                                </th>
                                <th>Status</th>

                                <th width="140" class="text-end">

                                    Action

                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($inhouses as $inhouse)
                                <tr>

                                    {{-- Number --}}
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    {{-- Image --}}
                                    <td>

                                        @if ($inhouse->image)
                                            <img src="{{ asset('storage/' . $inhouse->image) }}" alt="{{ $inhouse->title }}"
                                                style="
                                                width:90px;
                                                height:60px;
                                                object-fit:cover;
                                                border-radius:8px;
                                            ">
                                        @else
                                            <div class="d-flex align-items-center justify-content-center"
                                                style="
                                                width:90px;
                                                height:60px;
                                                background:#f5f5f5;
                                                border-radius:8px;
                                            ">

                                                <i class="mdi mdi-image-outline fs-4 text-muted"></i>

                                            </div>
                                        @endif

                                    </td>


                                    {{-- Title --}}
                                    <td>

                                        <div class="fw-semibold">

                                            {{ $inhouse->title }}

                                        </div>

                                        <small class="text-muted">

                                            {{ Str::limit($inhouse->paragraph, 70) }}

                                        </small>

                                    </td>


                                    {{-- Theme --}}
                                    <td>

                                        @php

                                            $themeClasses = [
                                                'primary' => 'bg-primary',

                                                'secondary' => 'bg-secondary',

                                                'success' => 'bg-success',

                                                'danger' => 'bg-danger',

                                                'warning' => 'bg-warning text-dark',

                                                'info' => 'bg-info',

                                                'dark' => 'bg-dark',
                                            ];

                                        @endphp


                                        <span class="badge {{ $themeClasses[$inhouse->theme] ?? 'bg-secondary' }}">

                                            {{ ucfirst($inhouse->theme) }}

                                        </span>

                                    </td>


                                    {{-- Duration --}}
                                    <td>

                                        <span class="text-muted">

                                            <i class="mdi mdi-clock-outline me-1"></i>

                                            {{ $inhouse->duration }}

                                        </span>

                                    </td>


                                    {{-- Audience --}}
                                    <td>

                                        {{ $inhouse->audience }}

                                    </td>


                                    {{-- Location --}}
                                    <td>

                                        <i class="mdi mdi-map-marker-outline text-danger me-1"></i>

                                        {{ $inhouse->location }}

                                    </td>

                                    <td>

                                        @if ($inhouse->is_active == 1)
                                            <span class="badge bg-success">
                                                Aktif
                                            </span>
                                        @else
                                            <span class="badge bg-secondary">
                                                Tidak Aktif
                                            </span>
                                        @endif

                                    </td>


                                    {{-- Action --}}
                                    <td class="text-end">

                                        <a href="{{ route('backoffice.inhouses.edit', $inhouse->id) }}"
                                            class="btn btn-sm btn-light">

                                            <i class="mdi mdi-pencil"></i>

                                        </a>


                                        <form action="{{ route('backoffice.inhouses.destroy', $inhouse->id) }}"
                                            method="POST" class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus program ini?')">

                                            @csrf

                                            @method('DELETE')


                                            <button type="submit" class="btn btn-sm btn-light text-danger">

                                                <i class="mdi mdi-delete"></i>

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="8" class="text-center py-5">

                                        <i class="mdi mdi-school-outline fs-1 text-muted">
                                        </i>

                                        <div class="mt-2 text-muted">

                                            Belum ada data Inhouse Training.

                                        </div>


                                        <a href="{{ route('backoffice.inhouses.create') }}"
                                            class="btn btn-primary btn-sm mt-3">

                                            Tambah Inhouse

                                        </a>

                                    </td>

                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
@endsection
