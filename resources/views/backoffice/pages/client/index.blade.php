@extends('backoffice.master')

@section('content')
    <div class="container-fluid">

        {{-- Header --}}
        <div class="py-3 py-lg-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h3 class="mb-1 fw-bold">
                        Clients
                    </h3>

                    <p class="text-muted mb-0">
                        Kelola data client yang ditampilkan pada website.
                    </p>
                </div>

                <a href="{{ route('backoffice.clients.create') }}" class="btn btn-primary">

                    <i class="mdi mdi-plus me-1"></i>

                    Tambah Client

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
                            Judul Section Client
                        </h5>

                        <small class="text-muted">
                            Atur judul yang akan ditampilkan pada halaman client.
                        </small>

                    </div>

                </div>

            </div>


            <div class="card-body">

                <form action="{{ route('backoffice.clients.update-title') }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="row align-items-end">

                        <div class="col-lg-9">

                            <label class="form-label fw-semibold">
                                Judul Client
                            </label>

                            <input type="text" name="client_title" class="form-control"
                                value="{{ old('client_title', $clientTitle ?? 'Clients') }}"
                                placeholder="Contoh: Our Clients">

                            @error('client_title')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <div class="col-lg-3 mt-3 mt-lg-0">

                            <button type="submit" class="btn btn-primary w-100">

                                <i class="mdi mdi-content-save-outline me-1"></i>

                                Simpan Judul

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>


        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white border-bottom">

                <div class="d-flex justify-content-between align-items-center">

                    <div>
                        <h5 class="mb-1">
                            Daftar Client
                        </h5>

                        <small class="text-muted">
                            Total {{ $clients->count() }} client
                        </small>
                    </div>

                </div>

            </div>


            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-light">

                            <tr>

                                <th width="70">
                                    #
                                </th>

                                <th width="120">
                                    Image
                                </th>

                                <th>
                                    Client
                                </th>

                                <th>
                                    Color
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

                            @forelse($clients as $client)
                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    {{-- IMAGE --}}
                                    <td>

                                        @if ($client->image)
                                            <img src="{{ asset('storage/' . $client->image) }}"
                                                style="
                                                width:80px;
                                                height:55px;
                                                object-fit:contain;
                                                border:1px solid #eee;
                                                border-radius:8px;
                                             ">
                                        @else
                                            <div class="d-flex align-items-center justify-content-center"
                                                style="
                                                width:80px;
                                                height:55px;
                                                background:#f8f9fa;
                                                border:1px solid #eee;
                                                border-radius:8px;
                                             ">

                                                <i class="mdi mdi-image-outline text-muted fs-4"></i>

                                            </div>
                                        @endif

                                    </td>


                                    {{-- CLIENT --}}
                                    <td>

                                        <div class="fw-semibold">
                                            {{ $client->name }}
                                        </div>

                                        @if ($client->tagline)
                                            <small class="text-muted">
                                                {{ $client->tagline }}
                                            </small>
                                        @endif

                                    </td>


                                    {{-- COLOR --}}
                                    <td>

                                        @php
                                            $colorClasses = [
                                                'primary' => 'bg-primary',
                                                'secondary' => 'bg-secondary',
                                                'success' => 'bg-success',
                                                'danger' => 'bg-danger',
                                                'warning' => 'bg-warning',
                                                'info' => 'bg-info',
                                                'dark' => 'bg-dark',
                                            ];
                                        @endphp

                                        <span class="badge {{ $colorClasses[$client->color] ?? 'bg-secondary' }}">
                                            {{ ucfirst($client->color ?? 'secondary') }}
                                        </span>

                                    </td>


                                    {{-- STATUS --}}
                                    <td>

                                        @if ($client->is_active)
                                            <span class="badge bg-success-subtle text-success">
                                                Aktif
                                            </span>
                                        @else
                                            <span class="badge bg-danger-subtle text-danger">
                                                Nonaktif
                                            </span>
                                        @endif

                                    </td>


                                    {{-- ACTION --}}
                                    <td class="text-end">

                                        <a href="{{ route('backoffice.clients.edit', $client->id) }}"
                                            class="btn btn-sm btn-light">

                                            <i class="mdi mdi-pencil"></i>

                                        </a>


                                        <form action="{{ route('backoffice.clients.destroy', $client->id) }}"
                                            method="POST" class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus client ini?')">

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

                                    <td colspan="6" class="text-center py-5">

                                        <i class="mdi mdi-account-group-outline fs-1 text-muted"></i>

                                        <div class="mt-2 text-muted">
                                            Belum ada data client.
                                        </div>

                                        <a href="{{ route('backoffice.clients.create') }}"
                                            class="btn btn-primary btn-sm mt-3">

                                            Tambah Client

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
