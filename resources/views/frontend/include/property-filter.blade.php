<div class="jumbotron mb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-body">
                    <form role="form" class="row" action="{{ route('frontend.properties.index') }}" method="GET">
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <select class="form-control custom-select" name="listing_type">
                                    <option value="" disabled selected>Type</option>
                                    <option
                                        {{ request()->input('listing_type') == "Rent" ? 'selected' : '' }} value="Rent">
                                        Rent
                                    </option>
                                    <option
                                        {{ request()->input('listing_type') == "Sale" ? 'selected' : '' }} value="Sale">
                                        Sale
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <select class="form-control custom-select" name="province_id">
                                    <option value="" disabled selected>Province</option>
                                    @foreach($provinces as $province)
                                        <option
                                            {{ request()->input('province_id') == $province->id ? 'selected' : '' }} value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <select class="form-control custom-select" name="category_id">
                                    <option value="" disabled selected>Property Type</option>
                                    @foreach($property_types as $type)
                                        <option
                                            {{ request()->input('category_id') == $type->id ? 'selected' : '' }} value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <!-- <input class="form-control custom-select" Type="text" value="Min-Price"></input> -->
                                <select class="form-control custom-select" name="min_price">
                                    <option value="" disabled selected>Min-Price</option>
                                    @foreach($min_price_ranges as $range)
                                        <option
                                            {{ request()->input('min_price') == $range ? 'selected': '' }}  value="{{ $range }}">{{ format_currency($range) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <!-- <input class="form-control custom-select" Type="text" value="Max-Price"></input> -->
                                <select class="form-control custom-select" name="max_price">
                                    <option value="" disabled selected>Max-Price</option>
                                    @foreach($max_price_ranges as $range)
                                        <option
                                            {{ request()->input('max_price') == $range ? 'selected': '' }} value="{{ $range }}">{{ format_currency($range) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <button type="submit" class="btn btn-info btn-m btn-block">
                                <span class="glyphicon glyphicon-search"></span> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
