@extends('layouts.backend')

@section('title')
    User List
@endsection

@section('css')
    <style>

        img {
            border-radius: 50%;
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
            width: 2.5rem;
        }
    </style>
@endsection


@section('content')

    <div class="card w-100 pt-4">
        <section class="content">
            <div class="container-fluid">
                <div class="bootstrap snippets bootdey mt-3 mb-3">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h1 class="m-0">User List</h1>
                        </div>
                        <div>
                            <a href="{{ route('admin.user.create') }}">
                                <button type="button" class="btn btn-primary">
                                    Create New User
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

                                    <table class="table table-bordered table-sm table-hover  border-primary">

                                        <thead class="table-active bg-primary">
                                        <tr>
                                            <th>
                                                N0
                                            </th>
                                            <th>
                                                Profile
                                            </th>
                                            <th>
                                                Role
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Email
                                            </th>

                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr class="h-auto">
                                                <td class="align-middle">{{ ++$loop->index }}</td>
                                                <td class="align-middle">
                                                    @if ($user->avatar)
                                                        <img src="{{ asset('images/' . $user->avatar) }}"
                                                             alt="25" style="width: 50px;">
                                                    @else
                                                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                                    @endif
                                                </td>
                                                <td class="align-middle">{{$user->role}}</td>
                                                <td class="align-middle">{{$user->name}}</td>
                                                <td class="align-middle">{{$user->email}}</td>

                                                <td class="align-middle"><a class="btn btn-primary btn-sm" href="#">
                                                        <i class="fas fa-eye">
                                                        </i>
                                                    </a>
                                                    &nbsp;
                                                    <a class="btn btn-info btn-sm"
                                                       href="/admin/user/{{$user->id}}/edit">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                    </a>
                                                    &nbsp;

                                                    <form method="POST" action="/admin/user/{{ $user->id }}"
                                                          style="display:inline">
                                                        @csrf
                                                        @method('delete')

                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Do you want to delete?')">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <br>
                                    <div class="mx-auto d-flex justify-content-center">
                                        {{$users->withQueryString()->links() }}
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
