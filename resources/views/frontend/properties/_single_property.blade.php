<div class="col-lg-3 col-md-6">
    <a href="{{ route('frontend.properties.detail', $property->id) }}">
        <div class="card">
            <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
            <div class="card-img-overlay">
                <span class="badge badge-danger badge-pill">For {{ $property->listing_type }}</span>
            </div>
            <div class="card-body bg-light">
                <h4 class="card-title">{{ $property->name }}</h4>
                <h4 class="text-primary">{{ format_currency($property->price) }}</h4>
            </div>
            <div class="card-body border-top">

                <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            {{ $property->bathroom }}
                        </span>
                    <span class="ml-auto badge badge-pill badge-secondary pull-right">{{ $property->bathroom }}</span>
                </div>

                <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            {{ $property->bedroom }}
                        </span>
                    <span class="ml-auto badge badge-pill badge-secondary pull-right">
                        {{ $property->bedroom }}
                    </span>
                </div>

                <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            {{ $property->floor }}
                        </span>
                    <span class="ml-auto badge badge-pill badge-secondary pull-right">
                        {{ $property->floor }}
                    </span>
                </div>
            </div>
            <div class="card-body border-top">
                <div class="d-flex no-block align-items-center">
                    <img alt="img " class="rounded-circle border border-5 border-white "
                         src="../img/duongprofile (1).jpg" width="50px" height="50px">
                    <div>
                        <h5 class="card-title m-b-0">Duong</h5>
                        <h6 class="text-muted"></h6>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
