@extends('layouts.kfd')

@section('content')

@section('sub-judul', 'Kategori')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<a href="{{ route('kategori.create') }}" class="btn btn-info btn-sm">Tambah Kategori</a>
<br> <br>

<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($kategori as $result => $hasil)
        <tr>
            <td>{{ $result + $kategori->firstitem() }}</td>
            <td>{{ $hasil->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $kategori->links() }}

@endsection