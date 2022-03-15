@extends('layouts.kfd')

@section('content')

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

<div class="layout">
    <div class="horizontal-layout">
        <div class="container">
            <div class="main">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('kategori.store') }}" method="POST">
                            @csrf
                            <h2>Kategori <span class="badge bg-primary">Create</span></h2>
                            <hr>
                            <div class="mb-3">
                                <label for="">Kategori</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-success btn-block">Simpan Kategori</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
