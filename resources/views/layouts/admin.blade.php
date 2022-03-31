@extends('layouts.app')
@section('content')

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.topnavbar')
        <div class="content-wrapper">
            @include('layouts.usersidebar')
        </div>
        <!-- /.navbar -->
        <!--content -->
        <div class="content-wrapper">
            @include('admin.Account.list')
            @include('layouts.footer')
         <!-- /.content -->

            <!-- Main Footer -->
            <!-- /.content-wrapper -->

            <!-- REQUIRED SCRIPTS -->
        </div>
        @endsection
