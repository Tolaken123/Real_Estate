@include('layouts.style')
<style>
    body {
        background: #eee;
    }

    .main-box.no-header {
        padding-top: 20px;
    }

    .main-box {
        background: #FFFFFF;
        -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
        box-shadow: 1px 1px 2px 0 #CCCCCC;
        margin-bottom: 16px;
        -webikt-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .table a.table-link.danger {
        color: #e74c3c;
    }

    .label {
        border-radius: 3px;
        font-size: 0.875em;
        font-weight: 600;
    }

    .rent-list tbody td .user-subhead {
        font-size: 0.875em;
        font-style: italic;
    }

    .rent-list tbody td .user-link {
        display: block;
        font-size: 1.25em;
        padding-top: 3px;
        margin-left: 60px;
    }

    a {
        color: #3498db;
        outline: none !important;
    }

    .rent-list tbody td>img {
        position: relative;
        max-width: 70px;
        float: left;
        margin-right: 15px;
    }

    .table thead tr th {
        text-transform: uppercase;
        font-size: 0.875em;
    }

    .table thead tr th {
        border-bottom: 5px solid #e7ebee;
    }

    .table tbody tr td:first-child {
        font-size: 1.125em;
        font-weight: 300;
    }

    .table tbody tr td {
        font-size: 0.875em;
        vertical-align: middle;
        border-top: 1px solid #e7ebee;
        padding: 12px 8px;
        border-bottom: 5px solid #e7ebee;
    }

    a:hover {
        text-decoration: none;
    }

</style>



@extends('layouts.admin')
@section('content')
    

{{-- @include('layouts.lightmode')

        <!-- Navbar -->
        @include('layouts.topnavbar')
        @include('layouts.usersidebar') --}}
        <div class="content-wrapper">
            <div class="container-lg">
                <div class="card w-70">


                    <link rel="stylesheet" type="text/css"
                        href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
                    <hr>
                    <div class="container bootstrap snippets bootdey">
                        <div class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1 class="m-0">Rent Listing</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-box no-header clearfix">
                                <div class="main-box-body clearfix">
                                    <div class="table-responsive">
                                        <table class="table rent-list">
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th><span>Thumbnail</span></th>
                                                    <th><span>Title</span></th>
                                                    <th><span>Created</span></th>
                                                    <th><span>Rent</span></th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                                @foreach($rent as $list)
                                                
                                                <tr class="table-active">
                                                    <td>
                                                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                                    </td>
                                                    <td>{{ $list->name}}</td>
                                                    <td>{{ $list->created_at }}</td>
                                                    <td>
                                                        {{ $list->bedroom }}
                                                    </td>
                                                    {{-- <td>
                                                        {{ $list->bathroom}}
                                                    </td> --}}
                                                    <td style="width: 10%;">
                                                        <a href="#" class="table-link text-info">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="table-link text-primary">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-eye fa-stack-1x fa-inverse"
                                                                    aria-hidden="true"></i>

                                                            </span>
                                                        </a>

                                                        <a href="#" class="table-link danger">
                                                            <span class="fa-stack">
                                                                <i class="fa fa-square fa-stack-2x"></i>
                                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <br>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    

    </div>
    @endsection
    {{-- @include('layouts.footer')
    @include('layouts.script') --}}
  
