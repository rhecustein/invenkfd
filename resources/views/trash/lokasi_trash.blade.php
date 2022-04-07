@extends('layouts.kfd')

@section('content')

@if (Session::has('lokasi-trash'))
<div class="alert alert-success" role="alert">
    {{ Session('lokasi-trash') }}
</div>
@endif

<div class="main">
    <div class="card">
        <div class="card-body">
            <h2>Lokasi Trash</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Lokasi</th>
                            <th scope="col">Nama Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lokasi as $result => $hasil)
                            <tr>
                                <th scope="row">{{ $result + $lokasi->firstitem() }}</th>
                                <td>{{ $hasil->kode_lokasi }}</td>
                                <td>{{ $hasil->nama_lokasi }}</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="{{ url('restore/lokasi/'.$hasil->id) }}" class="btn btn-success">Restore</a>
                                        <a href="{{ url('delete-permanent/lokasi/'.$hasil->id) }}" class="btn btn-danger">Delete Permanent</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $lokasi->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
