@extends('backoffice.master')

@section('content')

    <div class="container-fluid">

        {{-- =====================================================
             HEADER
        ====================================================== --}}

        <div class="py-3 py-lg-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="mb-1 fw-bold">
                        Dashboard
                    </h3>

                    <p class="text-muted mb-0">
                        Selamat datang di Backoffice StepupTraining.id
                    </p>

                </div>

                <div>

                    <a href="{{ route('backoffice.trainings.create') }}"
                        class="btn btn-primary">

                        <i class="mdi mdi-plus me-1"></i>

                        Tambah Training

                    </a>

                </div>

            </div>

        </div>


        {{-- =====================================================
             STATISTICS
        ====================================================== --}}

        <div class="row">


            {{-- Training --}}
            <div class="col-xl-3 col-md-6">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <p class="text-muted mb-1">
                                    Total Training
                                </p>

                                <h3 class="mb-0 fw-bold">
                                    {{ $totalTrainings }}
                                </h3>

                            </div>

                            <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded"
                                style="width:55px;height:55px;">

                                <i class="mdi mdi-school-outline fs-3"></i>

                            </div>

                        </div>

                        <div class="mt-3">

                            <a href="{{ route('backoffice.trainings.index') }}"
                                class="text-primary text-decoration-none small">

                                Lihat Training
                                <i class="mdi mdi-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Client --}}
            <div class="col-xl-3 col-md-6">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <p class="text-muted mb-1">
                                    Total Client
                                </p>

                                <h3 class="mb-0 fw-bold">
                                    {{ $totalClients }}
                                </h3>

                            </div>

                            <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded"
                                style="width:55px;height:55px;">

                                <i class="mdi mdi-account-group-outline fs-3"></i>

                            </div>

                        </div>

                        <div class="mt-3">

                            <a href="{{ route('backoffice.clients.index') }}"
                                class="text-success text-decoration-none small">

                                Lihat Client
                                <i class="mdi mdi-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Testimony --}}
            <div class="col-xl-3 col-md-6">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <p class="text-muted mb-1">
                                    Total Testimonial
                                </p>

                                <h3 class="mb-0 fw-bold">
                                    {{ $totalTestimonies }}
                                </h3>

                            </div>

                            <div class="d-flex align-items-center justify-content-center bg-warning-subtle text-warning rounded"
                                style="width:55px;height:55px;">

                                <i class="mdi mdi-comment-quote-outline fs-3"></i>

                            </div>

                        </div>

                        <div class="mt-3">

                            <a href="{{ route('backoffice.testimonies.index') }}"
                                class="text-warning text-decoration-none small">

                                Lihat Testimonial
                                <i class="mdi mdi-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Facility --}}
            <div class="col-xl-3 col-md-6">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <p class="text-muted mb-1">
                                    Total Facility
                                </p>

                                <h3 class="mb-0 fw-bold">
                                    {{ $totalFacilities }}
                                </h3>

                            </div>

                            <div class="d-flex align-items-center justify-content-center bg-info-subtle text-info rounded"
                                style="width:55px;height:55px;">

                                <i class="mdi mdi-office-building-outline fs-3"></i>

                            </div>

                        </div>

                        <div class="mt-3">

                            <a href="{{ route('backoffice.facilities.index') }}"
                                class="text-info text-decoration-none small">

                                Lihat Facility
                                <i class="mdi mdi-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             SECOND STATISTICS
        ====================================================== --}}

        <div class="row">


            {{-- Upcoming --}}
            <div class="col-xl-4 col-md-6">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded me-3"
                                style="width:50px;height:50px;">

                                <i class="mdi mdi-calendar-clock fs-3"></i>

                            </div>

                            <div>

                                <div class="text-muted">
                                    Training Mendatang
                                </div>

                                <h4 class="mb-0 fw-bold">
                                    {{ $upcomingTrainings->count() }}
                                </h4>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- This Month --}}
            <div class="col-xl-4 col-md-6">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded me-3"
                                style="width:50px;height:50px;">

                                <i class="mdi mdi-calendar-month-outline fs-3"></i>

                            </div>

                            <div>

                                <div class="text-muted">
                                    Training Bulan Ini
                                </div>

                                <h4 class="mb-0 fw-bold">
                                    {{ $trainingsThisMonth }}
                                </h4>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Completed --}}
            <div class="col-xl-4 col-md-6">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex align-items-center">

                            <div class="d-flex align-items-center justify-content-center bg-secondary-subtle text-secondary rounded me-3"
                                style="width:50px;height:50px;">

                                <i class="mdi mdi-check-circle-outline fs-3"></i>

                            </div>

                            <div>

                                <div class="text-muted">
                                    Training Selesai
                                </div>

                                <h4 class="mb-0 fw-bold">
                                    {{ $completedTrainings }}
                                </h4>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             TRAINING TABLES
        ====================================================== --}}

        <div class="row">


            {{-- Training Mendatang --}}
            <div class="col-xl-7">

                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-white border-bottom">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <h5 class="mb-1">
                                    Training Mendatang
                                </h5>

                                <small class="text-muted">
                                    Jadwal training terdekat
                                </small>

                            </div>

                            <a href="{{ route('backoffice.trainings.index') }}"
                                class="btn btn-sm btn-light">

                                Lihat Semua

                            </a>

                        </div>

                    </div>


                    <div class="card-body p-0">

                        <div class="table-responsive">

                            <table class="table table-hover align-middle mb-0">

                                <thead class="table-light">

                                    <tr>

                                        <th>
                                            Training
                                        </th>

                                        <th>
                                            Tanggal
                                        </th>

                                        <th>
                                            Status
                                        </th>

                                    </tr>

                                </thead>


                                <tbody>

                                    @forelse($upcomingTrainings as $training)

                                        <tr>

                                            <td>

                                                <div class="fw-semibold">
                                                    {{ $training->title }}
                                                </div>

                                            </td>


                                            <td>

                                                <span class="text-muted">

                                                    {{ \Carbon\Carbon::parse($training->start_date)->translatedFormat('d M Y') }}

                                                </span>

                                            </td>


                                            <td>

                                                <span class="badge bg-primary-subtle text-primary">

                                                    Upcoming

                                                </span>

                                            </td>

                                        </tr>

                                    @empty

                                        <tr>

                                            <td colspan="3"
                                                class="text-center py-4 text-muted">

                                                <i class="mdi mdi-calendar-remove-outline fs-3"></i>

                                                <div class="mt-2">
                                                    Tidak ada training mendatang.
                                                </div>

                                            </td>

                                        </tr>

                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Training Terbaru --}}
            <div class="col-xl-5">

                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-white border-bottom">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <h5 class="mb-1">
                                    Training Terbaru
                                </h5>

                                <small class="text-muted">
                                    Training yang baru ditambahkan
                                </small>

                            </div>

                        </div>

                    </div>


                    <div class="card-body p-0">

                        <div class="list-group list-group-flush">

                            @forelse($recentTrainings as $training)

                                <div class="list-group-item">

                                    <div class="d-flex align-items-center">

                                        <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded me-3"
                                            style="width:45px;height:45px;">

                                            <i class="mdi mdi-school-outline fs-4"></i>

                                        </div>

                                        <div class="flex-grow-1">

                                            <div class="fw-semibold">

                                                {{ $training->title }}

                                            </div>

                                            <small class="text-muted">

                                                {{ $training->created_at->translatedFormat('d M Y H:i') }}

                                            </small>

                                        </div>

                                    </div>

                                </div>

                            @empty

                                <div class="text-center py-5 text-muted">

                                    Belum ada training.

                                </div>

                            @endforelse

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             QUICK ACTION
        ====================================================== --}}

        <div class="card border-0 shadow-sm mb-4">

            <div class="card-header bg-white border-bottom">

                <h5 class="mb-0">
                    Quick Action
                </h5>

            </div>


            <div class="card-body">

                <div class="row">


                    {{-- Training --}}
                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">

                        <a href="{{ route('backoffice.trainings.create') }}"
                            class="text-decoration-none">

                            <div class="border rounded p-3 h-100">

                                <div class="d-flex align-items-center">

                                    <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded me-3"
                                        style="width:45px;height:45px;">

                                        <i class="mdi mdi-school-outline fs-4"></i>

                                    </div>

                                    <div>

                                        <div class="fw-semibold text-dark">
                                            Tambah Training
                                        </div>

                                        <small class="text-muted">
                                            Buat training baru
                                        </small>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>


                    {{-- Client --}}
                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">

                        <a href="{{ route('backoffice.clients.create') }}"
                            class="text-decoration-none">

                            <div class="border rounded p-3 h-100">

                                <div class="d-flex align-items-center">

                                    <div class="d-flex align-items-center justify-content-center bg-success-subtle text-success rounded me-3"
                                        style="width:45px;height:45px;">

                                        <i class="mdi mdi-account-plus-outline fs-4"></i>

                                    </div>

                                    <div>

                                        <div class="fw-semibold text-dark">
                                            Tambah Client
                                        </div>

                                        <small class="text-muted">
                                            Tambah client baru
                                        </small>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>


                    {{-- Testimony --}}
                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">

                        <a href="{{ route('backoffice.testimonies.create') }}"
                            class="text-decoration-none">

                            <div class="border rounded p-3 h-100">

                                <div class="d-flex align-items-center">

                                    <div class="d-flex align-items-center justify-content-center bg-warning-subtle text-warning rounded me-3"
                                        style="width:45px;height:45px;">

                                        <i class="mdi mdi-comment-plus-outline fs-4"></i>

                                    </div>

                                    <div>

                                        <div class="fw-semibold text-dark">
                                            Tambah Testimonial
                                        </div>

                                        <small class="text-muted">
                                            Tambah testimonial
                                        </small>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>


                    {{-- Facility --}}
                    <div class="col-lg-3 col-md-6">

                        <a href="{{ route('backoffice.facilities.create') }}"
                            class="text-decoration-none">

                            <div class="border rounded p-3 h-100">

                                <div class="d-flex align-items-center">

                                    <div class="d-flex align-items-center justify-content-center bg-info-subtle text-info rounded me-3"
                                        style="width:45px;height:45px;">

                                        <i class="mdi mdi-office-building-plus-outline fs-4"></i>

                                    </div>

                                    <div>

                                        <div class="fw-semibold text-dark">
                                            Tambah Facility
                                        </div>

                                        <small class="text-muted">
                                            Tambah fasilitas
                                        </small>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>


                </div>

            </div>

        </div>

    </div>

@endsection