@include('layouts.style')
@include('layouts.lightmode')
<!-- Navbar -->
@include('layouts.topnavbar')
@include('layouts.usersidebar')
<!-- /.navbar -->
<div class="content-wrapper">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        {{-- </div> --}}
        @endif
        <br> <br>
        <div class="container-fluid">
            <div class="card ">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Property Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ url('admin/rent') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                            </div>
                            <br>



                            <select class="form-select form-select-md mb-3" name="type"
                                aria-label=".form-select-md example">
                                <option selected>Select Listing Type</option>
                                <option value="1">Rent</option>
                                <option value="1">Sale</option>
                            </select>
                            <br>
                            <select class="form-select form-select-md mb-3" name="district"
                                aria-label=".form-select-md example">
                                <option>Select Province</option>
                                @foreach($provinces as $CityProvince)
                                <option value="{{ $CityProvince->id }}">{{$CityProvince->name}}
                                </option>
                                @endforeach
                            </select>
                            <br>
                            <select class="form-select form-select-md mb-3" name="district"
                                aria-label=".form-select-md example">
                                <option selected>Select District</option>
                                <option value="1">Siem Reap</option>
                            </select>
                            <br>
                            <select class="form-select form-select-md mb-3" name="commune"
                                aria-label=".form-select-md example">
                                <option selected>Select Commune</option>
                                <option value="1">Siem Reap</option>
                            </select>
                            <br>
                            <select class="form-select form-select-md mb-3" name="village"
                                aria-label=".form-select-md example">
                                <option selected>Select Village</option>
                                <option value="1">Siem Reap</option>
                            </select>
                            <br>
                            <select class="form-select form-select-md mb-3" name="category_id"
                                aria-label=".form-select-md example">
                                <option>Select Property Type</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{$category->name}}
                                </option>
                                @endforeach
                            </select>
                            <br>


                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Title</label>
                                <input class="form-control" type="text" id="example-number-input" name="name">
                            </div>
                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">
                                    Price</label>
                                <input class="form-control" type="text" id="example-number-input" name="rentalprice">
                            </div>


                            <div class="form-group">

                                <label for="example-number-input" class="form-control-label">How many Bedrooms?</label>

                                <input class="form-control" type="text" value="" id="example-number-input"
                                    name="bedroom">


                            </div>

                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">How many Bathrooms?</label>

                                <input class="form-control" type="text" value="" id="example-number-input"
                                    name="bathroom">

                            </div>

                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">FloorSize</label>

                                <input class="form-control" type="text" value="" id="example-number-input" name="floor">

                            </div>

                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">LandSize</label>
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
                                <label for="example-number-input" class="form-control-label">Link
                                    Location</label>
                                <input class="form-control" type="text" value="" id="example-number-input"
                                    name="maplocation">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" class="form-label">Descrioption</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="description"></textarea>
                            </div>
                            @include('image.form')
                            </section>

                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br> <br>

                    </form>

                </div>
