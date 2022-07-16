@include('layouts.style')
@include('layouts.style')
@include('layouts.lightmode')
<!-- Navbar -->
@include('layouts.topnavbar')
@include('layouts.usersidebar')


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

    .sale-list tbody td .user-subhead {
        font-size: 0.875em;
        font-style: italic;
    }

    .sale-list tbody td .user-link {
        display: block;
        font-size: 1.25em;
        padding-top: 3px;
        margin-left: 60px;
    }

    a {
        color: #3498db;
        outline: none !important;
    }

    .sale-list tbody td>img {
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
                            <a href="{{ route('admin.properties.create') }}">
                            <button type="button" class="btn btn-primary">

                            Create New Property
                            </button>
                            </a>
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
                                                    <th><span>Price</span></th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($rents_property as $list)

                                                <tr class="table-active">
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
                                                    <td>{{ $list->name}}</td>
                                                    <td>{{ $list->created_at }}</td>
                                                    <td>{{ $list->price }} </td>

                                                    <td style="width: 30%;"
                                                    class="project-actions text-right align-middle">
                                                    <a class="btn btn-primary btn-sm" href="#">
                                                        <i class="fas fa-folder">
                                                        </i>
                                                        View
                                                    </a>
                                                    <a class="btn btn-info btn-sm" href="/admin/properties/{{ $list->id }}/edit">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <form method="POST" action="{{ route('admin.properties.destroy', $list) }}" style="display:inline" >
                                                        <input name="_method" type="hidden" value="DELETE">
                                                         {{ csrf_field() }}
                                                          <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?')">

                                                        <i class="fas fa-trash"></i>

                                                      </a>
                                                    </button>
                                                    </form>
                                                </td>
                                                </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                        <br>

                                        <div class="mx-auto d-flex justify-content-center">
                                        {{$rent->links() }}
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
@include('layouts.script')
@include('layouts.footer')
