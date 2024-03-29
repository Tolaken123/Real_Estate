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
            <form action="{{ route('admin.user.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf()
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
                                        name="avatar" style="display: none;visibility:none;">Edit

                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container">

                        <div class="card-body">
                                <div class="form-group">
                                    <label for="InputName">Name</label>
                                    <input type="name" class="form-control" name="name" placeholder="Enter name">
                                </div>

                                {{-- <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" name="sex">
                                    <option selected>Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select> --}}
                                <select class="form-select form-select-md mb-3" name="role" aria-label=".form-select-md example">
                                    <option selected>Select Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Industry">Industry</option>
                                </select>
                                <div class="form-group">
                                    <label for="InputName">Phone</label>
                                    <input type="phone" class="form-control" name="phone" placeholder="Enter Phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email"  placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="InputName">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                </div>

                                <div class="btn">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>

                                </div>



                        </div>
                </div>


            </form>

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
