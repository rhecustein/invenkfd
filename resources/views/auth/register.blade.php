
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('html/demo/app/assets/images/logo/favicon.ico') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('html/demo/app/assets/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="auth-full-height d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-2">
                                <div class="d-flex justify-content-center mt-3">
                                    <div class="text-center logo">
                                        <img alt="logo" class="img-fluid" src="{{ asset('html/demo/app/assets/images/logo/logo-fold.png') }}" style="height: 70px;">
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <h3 class="fw-bolder">Sign Up</h3>
                                </div>

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    {{-- Name --}}
                                    <div class="form-group mb-3">

                                        <x-label class="form-label" for="name" :value="__('Name')" />

                                        <x-input type="text" class="form-control no-validation-icon no-success-validation" id="name" type="text" name="name" :value="old('name')" required autofocus />
                                        
                                    </div>

                                    {{-- Email --}}
                                    <div class="form-group mb-3">

                                            <x-label class="form-label" for="email" :value="__('Email')" />

                                            <x-input id="email" class="form-control no-validation-icon no-success-validation" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    {{-- Password --}}
                                    <div class="form-group mb-3">
                                        <x-label class="form-label" for="password" :value="__('Password')" />

                                        <x-input id="password" class="form-control no-validation-icon no-success-validation" type="password" name="password" required autocomplete="new-password" />
                                    </div>

                                    {{-- Confirm Password --}}
                                    <div class="form-group mb-3">

                                        <x-label class="form-label" for="password_confirmation" :value="__('Confirm Password')" />

                                        <x-input id="password_confirmation" class="form-control no-validation-icon no-success-validation"
                                                        type="password"
                                                        name="password_confirmation" required />
                                    </div>
                                    
                                    {{-- Register --}}
                                    <div class="flex items-center justify-end mt-4">
                                        <a class="text-primary font" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                        
                                        <x-button class="btn btn-primary d-block w-100">
                                            {{ __('Register') }}
                                        </x-button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
    <!-- Core Vendors JS -->
    <script src="{{ asset('html/demo/app/assets/js/vendors.min.js') }}"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{ asset('html/demo/app/assets/js/app.min.js') }}"></script>

</body>
