<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/home_page.css">
    <title>Cam Real Estate</title>
    <style>
        .myDIV {
            background: red;
            animation: mymove 5s infinite;
        }

        @keyframes mymove {
            50% {
                background-color: blue;
            }
        }
<<<<<<< HEAD

=======
        .bg-null{
            background-color: null;
        }
>>>>>>> 7140b3c81546dc888d02235e83da13455ab57665
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
    <!-- Nav tabs -->
    <!-- style="background-color: #99eeff;"  -->
    <div class="row">
        <nav class="nav col-mt-12 myDIV">
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
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu2">
                            <i class='fas fa-heart' style='font-size:25px;color:red'></i>
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
    <!-- ======== -->

<<<<<<< HEAD
    <!-- Search -->
    <div class="jumbotron m-3">
        <div class="row bgimg">
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
=======
  <!-- Search -->
  <div class="jumbotron m-3 bg-null" >
    <div class="row bgimg" >
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
>>>>>>> 7140b3c81546dc888d02235e83da13455ab57665
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
        <div class="row jumbtron m-2">
            <img alt="img " class="cover" src="../img/c.jpg">
            </p>

        </div>
    </div>
    <!-- sidebar -->
    <!-- <div class="w3-sidebar w3-light-grey " style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div> -->

    <!-- end seidebar -->

    <!-- end Search -->
    <!-- Item -->
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
    <!-- /item -->
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
    <!-- /item -->

    <!-- footer -->
    <footer>
        <div class="card myDIV">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3 bg-text ">
                    <h3 class="">Hello boy boy</h3>
                </div>
                <div class="col-md-3 bg-text ">
                    <h3 class="">Hello boy boy</h3>
                </div>
                <div class="col-md-3">

                </div>
                <img src="../img/footerbg.png" class="" alt="...">
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>
