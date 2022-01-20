@extends('layouts.kfd')

@section('content')

    <div class="main">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('create') }}"><button class="btn btn-primary me-2">Tambah</button></a>
                
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
                            @foreach ($inventaris as $inven)
                                <tr>
                                    <th scope="row">{{ $inven->id }}</th>
                                    <td>{{ $inven->nama_inventaris }}</td>
                                    <td>{{ $inven->id_kategori }}</td>
                                    <td>{{ $inven->qty_inventaris }}</td>
                                    <td>{{ $inven->keterangan_inventaris }}</td>
                                    <td>
                                        <a href="{{ url('edit/'.$inven->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('delete/'.$inven->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
