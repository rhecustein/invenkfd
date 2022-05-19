@extends('layouts.kfd')

@section('content')

@if (Session::has('message'))
<div class="alert alert-success" role="alert">
    {{ Session('message') }}
</div>
@endif

<div class="main">
    <div class="card">
        <div class="card-body">
            <h2>Inventaris Trash</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Inventaris</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventaris as $inven => $hasil)
                            <tr>
                                <th scope="row">{{ $inven + $inventaris->firstitem() }}</th>
                                <td>{{ $hasil->nama_inventaris }}</td>
                                <td>{{ $hasil->kategori->name }}</td>
                                <td>{{ $hasil->qty_inventaris }}</td>
                                <td>{{ $hasil->lokasi->nama_lokasi }}</td>
                                <td>{{ $hasil->keterangan_inventaris }}</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="{{ url('restore/'.$hasil->id) }}" class="btn btn-success">Restore</a>
                                        <a href="{{ url('delete-permanent/'.$hasil->id) }}" class="btn btn-danger">Delete Permanent</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $inventaris->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
