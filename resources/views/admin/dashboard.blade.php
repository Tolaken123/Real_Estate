@include('layouts.style')
@include('layouts.lightmode')
<!-- Navbar -->
@include('layouts.topnavbar')
@section('title')
    Admin Dashboard
@endsection
@include('layouts.usersidebar')


<div class="content-wrapper">
    <div class="container-fluid">
        <div class="col-sm-">
            <br>
            <h1 class="m-0">{{ Auth::user()->name}} Using System Right Now!</h1>
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
                                    <h3>{{ $sales_property_count }}</h3>

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
                                    <h3>{{ $rents_property_count }}<sup style="font-size: 20px"></sup></h3>

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
                                    <h3>{{ $property_count }}</h3>
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
                            @admin
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $users_count }}</h3>


                                    <p>Total User</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{ Route('admin.user.index') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            @endadmin
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
                                {{-- <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown">
                                        Create New Property
                                    </button>
                                    <div class="dropdown-menu">
                                        {{-- <a class="dropdown-item" href="{{ route('admin.rent.create') }}">Rent</a>
                                        <a class="dropdown-item" href="{{ route('admin.sale.create') }}">Sale</a> --}}

                                <a href="{{ route('admin.properties.create') }}">
                                    <button type="button" class="btn btn-primary">

                                        Create New Property
                                    </button>
                                </a>
                                <div class="container-lg">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-box no-header clearfix">
                                    <div class="main-box-body clearfix">
                                        <div class="table-responsive">
                                            <table class="table pro-list table-striped">
                                                <thead>
                                                    <tr class="bg-primary">
                                                        <th><span>ID</span></th>
                                                        <th><span>Thumbnail</span></th>
                                                        <th><span>Title</span></th>
                                                        <th><span>Created</span></th>
                                                        <th><span>Price</span></th>
                                                        <th><span>Type</span></th>
                                                        <th><span>Industry</span></th>

                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($properties as $list)
                                                        <tr class="table-active">
                                                            <td class="align-middle">
                                                                {{ $list->id }}
                                                            </td>
                                                            <td class="align-middle">
                                                                @if ($list->thumbnail)
                                                                    <img src="{{ asset('images/' . $list->thumbnail) }}"
                                                                        style="height:70px;" style="width:100px;"
                                                                        alt="25">
                                                                @else
                                                                    <img src="/img/House9.jpg"style="height:70px;"
                                                                        style="width:100px;" alt="25" />
                                                                @endif
                                                            </td>
                                                            <td class="align-middle">{{ $list->name }}</td>
                                                            <td class="align-middle">{{ $list->created_at }}</td>
                                                            <td class="align-middle">{{ $list->price }} </td>
                                                            <td class="align-middle">{{ $list->listing_type }} </td>
                                                            <td class="align-middle">{{ $list->user->name }}</td>



                                                            <td style="width: 30%;"
                                                                class="project-actions text-right align-middle">
                                                                <a class="btn btn-primary btn-sm" href="#">
                                                                    <i class="fas fa-folder">
                                                                    </i>
                                                                    View
                                                                </a>
                                                                <a class="btn btn-info btn-sm"
                                                                    href="/admin/properties/{{ $list->id }}/edit">
                                                                    <i class="fas fa-pencil-alt">
                                                                    </i>
                                                                    Edit
                                                                </a>
                                                                <form method="POST"
                                                                    action="{{ route('admin.properties.destroy', $list) }}"
                                                                    style="display:inline">
                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-danger"
                                                                        onclick="return confirm('Do you want to delete?')">

                                                                        <i class="fas fa-trash"></i>

                                                                        </a>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <div class="mx-auto d-flex justify-content-center">
                                                {{ $properties->links() }}
                                            </div>
                                            <br> <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.footer')

                </div>

                @include('layouts.script')
            </section>
        </div>
    </div>
</div>
