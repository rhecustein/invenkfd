@extends('layouts.kfd')

@section('content')
    <h1>Menambahkan Kategori</h1>

@section('subjudul', 'Tambah Kategori')

@if (count($errors)>0)
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endforeach    
@endif

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}    
</div>    
@endif

<form action="{{ url('kategori.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Kategori</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary btn-block">Simpan Kategori</button>
    </div>
</form>
    
@endsection
