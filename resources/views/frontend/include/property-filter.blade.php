<div class="jumbotron mb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-body">
                    <form role="form" class="row" action="#" method="GET">
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <select class="form-control custom-select" name="listing_type">
                                    <option value="" disabled selected>Type</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Sale">Sale</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <select class="form-control custom-select" name="province_id">
                                    <option value="" disabled selected>Province</option>
                                    @foreach($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <select class="form-control custom-select">
                                    <option value="" disabled selected>Property Type</option>
                                    <option value="1">House/Villa</option>
                                    <option value="2">Hotel/Boutique/Guesthouse</option>
                                    <option value="3">Shophouse</option>
                                    <option value="3">Apartment/Flat/Condo</option>
                                    <option value="3">Warehouse</option>
                                    <option value="3">Office Space</option>
                                    <option value="3">Retail Space</option>
                                    <option value="3">Land</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <!-- <input class="form-control custom-select" Type="text" value="Min-Price"></input> -->
                                <select class="form-control custom-select">
                                    <option value="" disabled selected>Min-Price</option>
                                    <option value="">$3,000</option>
                                    <option value="">$5,000</option>
                                    <option value="">$10,000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <!-- <input class="form-control custom-select" Type="text" value="Max-Price"></input> -->
                                <select class="form-control custom-select">
                                    <option value="" disabled selected>Max-Price</option>
                                    <option value="1">$10,000</option>
                                    <option value="3">$50,000</option>
                                    <option value="1">$100,000</option>
                                    <option value="3">$200,000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a href="#" class="btn btn-info btn-m btn-block">
                                <span class="glyphicon glyphicon-search"></span> Search
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
