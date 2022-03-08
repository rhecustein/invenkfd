@extends('layouts.kfd')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('html/demo/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

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
                            <form class="offset">
                                <div class="row">
                                    <h4>Laporan <span class="badge bg-primary">Filter</span></h4>
                                    <hr>
                                    <div class="form-group col-md-4">
                                        <br>
                                        <label>Kategori</label>
                                        <select id="kateg" name="categ" class="form-control filter" onchange="filter()">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori as $filter)
                                            <option value="{{ $filter->id }}">{{ $filter->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <form action="{{ route('filter/tanggal') }}" method="GET">
                                        @csrf
                                        <div class="form-group col-md-4">
                                            <br>
                                            <label for="date">From</label>
                                            <input type="date" class="form-control input-sm" id="fromdate" name="fromdate" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <br>
                                            <label for="date">To</label>
                                            <input type="date" class="form-control input-sm" id="todate" name="todate" >
                                        </div>
                                        {{-- <div class="form-group col-md-4">
                                            <br>
                                            <button type="submit" class="btn btn-warning" name="search" title="search">Filter</button>
                                        </div> --}}
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>Data Laporan</h2>
                            <hr>
                            <a href="{{ route('exportExcel') }}">
                                <button class="btn btn-success">Export Excel</button>
                            </a>
                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table id="filterTable" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Jumlah</th>
                                                <th>keterangan</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inventaris as $inven)
                                                <tr>
                                                    <td>{{ $inven->nama_inventaris }}</td>
                                                    <td>{{ $inven->kategori->name }}</td>
                                                    <td>{{ $inven->qty_inventaris }}</td>
                                                    <td>{{ $inven->keterangan_inventaris }}</td>
                                                    <td>{{ $inven->created_at }}</td>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <script>

    const table = $('#filterTable').DataTable({
        "pageLength": 5,
        "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
        "bLengthChange": true,
        "bFilter": true,
        "processing": true,
        "bServerSide": true,
        "order": [[ 1, "asc" ]],
        "ajax": {
            url: "{{url('laporan_filter')}}",
            type: "POST",
            data:function(d){
                d._token = "{{csrf_token()}}",
                d.kateg = $("#kateg").val()
            }
        },
        columns:[
            {
                "render":function(data, type, row, meta){
                    return row.nama_inventaris
                }
            },
            {
                "render":function(data, type, row, meta){
                    return row.kategori.name
                }
            },
            {
                "render":function(data, type, row, meta){
                    return row.qty_inventaris
                }
            },
            {
                "render":function(data, type, row, meta){
                    return row.keterangan_inventaris
                }
            },
            {
                "render":function(data, type, row, meta){
                    return moment(row.created_at).format('DD-MM-yy')
                }
            }
        ]
    });

    function filter(){
        table.ajax.reload(null,false)
    }
    </script>
@endpush
