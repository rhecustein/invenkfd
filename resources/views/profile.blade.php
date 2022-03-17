@extends('layouts.kfd')

@section('css')
    <link rel="stylesheet" href="{{ asset('ijaboCropTool/ijaboCropTool.min.css') }}">
@endsection

@section('content')

<div class="container">
    <div class="main">
        <h1>Profile</h1>
        <br>
        <div class="card">
            <div class="container-fluid">
                <div class="row content-min-height">
                    <div class="col">
                        <div class="card-body">
                            <div class="mb-4 d-md-flex align-items-center justify-content-between">
                                <div>
                                    <h4>Personal Information</h4>
                                    <p>Basic info, like your name and address on this account.</p>
                                </div>
                                <button class="btn btn-primary">Edit Profile</button>
                            </div>
                            <div class="row">
                                <div class="col" style="max-width: 200px;">
                                    <div class="mb-3">
                                        <img class="img-fluid w-100 rounded user_picture" src="user_image/{{ $userInfo['picture'] == '' ? 'guest-profile.png' : $userInfo['picture'] }}" alt="upload avatar">
                                    </div>
                                    <div class="upload upload-text w-100">
                                        <div>
                                            <label for="upload" class="btn btn-secondary w-100">Change Profile</label>
                                        </div>
                                        <input id="upload" type="file" name="upload" class="upload-input" accept="image/png, image/jpeg">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <table class="table">
                                        <tbody>
                                           <tr>
                                              <th class="py-4">Name</th>
                                              <td class="py-4">{{ Auth::user()->name }}</td>
                                           </tr>
                                           <tr>
                                              <th class="py-4">Email</th>
                                              <td class="py-4">{{ Auth::user()->email }}</td>
                                           </tr>
                                           <tr>
                                              <th class="py-4">Phone</th>
                                              <td class="py-4">+ 12025550193</td>
                                           </tr>

                                           <tr>
                                            <th class="py-4">Level akun</th>
                                            <td class="py-4">{{ Auth::user()->level }}</td>
                                           </tr>

                                           <tr>
                                              <th class="py-4">Gender</th>
                                              <td class="py-4">Female</td>
                                           </tr>
                                           <tr>
                                              <th class="py-4">Birthday</th>
                                              <td class="py-4">07/07/1993</td>
                                           </tr>
                                           <tr>
                                              <th class="py-4">Address</th>
                                              <td class="py-4">1001 Mary St, Harrisville, WV, 26362</td>
                                           </tr>
                                           <tr>
                                              <th class="py-4">Bio</th>
                                              <td class="py-4">Hello World!</td>
                                           </tr>
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
</div>

@endsection

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('ijaboCropTool/ijaboCropTool.min.js') }}"></script>
    <script>
        $('#upload').ijaboCropTool({
            preview: '.user_picture',
            processUrl:'{{ route("user.crop") }}',
            withCSRF:['_token','{{ csrf_token() }}'],
            buttonsText:['CROP & SAVE', 'CANCEL'],
            onSuccess:function(message, element, status){
                alert(message);
            },
            onError:function(message, element, status){
                alert(message);
            }
        });
    </script>
@endpush
