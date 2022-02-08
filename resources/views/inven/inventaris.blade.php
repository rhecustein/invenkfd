@extends('layouts.kfd')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection

@section('content')

@if (Session::has('message'))
<div class="alert alert-success" role="alert">
    {{ Session('message') }}
</div>
@endif

<body>
    <div class="layout">
        <div class="horizontal-layout">
            <div class="container">
                <div class="main">
                    <div class="card">
                        <div class="card-body">
                            <h2>Inventory</h2>
                            <hr>
                            <a href="{{ route('inven.create') }}"><button class="btn btn-primary me-2">Tambah</button></a>
                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table id="data-table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inventaris as $inven => $hasil)
                                                <tr>
                                                    <th scope="row">{{ $inven + $inventaris->firstitem() }}</th>
                                                    <td>{{ $hasil->nama_inventaris }}</td>
                                                    <td>{{ $hasil->kategori->name }}</td>
                                                    <td>{{ $hasil->qty_inventaris }}</td>
                                                    <td>{{ $hasil->keterangan_inventaris }}</td>
                                                    <td>
                                                        <div class="d-grid gap-2 d-md-block">
                                                            <a href="{{ url('edit/'.$hasil->id) }}" class="btn btn-success">Edit</a>
                                                            <a href="{{ url('delete/'.$hasil->id) }}" class="btn btn-danger">Delete</a>
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
