@extends('layouts.kfd')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection

@section('content')
<body>
    <div class="layout">
        <div class="horizontal-layout">
            <!-- Content START -->
            <div class="container">
                <div class="main">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-4">
                                <table id="data-table" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Jumlah</th>
                                            <th>keterangan</th>
                                            <th>Tanggal</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inventaris as $inven => $hasil)
                                            <tr>
                                                <td>{{ $hasil->nama_inventaris }}</td>
                                                <td>{{ $hasil->kategori->name }}</td>
                                                <td>{{ $hasil->qty_inventaris }}</td>
                                                <td>{{ $hasil->keterangan_inventaris }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content END -->
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
