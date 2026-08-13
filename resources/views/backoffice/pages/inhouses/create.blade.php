@extends('backoffice.master')

@section('content')

<div class="container-fluid">

    <div class="py-3">

        <h3 class="mb-1 fw-bold">
            Tambah Inhouse Training
        </h3>

        <p class="text-muted">
            Tambahkan program Inhouse Training baru.
        </p>

    </div>


    @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    <form
        action="{{ route('backoffice.inhouses.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        @include('backoffice.pages.inhouses.form')

    </form>

</div>

@endsection