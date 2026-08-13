@extends('backoffice.master')

@section('content')

<div class="container-fluid">

    <div class="py-3 py-lg-4">

        <h3 class="mb-1 fw-bold">
            Tambah Training
        </h3>

        <p class="text-muted">
            Tambahkan program training baru.
        </p>

    </div>


    @if($errors->any())

        <div class="alert alert-danger">

            <strong>
                Terdapat kesalahan:
            </strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <form
        action="{{ route('backoffice.trainings.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        @include('backoffice.pages.trainings.form')

    </form>

</div>

@endsection