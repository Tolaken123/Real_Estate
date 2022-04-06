
{{-- @extends('layouts.app')
@section('content') --}}

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.topnavbar')
        @include('layouts.usersidebar')
        <!-- /.navbar -->
        <!--content -->
        <div class="content-wrapper">
            {{-- @include('layouts.script')
            @include('layouts.style') --}}
            <h1>User List</h1>
                <div class="container-fluid">
                    <table class="table table-bordered table-sm table-hover  border-primary">
                        <thead class="table-active bg-primary">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Profile
                                </th>
                            </tr>
                        </thead>
                    <tbody>
                        {{-- @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            {{-- <td>{{$user['Photo']}}</td> --}}
                        </tr> 
                        {{-- @endforeach  --}} --}}
                    </tbody>
                    </table>
                </div>
        </div>
            {{-- @include('layouts.footer') --}}
         <!-- /.content -->

            <!-- Main Footer -->
            <!-- /.content-wrapper -->

            <!-- REQUIRED SCRIPTS -->
        </div>
        {{-- @endsection --}}

