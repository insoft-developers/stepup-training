@extends('backoffice.master')

@section('content')

    <div class="container-fluid">

        {{-- Header --}}
        <div class="py-3 py-lg-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="mb-1 fw-bold">
                        Facilities
                    </h3>

                    <p class="text-muted mb-0">
                        Kelola fasilitas yang dapat digunakan pada training.
                    </p>

                </div>

                <a href="{{ route('backoffice.facilities.create') }}"
                    class="btn btn-primary">

                    <i class="mdi mdi-plus me-1"></i>

                    Tambah Facility

                </a>

            </div>

        </div>


        {{-- Success --}}
        @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show">

                <i class="mdi mdi-check-circle me-1"></i>

                {{ session('success') }}

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        {{-- Error --}}
        @if ($errors->any())

            <div class="alert alert-danger alert-dismissible fade show">

                <i class="mdi mdi-alert-circle me-1"></i>

                <strong>Terjadi kesalahan:</strong>

                <ul class="mb-0 mt-1">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        {{-- Facilities --}}
        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white border-bottom">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h5 class="mb-1">
                            Daftar Facility
                        </h5>

                        <small class="text-muted">
                            Total {{ $facilities->count() }} facility
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
                                    Icon
                                </th>

                                <th>
                                    Facility
                                </th>

                                <th width="150" class="text-end">
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($facilities as $facility)

                                <tr>

                                    {{-- NO --}}
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    {{-- ICON --}}
                                    <td>

                                        <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded"
                                            style="width:55px;height:55px;">

                                            <i class="{{ $facility->icon }} fs-3"></i>

                                        </div>

                                        <small class="text-muted d-block mt-1">
                                            {{ $facility->icon }}
                                        </small>

                                    </td>


                                    {{-- FACILITY --}}
                                    <td>

                                        <div class="fw-semibold">
                                            {{ $facility->name }}
                                        </div>

                                    </td>


                                    {{-- ACTION --}}
                                    <td class="text-end">

                                        <a href="{{ route('backoffice.facilities.edit', $facility->id) }}"
                                            class="btn btn-sm btn-light">

                                            <i class="mdi mdi-pencil"></i>

                                        </a>


                                        <form action="{{ route('backoffice.facilities.destroy', $facility->id) }}"
                                            method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus facility ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-sm btn-light text-danger">

                                                <i class="mdi mdi-delete"></i>

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="4"
                                        class="text-center py-5">

                                        <i class="mdi mdi-office-building-outline fs-1 text-muted"></i>

                                        <div class="mt-2 text-muted">
                                            Belum ada data facility.
                                        </div>

                                        <a href="{{ route('backoffice.facilities.create') }}"
                                            class="btn btn-primary btn-sm mt-3">

                                            <i class="mdi mdi-plus me-1"></i>

                                            Tambah Facility

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