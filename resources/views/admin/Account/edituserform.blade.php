@extends('layouts.admin')
@section('content')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" /> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/user_profile.css') }}" />
<main>
    <div class="content-wrapper">
        <div class="container mt-6">
            <hr />
            <form action="{{ url('admin/user',$users) }}" method="POST">
                @csrf()
                @method('put')
            <!-- <div class=" social-prof"> -->
            <div class="profile">
                <!-- <div class="wrapper"> -->
                <div class="profilepic">
                    <!-- <img src="/img/user2-160x160.jpg" alt="" class="user-profile"> -->
                    <img id="output" src="/img/user2-160x160.jpg" alt="" class="profilepic__image" height="160px"
                        width="130px">
                    <div class="profilepic__content">
                        <label for="file">
                            <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                            <input id="file" type="file" class="profilepic__text" onchange="loadFile(event)"
                                name="avatar" style="display: none;visibility:none;">Edit</input>

                        </label>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
           
                <div class="card-body">
                    <div class="form-group">
                        <label for="InputName">Name</label>
                        <input type="name" class="form-control" value="{{$users->name}}" name="name" placeholder="Enter name">
                    </div>

                    <select class="form-select form-select-md mb-3" aria-label=".form-select-md example"value="{{$users->sex}}" name="sex">
                            <option selected>Sex</option>
                            <option  @if($users->sex== "Male") selected @endif value="Rent" value="Male">Male</option>
                            <option  @if($users->sex == "Female")selected  @endif value="Rent"value="female">Female</option>
                        </select>
                        {{-- <select class="form-select form-select-md mb-3" aria-label=".form-select-md example">
                            <option selected>Select Role</option>
                            <option value="2">Amin</option>
                            <option value="2">Industry</option>
                        </select> --}}
                        <div class="form-group">
                            <label for="InputName">Phone</label>
                            <input type="phone" class="form-control" value="{{$users->phone}}" name="phone" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" value="{{$users->email}}"name="email"  placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputName">Password</label>
                            <input type="password" class="form-control" value="{{$users->password}}"name="password" placeholder="Enter password">
                        </div>

                        <div class="btn">
                            <button type="submit" class="btn btn-primary btn-lg">Update</button>


                        </div>

            </form>

        </div>
    </div>
    </div>
</main>
<script>
    var loadFile = function (event) {
        var image = document.getElementById("output");
        image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>
@endsection
