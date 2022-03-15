@extends('layouts.kfd')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    {{-- <link rel="stylesheet" href="{{ ('html/demo/app/assets/css/export.css') }}"> --}}
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
                                    <h4>Laporan <span class="badge bg-primary mb-2">Filter</span></h4>
                                    <hr>
                                    <div class="form-group col-md-4">
                                        <label>Kategori</label>
                                        <select id="kateg" name="categ" class="form-control filter mt-2" onchange="filter()">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori as $filter)
                                            <option value="{{ $filter->id }}">{{ $filter->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <form action="{{ route('filter/tanggal') }}" method="GET">
                                        @csrf
                                        <div class="form-group col-md-4">
                                            <label for="date">From</label>
                                            <input type="date" class="form-control mt-2" id="fromdate" name="fromdate" onchange="filter()">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="date">To</label>
                                            <input type="date" class="form-control mt-2 " id="todate" name="todate" onchange="filter()">
                                        </div>
                                    </form>

                                    <div class="container mt-4 ">
                                        <ul class="nav-menu nav-menu-horizontal">
                                            <li class="nav-submenu">
                                                <a href="{{ route('laporan') }}">
                                                    <div class="nav-submenu-title btn btn-warning">
                                                        <i class="icon-rotate-cw feather text-white"></i>
                                                        <span class="text-white">Reset</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>Data Laporan</h2>
                            <hr>
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
            <!-- Content END -->
        </div>
    </div>
</body>


@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>

    <script>

        const table = $('#filterTable').DataTable({
            "pageLength": 10,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            "bLengthChange": true,
            "bFilter": true,
            "processing": true,
            "bServerSide": true,
            "order": [[ 0, "asc" ]],
            "ajax": {
                url: "{{url('laporan_filter')}}",
                type: "POST",
                data:function(d){
                    d._token = "{{csrf_token()}}",
                    d.kateg = $("#kateg").val(),
                    d.fromdate = $("#fromdate").val(),
                    d.todate = $("#todate").val()
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
            ],
            dom: "Blfrtip",
                buttons: [
                    {
                        text: 'csv',
                        extend: 'csvHtml5',
                    },
                    {
                        text: 'excel',
                        extend: 'excelHtml5',
                    },
                    {
                        text: 'pdf',
                        extend: 'pdfHtml5',
                    },
                    {
                        text: 'print',
                        extend: 'print',
                    },
                ],
                columnDefs: [{
                    orderable: false,
                    targets: -1
                }]
        });

        function filter(){
            table.ajax.reload(null,false)
        }


    </script>
@endpush
