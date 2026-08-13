@extends('backoffice.master')

@section('content')

<div class="container-fluid">

    <div class="py-3">

        <h3 class="mb-1 fw-bold">
            Tambah Client
        </h3>

        <p class="text-muted">
            Tambahkan client baru ke website.
        </p>

    </div>


    @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('backoffice.clients.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        @include('backoffice.pages.client.form')

    </form>

</div>

@endsection