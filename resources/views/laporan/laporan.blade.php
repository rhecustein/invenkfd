@extends('layouts.kfd')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap4.min.css"> --}}

    {{-- <link rel="stylesheet" href="{{ ('html/demo/app/assets/css/export.css') }}"> --}}
@endsection

@section('modal-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
<body>
    {{-- @dump($inventaris) --}}
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
                                        <a href="{{ route('laporan') }}" class="btn btn-warning">Reset Filter</a>

                                        @if ($errors->has('file'))
                                        <span classs="text-center">
                                        <strong>{{ $error->first('file') }}</strong>
                                        </span>
                                        @endif
                                        {{-- <a href="{{ route('exportlaporan') }}" class="btn btn-success">Export</a>
                                        <a href="#" data-toggle="modal" data-target="#importModal"><button class="btn btn-primary me-2">Import</button></a> --}}
                                        <form action="{{ route('importlaporan') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mt-4">
                                                <input type="file" name="file" class="form-group">
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-success">Import User Data</button>
                                            <a class="btn btn-warning" href="{{ route('exportlaporan') }}">Export User Data</a>
                                        </form>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <form action="{{ route('importlaporan') }}" method="POST" enctype="multipart/form-data">

                            <div class="modal-body">
                                    @csrf
                                    <div class="form-group">
                                        <input type="file" name="file" required="required">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Import File</button>
                                      </div>

                            </div>
                            {{-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Import File</button>
                            </div> --}}

                        </form>

                          </div>
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
                                            <th>No</th>
                                            <th>Qty</th>
                                            <th>Description</th>
                                            <th>Merk - Detail Spec</th>
                                            <th>Lokasi</th>
                                            <th>keterangan</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inventaris as $inven => $hasil)
                                            <tr>
                                                {{-- <th>{{ $inven + $inventaris->firstitem() }}</th> --}}
                                                <td>{{ $hasil->id }}</td>
                                                <td>{{ $hasil->qty_inventaris }}</td>
                                                <td>{{ $hasil->kategori->name }}</td>
                                                <td>{{ $hasil->nama_inventaris }}</td>
                                                <td>{{ $hasil->lokasi->nama_lokasi }}</td>
                                                <td>{{ $hasil->keterangan_inventaris }}</td>
                                                <td>{{ $hasil->created_at }}</td>
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
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>

    @push('modal-scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endpush

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
                    d.lokasi = $("#lokasi").val(),
                    d.fromdate = $("#fromdate").val(),
                    d.todate = $("#todate").val()
                }
            },
            columns:[
                {
                    "render":function(data, type, row, meta){
                        return row.id
                    }
                },
                {
                    "render":function(data, type, row, meta){
                        return row.qty_inventaris
                    }
                },
                {
                    "render":function(data, type, row, meta){
                        return row.kategori.name
                    }
                },
                {
                    "render":function(data, type, row, meta){
                        return row.nama_inventaris
                    }
                },
                {
                    "render":function(data, type, row, meta){
                        return row.lokasi.nama_lokasi
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
                // {
                //     text: 'csv',
                //     extend: 'csvHtml5',
                // },
                {
                    text: 'excel',
                    extend: 'excelHtml5',
                },
                // {
                //     text: 'pdf',
                //     extend: 'pdfHtml5',
                // },
                // {
                //     text: 'print',
                //     extend: 'print',
                // },
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
