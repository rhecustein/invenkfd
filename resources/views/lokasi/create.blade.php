@extends('layouts.kfd')
@section('content')


@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if (Session::has('lokasi'))
<div class="alert alert-success" role="alert">
    {{ Session('lokasi') }}
</div>
@endif

<form action="{{ route('lokasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="layout">
        <div class="horizontal-layout">
            <div class="container">
                <div class="main">
                    <div class="card">
                        <div class="card-body">
                            <h2>Lokasi <span class="badge bg-primary">Create</span></h2>
                            <hr>

                            <div class="mb-3">
                                <label>Kode Lokasi</label>
                                <input type="text" class="form-control" name="kode_lokasi" id="formGroupExampleInput">
                            </div>

                            <div class="mb-3">
                                <label>Nama Lokasi</label>
                                <input type="text" class="form-control" name="nama_lokasi" id="formGroupExampleInput">
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary btn-block">Simpan Lokasi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:300,600,700|Pragati+Narrow:700" rel="stylesheet">
<link rel="stylesheet" href="html/demo/app/assets/css/datepicker.css">

@endsection
