<div class="col-lg-3 col-md-6 mt-4">
    <a class="text-decoration-none" href="{{ route('frontend.properties.detail', $property->id) }}">
        <div class="card">
            <img class="card-img-top" src="{{ asset('images/' . $property->thumbnail) }}" alt="Card image cap">
            <div class="card-img-overlay">
                <span
                    class="badge badge-danger badge-pill bg-danger text-white">For {{ $property->listing_type }}</span>
            </div>
            <div class="card-body bg-light ">
                <h5 class="card-title">{{ \Illuminate\Support\Str::limit( $property->name,50)  }}</h5>
                <h5 class="text-danger">{{ format_currency($property->price) }}</h5>
            </div>
            <div class="card-body border-top">

                <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <li>Bathroom: {{ $property->bathroom }}</li>
                        </span>
                    <span class="ml-auto badge badge-pill badge-secondary pull-right">{{ $property->bathroom }}</span>
                </div>

                <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <li>Bedroom: {{ $property->bedroom }}</li>

                        </span>
                    <span class="ml-auto badge badge-pill badge-secondary pull-right">
                        {{ $property->bedroom }}
                    </span>
                </div>

                <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <li>Land Size: {{ $property->landsize }}</li>

                        </span>
                    <span class="ml-auto badge badge-pill badge-secondary pull-right">
                        {{ $property->landsize }}
                    </span>
                </div>
                <div class="d-flex no-block align-items-center">
                    <span class="p-10 text-muted">
                        <li>ID: {{ $property->id }}</li>

                    </span>
                <span class="ml-auto badge badge-pill badge-secondary pull-right">
                    {{ $property->id }}
                </span>
            </div>
            </div>
            <div class="card-body border-top">
                <div class="d-flex no-block align-items-center">
                    @if(isset($property->user->avatar) && !empty($property->user->avatar))
                        <img alt="img " class="rounded-circle border border-5 border-white "
                             src="{{ asset('images/' . $property->user->avatar) }}" width="50px" height="50px">
                    @else
                        <img alt="img " class="rounded-circle border border-5 border-white "
                             src="{{ asset('img/nophoto.png') }}" width="50px" height="50px">

                    @endif
                    <div>
                        <h5 class="card-title m-b-0">{{ $property->user->name ?? "Unknown" }}</h5>
                        <h6 class="text-muted"></h6>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
