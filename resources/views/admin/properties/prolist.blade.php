
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

    .pro-list tbody td .user-subhead {
        font-size: 0.875em;
        font-style: italic;
    }

    .pro-list tbody td .user-link {
        display: block;
        font-size: 1.25em;
        padding-top: 3px;
        margin-left: 60px;
    }

    a {
        color: #3498db;
        outline: none !important;
    }

    .pro-list tbody td>img {
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

 @include('layouts.lightmode')
<!-- Navbar -->
@include('layouts.topnavbar')
@include('layouts.usersidebar')

@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="container-lg">
        <div class="card w-70">

            <link rel="stylesheet" type="text/css"
                href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
            <hr>
            <div class="container bootstrap snippets bootdey">
                <div class="content-header">
                    <div class="container-lg">
                        <div class="row mb-2">
                            <div class="col-sm-">
                                <h1 class="m-0">All Properties List</h1>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Create New Property
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.rent.create') }}">Rent</a>
                                <a class="dropdown-item" href="{{ route('admin.sale.create') }}">Sale</a>
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
                                <table class="table pro-list">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th><span>ID</span></th>
                                            <th><span>Thumbnail</span></th>
                                            <th><span>Title</span></th>
                                            <th><span>Created</span></th>
                                            <th class="text-center"><span>Sale</span></th>
                                            <th><span>Rent</span></th>

                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-active">
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                            </td>
                                            <td>2 Bedroom House For Sale </td>
                                            <td>2013/08/12</td>
                                            <td class="text-center">
                                                <span class="label label-default">20000$</span>
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>

                                            <td style="width: 30%;" class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                        </tr>
                                        <tr class="table-active">
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                            </td>
                                            <td>2 Bedroom House For Sale </td>
                                            <td>2013/08/12</td>
                                            <td class="text-center">
                                                <span class="label label-default"> &nbsp; </span>
                                            </td>
                                            <td>
                                                2000$
                                            </td>

                                            <td style="width: 30%;" class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>

                                        </tr>

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
        {{-- @include('layouts.footer') --}}

    </div>
    {{-- @include('layouts.script') --}}
    @endsection
