@extends('layouts.kfd')

@section('content')

@section('subjudul', 'Tambah Role Users')

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

<form action="{{ route('role.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Roles</label>
        <input type="text" class="form-control" name="role" id="formGroupExampleInput">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary btn-block">Simpan Role</button>
    </div>
</form>
    
@endsection
