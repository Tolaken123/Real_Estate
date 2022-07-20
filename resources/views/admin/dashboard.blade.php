@extends('layouts.backend')

@section('title')
    Dashboard
@endsection

@section('css')
@endsection


@section('content')

    <div class="card w-100 pt-4">
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
                            <a href="{{ route('admin.properties.index',['listing_type' => 'Sale']) }}"
                               class="small-box-footer">More info <i
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
                            <a href="{{ route('admin.properties.index',['listing_type' => 'Rent']) }}"
                               class="small-box-footer">More info <i
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
                            <a href="{{ route('admin.properties.index') }}"
                               class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    @admin
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
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
                    </div>
                    @endadmin

                    <div class="bootstrap snippets bootdey mt-3 mb-3">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h1 class="m-0">Latest Properties</h1>
                            </div>
                            <div>
                                <a href="{{ route('admin.properties.create') }}">
                                    <button type="button" class="btn btn-primary">
                                        Create New Property
                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <table class="table rent-list">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th><span>N0</span></th>
                                        <th><span>Thumbnail</span></th>
                                        <th><span>Title</span></th>
                                        <th><span>User</span></th>
                                        <th><span>Type</span></th>
                                        <th><span>Price</span></th>
                                        <th><span>Created</span></th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($properties as $list)

                                        <tr class="table-active">
                                            <td>{{ ++$loop->index }}</td>
                                            <td class="align-middle">
                                                @if ($list->thumbnail)
                                                    <img src="{{ asset('images/' . $list->thumbnail) }}"
                                                         style="height:60px;" style="width:100px;"
                                                         alt="25">
                                                @else
                                                    <img src="/img/House9.jpg" style="height:70px;"
                                                         style="width:60px;" alt="25"/>
                                                @endif
                                            </td>
                                            <td>{{ $list->name }}</td>
                                            <td>{{ $list->user->name ?? 'Unknown' }}</td>
                                            <td>{{ $list->listing_type }}</td>
                                            <td>{{ format_currency($list->price) }} </td>
                                            <td>{{ $list->created_at->format('m-d-Y') }}</td>

                                            <td
                                                class="project-actions text-right align-middle">
                                                <a class="btn btn-primary btn-sm"
                                                   href="{{ route('frontend.properties.detail', $list->id) }}"
                                                   target="_blank">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                </a>
                                                <a class="btn btn-info btn-sm"
                                                   href="/admin/properties/{{ $list->id }}/edit">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                                <form method="POST"
                                                      action="{{ route('admin.properties.destroy', $list) }}"
                                                      style="display:inline">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Do you want to delete?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                                <br>
                                <div class="mx-auto d-flex justify-content-center">

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection
