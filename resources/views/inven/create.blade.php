@extends('layouts.kfd')
@section('content')


@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if (Session::has('message'))
<div class="alert alert-success" role="alert">
    {{ Session('message') }}
</div>
@endif

<form action="{{ url('store-data') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="layout">
        <div class="horizontal-layout">
            <div class="container">
                <div class="main">
                    <div class="card">
                        <div class="card-body">
                            <h2>Inventory <span class="badge bg-primary">Create</span></h2>
                            <hr>
                            <div class="mb-3">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" name="nama_inventaris" id="formGroupExampleInput">
                            </div>

                            <div class="mb-3">
                                <label>Kategori</label>
                                <select class="form-control" name="id_kategori">
                                    <option holder>Pilih Kategori</option>
                                    @foreach ($kategori as $result)
                                    <option value="{{ $result->id }}"> {{ $result->name }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="">Jumlah</label>
                                <input type="text" class="form-control" name="qty_inventaris" id="formGroupExampleInput">
                            </div>

                            <div class="mb-3">
                                <label>Keterangan Barang</label>
                                <textarea class="form-control" name="keterangan_inventaris"></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary btn-block">Simpan Barang</button>
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
