@extends('layouts.kfd')
@section('content')

<head>
    
</head>

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

<div class="datepicker datepicker-inline"
       data-view="month"
       data-target="#input"
       data-highlight-today="true">
    
    <div class="datepicker-head">
      <div class="btn-group">
        <button class="btn btn-default" data-prev="datepicker">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button class="btn btn-default" data-increase-view="datepicker">
          February, 2016
        </button>
        <button class="btn btn-default" data-next="datepicker">
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>
    </div>
    
    <div class="datepicker-body"></div>
    
    <div class="datepicker-head">
      <div class="btn-group">
        <button class="btn btn-default" data-prev="datepicker">
          <i class="fa fa-crosshairs"></i>
          Today
        </button>
        <button class="btn btn-default" data-increase-view="datepicker">
          <i class="fa fa-trash"></i>
          Clear
        </button>
      </div>
    </div>
    
  </div>
  
  <!-- } -->
  
  <input type="text"
         class="form-control"
         placeholder="Target for inline datepicker"
         id="input" /> 

<div class="mb-3">
    <a href="{{ route('inventoris') }}"><button class="btn btn-primary btn-block">Simpan Barang</button></a>
</div>

@endsection