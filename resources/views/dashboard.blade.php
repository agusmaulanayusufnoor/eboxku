<!DOCTYPE html>
<html lang="en">

@include('layouts.header')
@section('title','Dashboard')

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets/dist/img/logo-bprku.jpeg') }}" alt="BPRKULogo" height="60" width="60">
        </div>
<!-- navbar -->
@include('layouts.nav-header')
 <!-- sidebar -->
@include('layouts.sidebar-vue')
         <!-- navbar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <dashboard-component></dashboard-component>
   <router-view></router-view>
 </div><!-- /.content-wrapper -->

  <!-- footer  -->

@include('layouts.footer')
</div>
<!-- ./wrapper -->
@include('layouts.script')
<script>
    window.auth_user = {!! json_encode(auth()->user()); !!};
   console.log(auth_user);
</script>
{{-- @include('vendor.lara-izitoast.toast') --}}
<!-- endjs -->
</body>
</html>
