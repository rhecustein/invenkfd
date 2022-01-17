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

<div class="mb-3">
    <label>Nama Barang</label>
    <input type="text" class="form-control" name="judul" id="formGroupExampleInput">
</div>

<div class="mb-3">
    <label>Kategori</label>
    <select class="form-control" name="category_id">
        <option holder>Pilih Kategori</option>
    </select>
</div>

<div class="mb-3">
    <label for="">Tags</label>
    <select class="form-control" name="tags[]">
        <option holder>Pilih Tag</option>
    </select>
</div>

<div class="mb-3">
    <label>Keterangan Barang</label>
    <textarea class="form-control" name="content"></textarea>
</div>

{{-- <div class="container mt-5" style="max-width: 450px">
    <div class="form-group">
        <div class='input-group date' id='datetimepicker'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
        </div>
    </div>
</div> --}}

<div class="mb-3">
    <a href="{{ route('inventoris') }}"><button class="btn btn-primary btn-block">Simpan Barang</button></a>
</div>

@endsection