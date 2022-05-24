
@include('layouts.style')
{{-- <link rel="stylesheet" href="{{ asset('css/jquery.imagesloader.css')}}"> --}}
@include('layouts.lightmode')
        <!-- Navbar -->
        @include('layouts.topnavbar')
        @include('layouts.usersidebar')
        <!-- /.navbar -->
       
        <div class="content-wrapper">
            {{-- <div class="container"> --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    {{-- </div> --}}
                @endif
            <div class="container-fluid">
                <div class="card w-70">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Property Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url('admin/rent') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                </div>
                                <br>
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-md example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                    
                                  {{-- <br> <br> --}}
                                  <select class="form-select form-select-md mb-3" aria-label=".form-select-md example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                        {{-- <br> <br> --}}
                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Title</label>
                                            <input class="form-control" type="text" id="example-number-input"
                                                name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Rent
                                                Price</label>
                                            <input class="form-control" type="text"  id="example-number-input"
                                                name="rentalprice">
                                        </div>

                                        <div class="form-group">

                                            <label for="example-number-input" class="form-control-label">How many
                                                Bedrooms?</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="bedroom">

                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">How many
                                                Bathrooms?</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="bathroom">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Floor
                                                Size</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="floor">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Land
                                                Size</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="landsize">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Land
                                                Dimension</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="dimension">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">House
                                                No.</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="houseno">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Street
                                                No.</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="street">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Link
                                                Location</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="maplocation">
                                        </div>
                                        <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descrioption</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                </div>
                                
                                @include('image-upload')
                              
                            <button type="submit" class="btn btn-primary">Submit</button>        
                        </form>
                        </section>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
       @include('layouts.script')

