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
                                <th scope="col">Nama Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $result => $hasil)
                                <tr>
                                    <th scope="row">{{ $result + $kategori->firstitem() }}</th>
                                    <td>{{ $hasil->name }}</td>
                                    <td>
                                        <a href="{{ url('restore/kategori/'.$hasil->id) }}" class="btn btn-success">Restore</a>
                                        <a href="{{ url('delete-permanent/kategori/'.$hasil->id) }}" class="btn btn-danger">Delete Permanent</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $kategori->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
