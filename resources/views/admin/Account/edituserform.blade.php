@extends('layouts.backend')

@section('title')
    Edit User
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_profile.css') }}"/>
@endsection


@section('content')

    <div class="container mt-6">
        <hr/>
        <form action="{{ url('admin/user',$users) }}" method="POST" enctype="multipart/form-data">
            @csrf()
            @method('put')

            <!-- <div class=" social-prof"> -->
            <div class="profile">
                <!-- <div class="wrapper"> -->
                <div class="profilepic">
                    <!-- <img src="/img/user2-160x160.jpg" alt="" class="user-profile"> -->
                    <img id="output" src="/img/user2-160x160.jpg" alt="" class="profilepic__image"
                         height="160px"
                         width="130px">
                    <div class="profilepic__content">
                        <label for="file">
                            <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                            <input id="file" type="file" class="profilepic__text" onchange="loadFile(event)"
                                   name="avatar" style="display: none;visibility:none;">Edit
                        </label>
                    </div>
                </div>
            </div>


            <div class="container">

                <div class="card-body">
                    <div class="form-group">
                        <label for="InputName">Name</label>
                        <input type="text" class="form-control" value="{{$users->name??''}}" name="name"
                               placeholder="Enter name">
                    </div>

                    {{-- <select class="form-select form-select-md mb-3" aria-label=".form-select-md example"value="{{$users->sex}}" name="sex">
                           <option selected>Sex</option>
                           <option  @if($users->sex== "Male") selected @endif value="Rent" value="Male">Male</option>
                           <option  @if($users->sex == "Female")selected  @endif value="Rent"value="female">Female</option>
                       </select> --}}
                    <select class="form-select form-select-md mb-3" value="{{$users->role}}"
                            aria-label=".form-select-md example">
                        <option selected>Select Role</option>
                        <option value="@if($users->role== "admin") selected @endif value=" role
                        " value="Admin">Admin</option>
                        <option value="@if($users->role== "industry") selected @endif value=" role
                        " value="industry">Industry</option>
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

                    <div class="btn">
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
                    </div>
                </div>
            </div>

        </form>

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
