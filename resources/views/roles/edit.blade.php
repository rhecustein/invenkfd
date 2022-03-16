@extends('layouts.kfd')
@section('content')

{{-- <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
<div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div> --}}

<form action="{{ url('update-role/'.$roles->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="layout">
        <div class="horizontal-layout">
            <div class="container">
                <div class="main">
                    <div class="card">
                        <div class="card-body">
                            <h2>Role <span class="badge bg-primary">Edit</span></h2>
                            <hr>
                            <div class="mb-3">
                                <label>Roles</label>
                                <input type="text" class="form-control" value="{{ $roles->role }}" name="role" id="formGroupExampleInput">
                            </div>
                            <a href="{{ route('role.index') }}"><button type="submit" class="btn btn-success btn-block">Update</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:300,600,700|Pragati+Narrow:700" rel="stylesheet">
<link rel="stylesheet" href="html/demo/app/assets/css/datepicker.css">

@endsection