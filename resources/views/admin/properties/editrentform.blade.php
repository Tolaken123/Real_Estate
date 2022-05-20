
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
                                        <form action="{{ url('admin/rent',$rents)}}" method="POST">
                                            @csrf
                                            @method('put')
                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Title</label>
                                            <input class="form-control" type="text" value="{{$rents->name}}" id="example-number-input"
                                                name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Rent
                                                Price</label>
                                            <input class="form-control" type="text" value="{{$rents->rentalprice}}" id="example-number-input"
                                                name="rentalprice">
                                        </div>

                                        <div class="form-group">

                                            <label for="example-number-input" class="form-control-label">How many
                                                Bedrooms?</label>
                                            <input class="form-control" type="text" value="{{ $rents->bedroom }}" id="example-number-input"
                                                name="bedroom">

                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">How many
                                                Bathrooms?</label>
                                            <input class="form-control" type="text" value="{{ $rents->bathroom }}" id="example-number-input"
                                                name="bathroom">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Floor
                                                Size</label>
                                            <input class="form-control" type="text" value="{{ $rents->floor }}" id="example-number-input"
                                                name="housesize">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Land
                                                Size</label>
                                            <input class="form-control" type="text" value="{{ $rents->landsize }}" id="example-number-input"
                                                name="landsize">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Land
                                                Dimension</label>
                                            <input class="form-control" type="text" value="{{ $rents->dimension }}" id="example-number-input"
                                                name="dimension">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">House
                                                No.</label>
                                            <input class="form-control" type="text" value="{{ $rents->houseno }}" id="example-number-input"
                                                name="houseno">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Street
                                                No.</label>
                                            <input class="form-control" type="text" value="{{ $rents->street }}" id="example-number-input"
                                                name="street">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="example-number-input" class="form-control-label">Link
                                                Location</label>
                                            <input class="form-control" type="text" value="{{ $rents->maplocation }}" id="example-number-input"
                                                name="maplocation">
                                        </div>
                                        <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descrioption</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value="">{{$rents->description }}</textarea>
                                </div>
                                {{-- @include('layouts.inventory') --}}
                                    
    <label class="checkbox-inline">
        <input type="checkbox" name="inventery[]" value="genterator"{{ $rents->inventery=="genterator"? 'checked':''}}>&nbspGenterator
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"  name="inventery[]"value="Fan" {{ $rents->inventery=="fun"? 'checked':'' }}/>&nbspFan
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="inventery[]"value="Sofa">&nbspSofa
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="inventery[]" value="Refrigerator">&nbsp Refrigerator
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="inventery[]" value="Bed">&nbspBed
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="inventery[]" value="Aircondictionor">&nbspAircondictionor
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="inventery[]" value="TV">&nbspTV
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="inventery[]" value="Laundry Machine">&nbspLaundry Machine
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="inventery[]" value="Microwave">&nbspMicrowave
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="inventery[]" value="CCTV">&nbspCCTV
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="checkbox[]" value="Hot and Cold water">&nbspHot and Cold water
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="checkbox[]" value="Desk/Chair">&nbspDesk/Chair
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"name="checkbox[]" value="Cabinet">&nbsp Cabinet
      </label>
  
  
                      
                                        
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

        </div>
       @include('layouts.script')

