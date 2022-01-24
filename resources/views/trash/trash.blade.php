@extends('layouts.kfd')

@section('content')

    <div class="main">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventaris as $inven => $hasil)
                                <tr>
                                    <th scope="row">{{ $inven + $inventaris->firstitem() }}</th>
                                    <td>{{ $hasil->nama_inventaris }}</td>
                                    <td>{{ $hasil->id_kategori }}</td>
                                    <td>{{ $hasil->qty_inventaris }}</td>
                                    <td>{{ $hasil->keterangan_inventaris }}</td>
                                    <td>
                                        <a href="{{ url('edit/'.$hasil->id) }}" class="btn btn-success">Restore</a>
                                        <a href="{{ url('delete/'.$hasil->id) }}" class="btn btn-danger">Delete Permanent</a>
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
