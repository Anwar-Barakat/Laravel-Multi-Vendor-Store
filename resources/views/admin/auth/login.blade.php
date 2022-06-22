<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Laravel eCommerce , Online Store, Multi Vendor, eCommerce" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="{{ __('translation.website_title') }}" />
    <meta property="og:title" content="{{ __('translation.website_title') }}" />
    <meta property="og:description" content="{{ __('translation.website_title') }}" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('admin/assets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>{{ __('translation.website_title') }} | @yield('title')</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">
                                        {{ __('translation.sign_me_in') }}
                                        {{ __('translation.dasboard') }}
                                    </h4>
                                    <form action="index.html">
                                        <div class="form-group">
                                            <x-label for="email" :value="__('translation.email')" />
                                            <x-input id="email" class="form-control" type="email" name="email"
                                                :value="old('email')" required autofocus />
                                        </div>
                                        <div class="form-group">
                                            <x-label for="email" :value="__('translation.password')" />
                                            <x-input id="password" class="form-control" type="password" name="password"
                                                required autocomplete="current-password" />
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="basic_checkbox_1" name="remember">
                                                    <label class="custom-control-label" for="basic_checkbox_1">
                                                        {{ __('translation.remember_me') }}
                                                    </label>
                                                </div>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <div class="form-group">
                                                    <a href="{{ __('translation.forgot_your_password?') }}"></a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                {{ __('translation.sign_me_in') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dlabnav-init.js') }}"></script>

</body>

</html>
