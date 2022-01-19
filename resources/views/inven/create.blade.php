@extends('layouts.kfd')
@section('content')

{{-- <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
<div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div> --}}
<form action="{{ url('store-data') }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama_inventaris" id="formGroupExampleInput">
    </div>

    {{-- <div class="mb-3">
        <label>Kategori</label>
        <select class="form-control" name="id_kategori">
            <option holder>Pilih Kategori</option>
        </select>
    </div> --}}

    <div class="mb-3">
        <label for="">Jumlah</label>
        <input type="text" class="form-control" name="qty_inventaris" id="formGroupExampleInput">
    </div>

    <div class="mb-3">
        <label>Keterangan Barang</label>
        <textarea class="form-control" name="keterangan_inventaris"></textarea>
    </div>
    <a href="{{ route('inventoris') }}"><button class="btn btn-primary btn-block">Simpan Barang</button></a>
</form>



<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:300,600,700|Pragati+Narrow:700" rel="stylesheet">
<link rel="stylesheet" href="html/demo/app/assets/css/datepicker.css">

@endsection
