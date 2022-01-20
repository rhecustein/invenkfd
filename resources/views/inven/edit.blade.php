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

<form action="{{ url('update-data/'.$inventaris->id) }}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" class="form-control" value="{{ $inventaris->nama_inventaris }}" name="nama_inventaris" id="formGroupExampleInput">
    </div>

        {{-- <div class="mb-3">
            <label>Kategori</label>
            <select class="form-control" name="id_kategori">
                <option holder>Pilih Kategori</option>
            </select>
        </div> --}}

    <div class="mb-3">
        <label for="">Jumlah</label>
        <input type="text" class="form-control" value="{{ $inventaris->qty_inventaris }}" name="qty_inventaris" id="formGroupExampleInput">
    </div>

    <div class="mb-3">
        <label>Keterangan Barang</label>
        <input type="text" class="form-control" value="{{ $inventaris->keterangan_inventaris }}" name="keterangan_inventaris" id="formGroupExampleInput">
    </div>
    <a href="{{ route('inventoris') }}"><button type="submit" class="btn btn-primary btn-block">Update</button></a>
</form>



<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:300,600,700|Pragati+Narrow:700" rel="stylesheet">
<link rel="stylesheet" href="html/demo/app/assets/css/datepicker.css">

@endsection
