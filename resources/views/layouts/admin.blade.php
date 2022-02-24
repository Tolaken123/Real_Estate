{{-- {{-- <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> {{ config('app.name', 'realestate')}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.topnavbar')
  <!-- /.navbar -->
  @include('layouts.mainconten')
  <!-- Main Sidebar Container -->
  @include('layouts.leftmenu')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- Main Footer -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
</body>
</html> --}}
 @include('layouts.include.link')
<div class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
          {{-- navbar --}}
          @include('layouts.include.topnavbar')
          <!-- sidebar -->
          @include('layouts.include.sidebar')
        
          
           <div class="containner">
           @yield('content')
           @include('layouts.include.mainconten') 
           </div>
          <!-- Main Sidebar Container -->
          <!-- Content Wrapper. Contains page content -->
          <!-- Main Footer -->
          @include('layouts.include.footer')
    </div>
</div>
{{-- script --}}
@include('layouts.include.script')


