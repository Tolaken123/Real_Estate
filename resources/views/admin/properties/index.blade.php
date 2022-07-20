@extends('layouts.backend')

@section('title')
    Property List
@endsection

@section('css')
@endsection

@section('content')

    <div class="card w-100">
        <section class="content">
            <div class="container-fluid">
                <div class="bootstrap snippets bootdey mt-3 mb-3">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h1 class="m-0">Rent Listing</h1>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box no-header clearfix">
                            <div class="main-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table rent-list">
                                        <thead>
                                        <tr class="bg-primary">
                                            <th><span>ID</span></th>
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
                                        {{$properties->withQueryString()->links() }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('script')
@endsection
