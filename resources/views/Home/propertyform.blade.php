<!DOCTYPE html>
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
  <link rel="stylesheet" href="{{ asset ('vendors/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
    <!-- Navbar -->
    @include('layout.topnavbar')

  @include('layout.leftmenu')
  <!-- /.navbar -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Property</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
 
    <section class="content">
    <form>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Text</label>
        <input class="form-control" type="text" value="John Snow" id="example-text-input">
    </div>
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">Search</label>
        <input class="form-control" type="search" value="Tell me your secret ..." id="example-search-input">
    </div>
    <div class="form-group">
        <label for="example-email-input" class="form-control-label">Email</label>
        <input class="form-control" type="email" value="argon@example.com" id="example-email-input">
    </div>
    <div class="form-group">
        <label for="example-url-input" class="form-control-label">URL</label>
        <input class="form-control" type="url" value="https://www.creative-tim.com" id="example-url-input">
    </div>
    <div class="form-group">
        <label for="example-tel-input" class="form-control-label">Phone</label>
        <input class="form-control" type="tel" value="40-(770)-888-444" id="example-tel-input">
    </div>
    <div class="form-group">
        <label for="example-password-input" class="form-control-label">Password</label>
        <input class="form-control" type="password" value="password" id="example-password-input">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">Number</label>
        <input class="form-control" type="number" value="23" id="example-number-input">
    </div>
    <div class="form-group">
        <label for="example-datetime-local-input" class="form-control-label">Datetime</label>
        <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00" id="example-datetime-local-input">
    </div>
    <div class="form-group">
        <label for="example-date-input" class="form-control-label">Date</label>
        <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
    </div>
    <div class="form-group">
        <label for="example-month-input" class="form-control-label">Month</label>
        <input class="form-control" type="month" value="2018-11" id="example-month-input">
    </div>
    <div class="form-group">
        <label for="example-week-input" class="form-control-label">Week</label>
        <input class="form-control" type="week" value="2018-W23" id="example-week-input">
    </div>
    <div class="form-group">
        <label for="example-time-input" class="form-control-label">Time</label>
        <input class="form-control" type="time" value="10:30:00" id="example-time-input">
    </div>
</form>
    </section>
    </div>
    <!-- /.content -->

  <!-- Main Footer -->
  @include('layout.footer')
  <!-- /.content-wrapper -->

<!-- REQUIRED SCRIPTS -->
        </div>
<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('vendors/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
