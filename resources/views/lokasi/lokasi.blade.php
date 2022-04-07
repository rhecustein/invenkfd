@extends('layouts.kfd')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection

@section('content')

@section('sub-judul', 'Lokasi for users')

@if (Session::has('lokasi'))
<div class="alert alert-success" role="alert">
    {{ Session('lokasi') }}
</div>
@endif

    <body>
        <div class="layout">
            <div class="horizontal-layout">
                <div class="container">
                    <div class="main">
                        <div class="card">
                            <div class="card-body">
                                <h2>Lokasi</h2>
                                <hr>
                                <a href="{{ route('lokasi.create') }}" class="btn btn-info">Tambah Lokasi</a>
                                <div class="mt-4">
                                    <div class="table-responsive">
                                        <table id="data-table" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Kode Lokasi</th>
                                                    <th scope="col">Nama Lokasi</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($lokasi as $result => $hasil)
                                                <tr>
                                                    <td>{{ $result + $lokasi->firstitem() }}</td>
                                                    <td>{{ $hasil->kode_lokasi }}</td>
                                                    <td>{{ $hasil->nama_lokasi }}</td>
                                                    <td>
                                                        <div class="d-grid gap-2 d-md-block">
                                                            <a href="{{ url('lokasi.edit/'.$hasil->id) }}" class="btn btn-success">Edit</a>
                                                            <a href="{{ url('lokasi.destroy/'.$hasil->id) }}" class="btn btn-danger">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

@endsection

@push('scripts')
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#data-table').DataTable();
        } );
    </script>
@endpush