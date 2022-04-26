@include('layouts.style')
@include('layouts.lightmode')
        <!-- Navbar -->
        @include('layouts.topnavbar')
        @include('layouts.usersidebar')
        <!-- /.navbar -->
        <div class="content-wrapper">
            <div class="container-lg">
                <div class="card w-70">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Property Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                </div>
                                <br>
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
                                                name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Sale
                                                Price</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
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

                                        @include('layouts.inventory')

                                        
                                        <br>
                                        @include('layouts.image')
                                        <br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        </a>


                        </form>
                        </section>
                    </div>
                </div>

            </div>
            @include('layouts.footer')
            @include('layouts.script')

        </div>
       
