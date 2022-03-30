<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../css/slideshow.css">
    <title>Cam Real Estate</title>
    <style>
        .myDIV {

        }

        .bg-text {
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/opacity/see-through */
            color: white;
            /* font-weight: bold; */
            border: 3px solid #f1f1f1;
            /* position: absolute; */
            /* top: 50%; */
            /* left: 50%; */
            /* transform: translate(-50%, -50%); */
            /* z-index: 2; */
            /* width: 80%; */
            /* padding: 20px; */
            text-align: center;
        }

    </style>
</head>

<body>
    <!-- Search -->
    <div class="jumbotron m-3">
        <div class="row bgimg fixed-top">
            <div class="card">
                <div class="card-body">
                    <form role="form" class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group has-info">
                                <select class="form-control custom-select">
                                    <option value="" disabled selected>Status</option>
                                    <option value="1">Rent</option>
                                    <option value="2">Sale</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group has-info">
                                <select class="form-control custom-select">
                                    <option value="" disabled selected>Country</option>
                                    <option value="1">India</option>
                                    <option value="2">Germany</option>
                                    <option value="3">Spain</option>
                                    <option value="4">Russia</option>
                                    <option value="5">United States</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <select class="form-control custom-select">
                                    <option value="" disabled selected>City</option>
                                    <option value="1">Moscow</option>
                                    <option value="2">Barcelona</option>
                                    <option value="3">Mumbai</option>
                                    <option value="4">Houston</option>
                                    <option value="5">Sokovia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group has-info">
                                <select class="form-control custom-select">
                                    <option value="" disabled selected>Property Type</option>
                                    <option value="1">Apartment</option>
                                    <option value="2">Villa/Mansion</option>
                                    <option value="3">Cottage</option>
                                    <option value="4">Flat</option>
                                    <option value="5">House</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-1">
                            <a href="#" class="btn btn-info btn-m">
                                <span class="glyphicon glyphicon-search"></span> Search
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <img src="../img/House1.jpg" alt="" srcset="" width="100%">
    </div>
    <div class="row">
        <p></p>
    </div>
    <div class="row" style="background-color: #8ED5F5">
        <nav class="nav col-mt-12" >
            <div class="col-sm-1"></div>
            <img src="../img/logo.png" alt="" width="70px" height="70px">
            <div class="container col-md-8 mt-3">
                <ul class="nav nav-tabs justify-content-bottom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home">
                            <h4>Home</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu1">
                            <h4>Bye</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu2">
                            <h4>Rent</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu2">
                            <h4>Installment payment</h4>
                        </a>
                    </li>
                   
                    
                    <li class="navbar-nav ms-auto">

                        @if (Route::has('login'))
                        <!-- <div  class="hidden fixed top-0 right-0 px-6 py-4 sm:block" > -->
                        <!-- class="hidden fixed top-0 right-0 px-6 py-4 sm:block"  -->

                        @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                    <li class="nav-item ">

                        <a href="{{ route('login') }}" class="nav-link">
                            <h4>Login</h4>
                        </a>
                        <!-- {{-- class="text-sm text-gray-700 dark:text-gray-500 underline" --}} -->
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">
                            <h4>Register</h4>
                        </a>
                        @endif
                        @endauth
                        <!-- {{-- </div> --}} -->
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    <div class="row jumbotron m-5">
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <!-- <a href="javascript:void(10) " class="m-r-15"> --></a>
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span></span>
                        <span class="p-10 text-muted">
                            <i class='fa fa-bath'></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span></span>
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row jumbotron m-5">
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <!-- <a href="javascript:void(10) " class="m-r-15"> --></a>
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span></span>
                        <span class="p-10 text-muted">
                            <i class='fa fa-bath'></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span></span>
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row jumbotron m-5">
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <!-- <a href="javascript:void(10) " class="m-r-15"> --></a>
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Florida 5, Pinecrest, FL</h4>
                    <h4 class="text-primary">&#36; 220,000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span></span>
                        <span class="p-10 text-muted">
                            <i class='fa fa-bath'></i>
                            Bathrooms</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span></span>
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            Beds</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            Garages</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Jon Doe</h5>
                            <h6 class="text-muted">5 Property</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">Real_Estate</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Services</li>
          <li><a href="#">App design</a></li>
          <li><a href="#">Web design</a></li>
          <li><a href="#">Logo design</a></li>
          <li><a href="#">Banner design</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Courses</li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Photography</a></li>
          <li><a href="#">Photoshop</a></li>
        </ul>
        <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright &#169; 2021 <a href="#">CodingLab.</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>
</body>

</html>
