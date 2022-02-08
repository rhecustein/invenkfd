@extends('layouts.kfd')

@section('content')

<div class="container">
    <div class="main">
        <h1>Profile</h1>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="text-center">
                        <div class="avatar avatar-circle avatar-image" style="width: 180px; height: 180px;">
                            <img src="{{ asset('html/demo/app/assets/images/avatars/VakuMinion.jpeg') }}" alt="">
                        </div>
                        <br><br>
                        <h4>{{ Auth::user()->name }}</h4>
                        <br>
                        <hr>
                        <br>

                    </div>
                    <div class="col-6 col-md-6">
                        <div class="mb-3">
                            <p>Tanggal Lahir</p>
                            <input type="text" class="form-control" value="" name="tanggal_lahir" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <p>Email</p>
                            <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <p>Alamat</p>
                            <input type="text" class="form-control" value="" name="tanggal_lahir" id="formGroupExampleInput">
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="mb-3">
                            <p>Jenis Kelamin</p>
                            <input type="text" class="form-control" value="" name="tanggal_lahir" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <p>No. Telepon</p>
                            <input type="text" class="form-control" value="" name="tanggal_lahir" id="formGroupExampleInput">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <br>
                        <button type="button" class="btn btn-outline-primary">Edit Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
