@extends('layouts.app')
@section('content')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
<link rel="stylesheet" type="text/css" href="{{ asset('css/user_profile.css') }}" />
<main >
<div class="container mt-6" >
   
        <div class=" social-prof">
        <hr/>
                <div class="wrapper">
                    <img src="/img/user2-160x160.jpg" alt="" class="user-profile">
                   
                </div>
            </div>
            </div>
        </div>
      <div class="container" >
        <form> 
        
                <div class="card-body">
                    <div class="form-group">
                        <label for="InputName">Name</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter name">

                    </div>
                    <div class="form-group">
                        <label for="InputName">Phone</label>
                        <input type="phone" class="form-control" id="phone" placeholder="Enter Phone">

                    </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div> 
                  </div>
                   <!-- <div class="form-check"> 
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> -->
                

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> 
                 </div>  -->
        </form>
       
        </div> 
    </div>
</main>
@endsection