<head>
  <meta charset="utf-8">
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="icon" href="{{ asset('assets/dist/img/logo-bprku.jpeg') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('assets/dist/img/logo-bprku.jpeg') }}" type="image/x-icon">
  <title>@yield('title','BPRKU | Dashboard')</title>

<!-- panggil css -->
@stack('custom-css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{-- <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet"> --}}

</script>
<!-- endcss -->
</head>
