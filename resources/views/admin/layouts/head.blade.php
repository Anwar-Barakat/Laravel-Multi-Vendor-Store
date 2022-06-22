   <!-- FAVICONS ICON -->
   <link rel="icon" href="{{ asset('admin/assets/images/favicon.ico') }}" type="image/x-icon" />
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/favicon.png') }}" />

   <!-- PAGE TITLE HERE -->
   <title>{{ __('translation.website_title') }} | @yield('title')</title>

   <!-- MOBILE SPECIFIC -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- STYLESHEETS -->
   <link rel="stylesheet" href="{{ asset('admin/assets/vendor/jqvmap/css/jqvmap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist/css/chartist.min.css') }}">
   <link rel="stylesheet"
       href="{{ asset('admin/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/assets/css/skin-2.css') }}">

   @yield('admin-css')
