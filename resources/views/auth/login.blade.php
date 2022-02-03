<head>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('html/demo/app/assets/images/logo/favicon.ico') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('html/demo/app/assets/css/app.min.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="auth-full-height d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="m-2">
                                <div class="d-flex justify-content-center mt-3">
                                    <div class="text-center logo">
                                        <img class="img-fluid"
                                            src="{{ asset('html/demo/app/assets/images/logo/logo-fold.png') }}"
                                            style="height: 70px;" alt="logo">
                                    </div>

                                </div>

                                <div class="text-center mt-3">

                                    <h3 class="fw-bolder">Sign In</h3>
                                    <p class="text-muted">Sign in your account to continue</p>

                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    {{-- Email Address --}}
                                    <div class="form-group mb-3">
                                            <x-label class="form-label" for="email" :value="__('Email')"/>
                                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                                                autofocus />
                                    </div>

                                    {{-- Password --}}
                                    <div class="mb-3">
                                        <label class="form-label d-flex justify-content-between">
                                            <span>Password</span>

                                            {{-- Forget Password --}}
                                            <a href="" class="text-primary font">

                                                <a class="text-primary font" href="{{ route('password.request') }}">
                                                    {{ __('Forgot password?') }}
                                                </a>

                                            </a>

                                        </label>

                                        {{-- Input Password --}}
                                        <div class="form-group input-affix flex-column">
                                            <label class="d-none">Password</label>
                                            <x-input formcontrolname="password" id="password" class="block mt-1 w-full form-control" type="password" name="password" required
                                                autocomplete="current-password" />
                                        </div>
                                    </div>

                                    <!-- Remember Me -->
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>

                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                        @endif
                        
                                        <x-button class="btn btn-primary w-100">
                                            {{ __('Log in') }}
                                        </x-button>
                                    </div>

                                    {{-- <button type="submit" class="btn btn-primary w-100">Log In</button> --}}

                                </form>

                                <div class="text-center mt-4">
                                    <p class="text-muted">Don't have an account yet? <a href="{{ route('register') }}">Sign
                                            Up</a></p>
                                </div>

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
