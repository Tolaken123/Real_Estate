@extends('layouts.backend')

@section('title')
    Edit User
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_profile.css') }}"/>
@endsection


@section('content')

    <div class="card w-100 pt-4">
        <section class="content">
            <div class="container-fluid">

                <div class="mt-6">
                    <form action="{{ url('admin/user',$users) }}" method="POST" enctype="multipart/form-data">
                        @csrf()
                        @method('put')


                        <div class="d-flex justify-content-center">
                            <label class="border-2 bg-danger border rounded-circle overflow-hidden " for="avatar"
                                   style="width: 100px; height: 100px; cursor: pointer">
                                @if ($users->avatar)
                                    <img src="{{ asset('images/' . $users->avatar) }}"
                                         alt="25"
                                         class="text-center w-100 h-100 img-thumbnail rounded-circle img-fluid">
                                @else
                                    <img src="https://bootdey.com/img/Content/user_1.jpg"
                                         class="text-center w-100 h-100 img-thumbnail rounded-circle img-fluid"
                                         alt="">
                                @endif
                            </label>
                            <input id="avatar" type="file" class="profilepic__text" onchange="loadFile(event)"
                                   name="avatar" style="display: none;visibility:none;">
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="InputName">Name</label>
                                <input type="text" class="form-control" value="{{$users->name??''}}" name="name"
                                       placeholder="Enter name">
                            </div>

                            <select class="form-select form-select-md mb-3" value="{{$users->role}}"
                                    aria-label=".form-select-md example">
                                <option selected>Select Role</option>
                                <option value="@if($users->role== "admin") selected @endif value="role" value="Admin">Admin</option>
                                <option value="@if($users->role== "industry") selected @endif value="role" value="industry">Industry</option>
                            </select>

                            <div class="form-group">
                                <label for="InputName">Phone</label>
                                <input type="text" class="form-control" value="{{$users->phone}}" name="phone"
                                       placeholder="Enter Phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" value="{{$users->email}}" name="email"
                                       placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="InputName">Password</label>
                                <input type="password" class="form-control" name="password"
                                       placeholder="Enter password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Update</button>
                        </div>
                    </form>

                </div>

            </div>
        </section>
    </div>

@endsection

@section('script')
    <script>
        var loadFile = function (event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
@endsection
