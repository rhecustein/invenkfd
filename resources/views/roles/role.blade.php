@extends('layouts.kfd')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection

@section('modal-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')

@section('sub-judul', 'Roles for users')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

    <body>
        <div class="layout">
            <div class="horizontal-layout">
                <div class="container">
                    <div class="main">
                        <div class="card">
                            <div class="card-body">
                                <h2>Roles</h2>
                                <hr>
                                <a href="#" class="btn btn-info" data-toggle="modal" data-target="#ModalCreateRole">Tambah Roles</a>
                                <div class="mt-4">
                                    <div class="table-responsive">
                                        <table id="data-table" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Role</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($roles as $result => $hasil)
                                                <tr>
                                                    <td>{{ $result + $roles->firstitem() }}</td>
                                                    <td>{{ $hasil->role }}</td>
                                                    <td>
                                                        <div class="d-grid gap-2 d-md-block">
                                                            <a href="{{ url('role.edit/'.$hasil->id) }}" class="btn btn-success">Edit</a>
                                                            <a href="{{ url('destroy-role/'.$hasil->id) }}" class="btn btn-danger">Delete</a>
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
    @include('roles.modal.create')
@endsection

@push('scripts')

    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#data-table').DataTable();
        } );
    </script>

    @push('modal-scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endpush
    
@endpush