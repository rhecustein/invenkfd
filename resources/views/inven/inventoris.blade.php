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
                                <th scope="col">Nama Baarang</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Moderna</td>
                                <td>Vaksin</td>
                                <td>1.000</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Moderna</td>
                                <td>Vaksin</td>
                                <td>1.000</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Moderna</td>
                                <td>Vaksin</td>
                                <td>1.000</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
