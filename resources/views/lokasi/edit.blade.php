@extends('layouts.kfd')
@section('content')

<form action="{{ url('update-lokasi/'.$lokasi->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="layout">
        <div class="horizontal-layout">
            <div class="container">
                <div class="main">
                    <div class="card">
                        <div class="card-body">
                            <h2>Lokasi <span class="badge bg-primary">Edit</span></h2>
                            <hr>

                            <div class="mb-3">
                                <label>Kode Lokasi</label>
                                <input type="text" class="form-control" value="{{ $lokasi->kode_lokasi }}" name="kode_lokasi" id="formGroupExampleInput">
                            </div>

                            <div class="mb-3">
                                <label>Nama Lokasi</label>
                                <input type="text" class="form-control" value="{{ $lokasi->nama_lokasi }}" name="nama_lokasi" id="formGroupExampleInput">
                            </div>

                            <a href="{{ route('lokasi.index') }}"><button type="submit" class="btn btn-success btn-block">Update</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:300,600,700|Pragati+Narrow:700" rel="stylesheet">
<link rel="stylesheet" href="html/demo/app/assets/css/datepicker.css">

@endsection
