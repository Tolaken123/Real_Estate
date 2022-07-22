{{-- @extends('layouts.app')
@section('content') --}}
{{-- @include('layouts.script') --}}
@include('layouts.style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/user_profile.css') }}"/>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include('layouts.topnavbar')
    @include('layouts.usersidebar')

    @yield('content')

    <!-- /.navbar -->
    {{-- <!--content -->
    @yield('content') --}}

    {{-- @include('admin.Account.list') --}}



    <!-- /.content -->

    <!-- Main Footer -->
    <!-- /.content-wrapper -->
    @include('layouts.footer')
    <!-- REQUIRED SCRIPTS -->

</div>

{{-- @endsection --}}
@include('layouts.script')
</body>
