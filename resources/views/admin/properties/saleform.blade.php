@include('layouts.style')
@include('layouts.lightmode')
<<<<<<< HEAD
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
        <div class="container-fluid">
            <div class="card ">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Property Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ url('admin/sale') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                            </div>

                            <br>
                            <select class="form-select form-select-md mb-3" aria-label=".form-select-md example">
                                <option selected>Select Location</option>
                                <option value="1">Siem Reap</option>
                                <option value="2">Phnom Penh</option>
                                <option value="3">Battambang</option>
                                <option value="1">Kampongthom</option>
                                <option value="2">Kampot</option>
                                <option value="3">Seihanuk Vill</option>
                            </select>
                            <br>
                            <select class="form-select form-select-md mb-3" aria-label=".form-select-md example">
                                <option selected>Select Property Type</option>
                                <option value="1">House/Villa</option>
                                <option value="2">Hotel/Boutique/Guesthouse</option>
                                <option value="3">Shophouse</option>
                                <option value="3">Apartment/Flat/Condo</option>
                                <option value="3">Warehouse</option>
                                <option value="3">Office Space</option>
                                <option value="3">Retail Space</option>
                                <option value="3">Land</option>
                            </select>
                            <br>

                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Title</label>
                                <input class="form-control" type="text" value="" id="example-number-input" name="name">
                            </div>
                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Sale
                                    Price</label>
                                <input class="form-control" type="text" value="" id="example-number-input"
                                    name="saleprice">
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
                                    name="housesize">
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
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="description"></textarea>
                            </div>

                            @include('layouts.inventory')

                            @include('image-upload')
                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </a>
                                        <br><br>
                    </form>
                    </section>
                </div>
            </div>

        </div>
        @include('layouts.footer')
        @include('layouts.script')

    </div>
=======
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
            </div>
        @endif
            <div class="container-fluid">
                <div class="card ">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Property Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url('admin/sale') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown">
                                        Select Your Location
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Phnom Penh</a>
                                        <a class="dropdown-item" href="#">Siem Reap</a>
                                        <a class="dropdown-item" href="#">Battambang</a>
                                        <a class="dropdown-item" href="#">Sihanuk</a>
                                        <a class="dropdown-item" href="#">Kep</a>
                                        <a class="dropdown-item" href="#">Kampot</a>
                                        <a class="dropdown-item" href="#">Kandal</a>
                                        <a class="dropdown-item" href="#">Kampangcham</a>
                                        <a class="dropdown-item" href="#">Kampangchnang</a>
                                        <a class="dropdown-item" href="#">Takeo</a>
                                        <a class="dropdown-item" href="#">Koh Kong</a>
                                        <a class="dropdown-item" href="#">Other</a>
                                    </div>
                                    <br><br>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown">
                                            Select Property Type
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">House/Villa</a>
                                            <a class="dropdown-item" href="#">Apartment</a>
                                            <a class="dropdown-item" href="#">Condo</a>
                                            <a class="dropdown-item" href="#">Borey</a>
                                            <a class="dropdown-item" href="#">Flat</a>
                                            <a class="dropdown-item" href="#">Shophouse</a>
                                            <a class="dropdown-item" href="#">Boutique/Hotel/Guesthouse</a>
                                            <a class="dropdown-item" href="#">Office Space</a>
                                            <a class="dropdown-item" href="#">Land</a>
                                            <a class="dropdown-item" href="#">Warehouse</a>
                                            <a class="dropdown-item" href="#">Retail Space</a>
                                            <a class="dropdown-item" href="#">Buisseniss For Sale</a>
                                        </div>
                                        <br> <br>
                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Title</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Sale
                                                Price</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="saleprice">
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
                                                name="housesize">
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

                                        {{-- @include('layouts.inventory') --}}

                                        
                                        <br>
                                        @include('image.form')
                                        <br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        {{-- </a> --}}


                        </form>
                       
                    </div>
                </div>
            </div>
            @include('layouts.footer')
    <input id="files" type="file" name="files[]" data-button="" multiple="" accept="image/jpeg, image/png, image/gif," style="display:none;>

            @include('layouts.script')

        </div>

       
>>>>>>> fa70aae3e1603b303829795b3a315c812782e2fd
