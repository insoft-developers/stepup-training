@extends('backoffice.master')

@section('content')
    <div class="container-fluid">

        {{-- Header --}}
        <div class="py-3 py-lg-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="mb-1 fw-bold">
                        Trainings
                    </h3>

                    <p class="text-muted mb-0">
                        Kelola program training yang ditampilkan pada website.
                    </p>

                </div>


                <a href="{{ route('backoffice.trainings.create') }}" class="btn btn-primary">

                    <i class="mdi mdi-plus me-1"></i>

                    Tambah Training

                </a>

            </div>

        </div>


        {{-- Success --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">

                <i class="mdi mdi-check-circle me-1"></i>

                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert">
                </button>

            </div>
        @endif


        {{-- Table --}}
        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white border-bottom">

                <h5 class="mb-1">
                    Daftar Training
                </h5>

                <small class="text-muted">
                    Total {{ $trainings->count() }} training
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
                                    Training
                                </th>

                                <th>
                                    Periode
                                </th>

                                <th>
                                    Theme
                                </th>
                                <th width="120">
                                    Status
                                </th>

                                <th width="150" class="text-end">

                                    Action

                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($trainings as $training)
                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    {{-- IMAGE --}}
                                    <td>

                                        @if ($training->thumb_image)
                                            <img src="{{ asset('storage/' . $training->thumb_image) }}"
                                                style="
                                                width:100px;
                                                height:65px;
                                                object-fit:cover;
                                                border-radius:8px;
                                                border:1px solid #eee;
                                            "
                                                alt="{{ $training->title }}">
                                        @else
                                            <div class="d-flex align-items-center justify-content-center"
                                                style="
                                                width:100px;
                                                height:65px;
                                                background:#f8f9fa;
                                                border-radius:8px;
                                            ">

                                                <i class="mdi mdi-image-outline fs-4 text-muted"></i>

                                            </div>
                                        @endif

                                    </td>


                                    {{-- TRAINING --}}
                                    <td>

                                        <div class="fw-semibold">

                                            {{ $training->title }}

                                        </div>

                                        <small class="text-muted">

                                            {{ Str::limit($training->paragraph, 80) }}

                                        </small>

                                    </td>


                                    {{-- DATE --}}
                                    <td>

                                        <div>

                                            <i class="mdi mdi-calendar-outline me-1"></i>

                                            {{ $training->start_at?->format('d M Y') }}

                                        </div>

                                        <small class="text-muted">

                                            s/d

                                            {{ $training->finish_at?->format('d M Y') }}

                                        </small>

                                    </td>


                                    {{-- THEME --}}
                                    <td>

                                        <span class="badge bg-light text-dark">

                                            {{ $training->theme }}

                                        </span>

                                    </td>

                                    <td>

                                        @if ($training->is_active)
                                            <span class="badge bg-success-subtle text-success">
                                                <i class="mdi mdi-check-circle-outline me-1"></i>
                                                Aktif
                                            </span>
                                        @else
                                            <span class="badge bg-danger-subtle text-danger">
                                                <i class="mdi mdi-close-circle-outline me-1"></i>
                                                Nonaktif
                                            </span>
                                        @endif

                                    </td>


                                    {{-- ACTION --}}
                                    <td class="text-end">

                                        <a href="{{ route('backoffice.trainings.edit', $training->id) }}"
                                            class="btn btn-sm btn-light">

                                            <i class="mdi mdi-pencil"></i>

                                        </a>


                                        <form
                                            action="{{ route('backoffice.trainings.destroy', $training->id) }}"
                                            method="POST" class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus training ini?')">

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

                                    <td colspan="7" class="text-center py-5">

                                        <i class="mdi mdi-school-outline fs-1 text-muted">
                                        </i>

                                        <div class="mt-2 text-muted">

                                            Belum ada data training.

                                        </div>

                                        <a href="{{ route('backoffice.trainings.create') }}"
                                            class="btn btn-primary btn-sm mt-3">

                                            Tambah Training

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
