@extends('backoffice.master')

@section('content')

    <div class="container-fluid">

        {{-- Header --}}
        <div class="py-3 py-lg-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="mb-1 fw-bold">
                        Testimonies
                    </h3>

                    <p class="text-muted mb-0">
                        Kelola testimonial peserta training.
                    </p>

                </div>

                <a href="{{ route('backoffice.testimonies.create') }}"
                    class="btn btn-primary">

                    <i class="mdi mdi-plus me-1"></i>

                    Tambah Testimony

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


        {{-- Table --}}
        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white border-bottom">

                <h5 class="mb-1">
                    Daftar Testimony
                </h5>

                <small class="text-muted">
                    Total {{ $testimonies->total() }} testimony
                </small>

            </div>


            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-light">

                            <tr>

                                <th width="70">
                                    #
                                </th>

                                <th width="100">
                                    Foto
                                </th>

                                <th>
                                    Name
                                </th>

                                <th>
                                    Position
                                </th>

                                <th>
                                    Comment
                                </th>

                                <th width="120">
                                    Rating
                                </th>

                                <th width="150"
                                    class="text-end">
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($testimonies as $testimony)

                                <tr>

                                    {{-- NO --}}
                                    <td>
                                        {{ $testimonies->firstItem() + $loop->index }}
                                    </td>


                                    {{-- FOTO --}}
                                    <td>

                                        @if ($testimony->foto)

                                            <img src="{{ asset('storage/' . $testimony->foto) }}"
                                                alt="{{ $testimony->name }}"
                                                class="rounded-circle"
                                                width="55"
                                                height="55"
                                                style="object-fit: cover;">

                                        @else

                                            <div class="d-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle"
                                                style="width:55px;height:55px;">

                                                <i class="mdi mdi-account fs-3"></i>

                                            </div>

                                        @endif

                                    </td>


                                    {{-- NAME --}}
                                    <td>

                                        <div class="fw-semibold">
                                            {{ $testimony->name }}
                                        </div>

                                    </td>


                                    {{-- POSITION --}}
                                    <td>

                                        <span class="text-muted">
                                            {{ $testimony->position }}
                                        </span>

                                    </td>


                                    {{-- COMMENT --}}
                                    <td>

                                        <div style="max-width:350px;">

                                            {{ $testimony->comment }}

                                        </div>

                                    </td>


                                    {{-- RATING --}}
                                    <td>

                                        <div class="text-warning">

                                            @for ($i = 1; $i <= 5; $i++)

                                                @if ($i <= $testimony->rating)

                                                    <i class="mdi mdi-star"></i>

                                                @else

                                                    <i class="mdi mdi-star-outline"></i>

                                                @endif

                                            @endfor

                                        </div>

                                        <small class="text-muted">
                                            {{ number_format($testimony->rating, 1) }}
                                        </small>

                                    </td>


                                    {{-- ACTION --}}
                                    <td class="text-end">

                                        <a href="{{ route('backoffice.testimonies.edit', $testimony->id) }}"
                                            class="btn btn-sm btn-light">

                                            <i class="mdi mdi-pencil"></i>

                                        </a>


                                        <form action="{{ route('backoffice.testimonies.destroy', $testimony->id) }}"
                                            method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus testimony ini?')">

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

                                    <td colspan="7"
                                        class="text-center py-5">

                                        <i class="mdi mdi-comment-quote-outline fs-1 text-muted"></i>

                                        <div class="mt-2 text-muted">
                                            Belum ada testimony.
                                        </div>

                                        <a href="{{ route('backoffice.testimonies.create') }}"
                                            class="btn btn-primary btn-sm mt-3">

                                            <i class="mdi mdi-plus me-1"></i>

                                            Tambah Testimony

                                        </a>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>


            @if ($testimonies->hasPages())

                <div class="card-footer bg-white">

                    {{ $testimonies->links() }}

                </div>

            @endif

        </div>

    </div>

@endsection