<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #140B5C;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('frontend.home') }}">Cam RealEstate</a>
        <button aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle link-light text-capitalize fs-4" href="#" role="button"
                           id="dropdownMenuLink"
                           data-bs-toggle="dropdown" aria-expanded="false">Properties
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item text-capitalize  hover-bg"
                                   href="{{ route('frontend.properties.index') }}">All</a></li>
                            <li><a class="dropdown-item text-capitalize hover-bg"
                                   href="{{ route('frontend.properties.index',['listing_type' => 'Sale']) }}">Sale</a>
                            </li>
                            <li><a class="dropdown-item text-capitalize hover-bg"
                                   href="{{ route('frontend.properties.index',['listing_type' => 'Rent']) }}">Rent</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @guest()
                    <li class="nav-item ">
                        <a href="{{ route('login') }}" class="nav-link">
                            <h5 class="text-capitalize">Login</h5>
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                <h5 class="text-capitalize">Register</h5>
                            </a>
                        </li>
                    @endif
                @endguest
                @auth
                    <li class="nav-item ">
                        <a href="{{ url('/home') }}" class="nav-link">
                            <h5 class="text-capitalize">Home</h5>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
