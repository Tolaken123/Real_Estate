@include('layouts.style')
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

                    <form action="{{ url('admin/rent',$rents)}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="card-body">
                            <div class="row">


                                <br>
                                <select class="form-select form-select-md mb-3" name="location_id"
                                    aria-label=".form-select-md example">
                                    <option selected>Select Location</option>
                                    <option value="1">Siem Reap</option>
                                    <option value="2">Phnom Penh</option>
                                    <option value="3">Battambang</option>
                                    <option value="1">Kampongthom</option>
                                    <option value="2">Kampot</option>
                                    <option value="3">Seihanuk Vill</option>
                                </select>
                                <br>

                                <select class="form-select form-select-md mb-3" name="category_id"
                                    aria-label=".form-select-md example">
                                    <option>Select Property Type</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($rents->category_id == $category->id)
                                        selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <div class="form-group">
                                    <label for="example-number-input" class="form-control-label">Title</label>
                                    <input class="form-control" type="text" value="{{$rents->name}}"
                                        id="example-number-input" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="form-control-label">Rent
                                        Price</label>
                                    <input class="form-control" type="text" value="{{$rents->rentalprice}}"
                                        id="example-number-input" name="rentalprice">
                                </div>

                                <div class="form-group">

                                    <label for="example-number-input" class="form-control-label">How many
                                        Bedrooms?</label>
                                    <input class="form-control" type="text" value="{{ $rents->bedroom }}"
                                        id="example-number-input" name="bedroom">

                                </div>

                                <div class="form-group">
                                    <label for="example-number-input" class="form-control-label">How many
                                        Bathrooms?</label>
                                    <input class="form-control" type="text" value="{{ $rents->bathroom }}"
                                        id="example-number-input" name="bathroom">
                                </div>

                                <div class="form-group">
                                    <label for="example-number-input" class="form-control-label">Floor
                                        Size</label>
                                    <input class="form-control" type="text" value="{{ $rents->floor }}"
                                        id="example-number-input" name="floor">
                                </div>

                                <div class="form-group">
                                    <label for="example-number-input" class="form-control-label">Land
                                        Size</label>
                                    <input class="form-control" type="text" value="{{ $rents->landsize }}"
                                        id="example-number-input" name="landsize">
                                </div>

                                <div class="form-group">
                                    <label for="example-number-input" class="form-control-label">Land
                                        Dimension</label>
                                    <input class="form-control" type="text" value="{{ $rents->dimension }}"
                                        id="example-number-input" name="dimension">
                                </div>

                                <div class="form-group">
                                    <label for="example-number-input" class="form-control-label">Link
                                        Location</label>
                                    <input class="form-control" type="text" value="{{ $rents->maplocation }}"
                                        id="example-number-input" name="maplocation">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descrioption</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        name="description">{!! $rents->description !!}</textarea>
                                </div>
                                @include('image.form')
                                </section>

                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <br> <br>

                    </form>

                </div>

            </div>
        </div>
        @include('layouts.footer')


    </div>
