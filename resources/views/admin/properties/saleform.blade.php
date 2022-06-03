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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        name="description"></textarea>
                                </div>

                            
                                <br>
                                @include('image.form')
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                 </a>


                </form>

            </div>
        </div>
    </div>
    @include('layouts.footer')
   

            

        </div>
      

