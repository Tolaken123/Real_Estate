
@section('title')
    Admin Dashboard
@endsection
@include('layouts.style')
@include('layouts.lightmode')
<!-- Navbar -->
@include('layouts.topnavbar')
@include('layouts.usersidebar')


<br>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="col-sm-">
            <h1 class="m-0">Welcome {{ Auth::user()->name }} !</h1>
        </div>
        <br>
        <div class="card w-100">
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    {{-- <h3>{{$sales_property_count }}</h3> --}}

                                    <p>Sale</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    {{-- <h3>{{$rents_property_count }}<sup style="font-size: 20px"></sup></h3> --}}

                                    <p>Rent</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    {{-- <h3>{{$property_count}}</h3> --}}

                                    <p>Total Properties</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    {{-- <h3>{{ $users_count }}</h3> --}}

                                    <p>Total User</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <link rel="stylesheet" type="text/css"
                            href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
                        <hr>
                        <div class="container bootstrap snippets bootdey">
                            <div class="content-header">
                                <div class="row mb-2">
                                    <div class="col-sm-">
                                        <h1 class="m-0">All Properties List</h1>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown">
                                        Create New Property
                                    </button>
                                    <div class="dropdown-menu">
                                        {{-- <a class="dropdown-item" href="{{ route('admin.rent.create') }}">Rent</a>
                                        <a class="dropdown-item" href="{{ route('admin.sale.create') }}">Sale</a> --}}
                                    </div>
                                </div>
                                <div class="container-lg">

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
                                                        <th class="text-center"><span>Price</span></th>
                                                        <th><span>Type</span></th>

                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-active">
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            <img src="https://bootdey.com/img/Content/user_1.jpg"
                                                                alt="">
                                                        </td>
                                                        <td>2 Bedroom House For Sale </td>
                                                        <td>2013/08/12</td>
                                                        <td class="text-center">
                                                            <span class="label label-default">1000$</span>
                                                        </td>
                                                        <td>
                                                            Rent
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
                                                            <img src="https://bootdey.com/img/Content/user_1.jpg"
                                                                alt="">
                                                        </td>
                                                        <td>2 Bedroom House For Sale </td>
                                                        <td>2013/08/12</td>
                                                        <td class="text-center">
                                                            <span class="label label-default"> 12000 </span>
                                                        </td>
                                                        <td>
                                                            Sale
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
                    @include('layouts.footer')

                </div>
                @include('layouts.script')
