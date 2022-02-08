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
                            <div class="row">
                                <h2>Filter</h2>
                                <hr>
                                <div class="col-md-4">
                                    <br>
                                    <label>Kategori</label>
                                    <select id="filter-kategori" class="form-control filter">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($kategori as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <label>Date Of Birth From</label>
                                    <input type="date" class="form-control" id="fromDate" name="fromDate">
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <label>Date Of Birth To</label>
                                    <input type="date" class="form-control" id="toDate" name="toDate">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-warning">Filter</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('exportExcel') }}">
                                <button class="btn btn-success">Export Excel</button>
                            </a>
                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table id="data-table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Jumlah</th>
                                                <th>keterangan</th>
                                                <th>Dibuat Tanggal</th>
                                                <th>Di Update Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inventaris as $inven => $hasil)
                                                <tr>
                                                    <td>{{ $hasil->nama_inventaris }}</td>
                                                    <td>{{ $hasil->kategori->name }}</td>
                                                    <td>{{ $hasil->qty_inventaris }}</td>
                                                    <td>{{ $hasil->keterangan_inventaris }}</td>
                                                    <td>{{ $hasil->created_at }}</td>
                                                    <td>{{ $hasil->updated_at }}</td>
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
