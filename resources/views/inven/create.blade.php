@extends('layouts.kfd')
@section('content')


@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

<form action="{{ url('store-data') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama_inventaris" id="formGroupExampleInput">
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <select class="form-control" name="id_kategori">
            <option holder>Pilih Kategori</option>
            {{-- @dump($kategori) --}}
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
    <a href="{{ route('inventaris') }}"><button class="btn btn-primary btn-block">Simpan Barang</button></a>
</form>



<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:300,600,700|Pragati+Narrow:700" rel="stylesheet">
<link rel="stylesheet" href="html/demo/app/assets/css/datepicker.css">

@endsection
