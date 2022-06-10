<!DOCTYPE html>
<!--divinectorweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home_page</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/slideshow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>

<body id="home">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #140B5C;">
        <div class="container">
            <a class="navbar-brand" href="#home">Cam RealEstate</a> <button aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle link-light text-capitalize fs-4" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">Properties
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item text-capitalize  hover-bg" href="#sale">Sale</a></li>
                                <li><a class="dropdown-item text-capitalize  hover-bg" href="#rent">Rent</a></li>
                            </ul>
                        </div>
                    </li>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                    <li class="navbar-nav ms-auto">

@if (Route::has('login'))
<!-- <div  class="hidden fixed top-0 right-0 px-6 py-4 sm:block" > -->
<!-- class="hidden fixed top-0 right-0 px-6 py-4 sm:block"  -->

@auth
<a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
@else
<li class="nav-item ">

<a href="{{ route('login') }}" class="nav-link">
    <h5 class="text-capitalize">Login</h5>
</a>
<!-- {{-- class="text-sm text-gray-700 dark:text-gray-500 underline" --}} -->
</li>
<li class="nav-item">
@if (Route::has('register'))
<a href="{{ route('register') }}" class="nav-link">
    <h5 class="text-capitalize">Register</h5>
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
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-indicators">
            <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators"
                type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1"
                data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3"
                data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="..." class="d-block w-100" src="https://live.staticflickr.com/7442/15787257743_1b50713c53_b.jpg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">RealEstate</h5>
                    <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">The world Properties are in your hand.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="https://live.staticflickr.com/8596/16295589400_ae836d00ea_b.jpg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">Properties Sale</h5>
                    <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Find many properties to buy.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="https://live.staticflickr.com/7419/16218918228_93ab6aa2e9_b.jpg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">Properties Rent</h5>
                    <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Thare are many Properties for rent.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
                </div>
            </div>
        </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
            type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                class="visually-hidden">Previous</span></button> <button class="carousel-control-next"
            data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true"
                class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
    </div>
    <div class="jumbotron m-3">
        <div class="row bgimg">
            <div class="card">
                <div class="card-body">
                    <form role="form" class="row">
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <select class="form-control custom-select">
                                    <option value="" disabled selected>Status</option>
                                    <option value="1">Rent</option>
                                    <option value="2">Sale</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group has-info">
                                <select class="form-control custom-select">
                                    <option value="" disabled selected>Province</option>
                                    <option value="1">Siem Reap</option>
                                    <option value="2">Phnom Penh</option>
                                    <option value="3">Battambang</option>
                                    <option value="1">Kampongthom</option>
                                    <option value="2">Kampot</option>
                                    <option value="3">Seihanuk Vill</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
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
    <!-- sidebar -->
    <!-- <div class="w3-sidebar w3-light-grey " style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div> -->

    <!-- end seidebar -->

    <!-- end Search -->
    <!-- item -->
    
    
    <div class="row jumbotron m-5">
    <div class="text-center mb-4 "><strong class="btn btn-primary fs-4"  style="background: #140B5C;" id="sale">Properties For Sale</strong></div>
        <!-- item -->
        <div class="col-lg-3 col-md-6">
        <a href="#">

            <div class="card">
<<<<<<< HEAD
            <a href="#">

                <img class="card-img-top" src="../img/House1.jpg" alt="Card image cap">
            </a>
=======
              
                <img class="card-img-top" src="../img/House1.jpg" alt="">
             </a>
>>>>>>> 26870c6ee0bcb11487cb1f00fa8476bf75fe4d8d
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Sale</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Resort for sale</h4>
                    <h4 class="text-primary">&#36; 100000</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            3</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            2</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            2</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/duongprofile (1).jpg" width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Duong</h5>
                            <h6 class="text-muted"></h6>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        </a>

        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House2.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Sale</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">House near the sea</h4>
                    
                    <h4 class="text-primary">&#36; 1999999</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            8</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            5</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            5</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <!-- <a href="javascript:void(10) " class="m-r-15"> --></a>
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/duongprofile (2).jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Lay Mey</h5>
                            <h6 class="text-muted"></h6>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <!-- /item -->
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House3.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Sale</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">House for sale</h4>
                    <h4 class="text-primary">&#36; 399999</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            5</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            3</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            6</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/daraprofile.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Hear RaZz</h5>
                            <h6 class="text-muted"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House5.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Sale</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">movement house</h4>
                    <h4 class="text-primary">&#36; 1009</h4>
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
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/tolaprofile.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Tola</h5>
                            <h6 class="text-muted"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row jumbotron m-5">

<!-- Property rent -->

    <div class="text-center mb-4 "><strong class="btn btn-primary fs-4"  style="background: #140B5C;" id="rent">Properties For Rent</strong></div>
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House4.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">House for rent</h4>
                    <h4 class="text-primary">&#36; 200</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            1</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            1</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            2</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/tharothprofile.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Sotharoth</h5>
                            <h6 class="text-muted"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House6.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Palace</h4>
                    <h4 class="text-primary">&#36; 19999</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                            12</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            8</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                           30</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <!-- <a href="javascript:void(10) " class="m-r-15"> --></a>
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/heyprofile.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Pro Hey</h5>
                            <h6 class="text-muted"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->
        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House7.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Business Building </h4>
                    <h4 class="text-primary">&#36; 999</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bath"></i>
                           2</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            1</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            0</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/lyhorngprofile.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Ah Fong</h5>
                            <h6 class="text-muted"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /item -->

        <!-- item -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <img class="card-img-top" src="../img/House8.jpg" alt="Card image cap">
                <div class="card-img-overlay">
                    <span class="badge badge-danger badge-pill">For Rent</span>
                </div>
                <div class="card-body bg-light">
                    <h4 class="card-title">Room for rent</h4>
                    <h4 class="text-primary">&#36; 150</h4>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <span></span>
                        <span class="p-10 text-muted">
                            <i class='fa fa-bath'></i>
                            1</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span></span>
                        <span class="p-10 text-muted">
                            <i class="fas fa-bed"></i>
                            2</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                    </div>
                    <div class="d-flex no-block align-items-center">
                        <span class="p-10 text-muted">
                            <i class="fas fa-car"></i>
                            1</span>
                        <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex no-block align-items-center">
                        <img alt="img " class="rounded-circle border border-5 border-white " src="../img/user2-160x160.jpg"
                            width="50px" height="50px">
                        <div>
                            <h5 class="card-title m-b-0">Del Kuny</h5>
                            <h6 class="text-muted"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="https://www.youtube.com/">youtube</a>
    
        <!-- /item -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
        </script>

<div>
<footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <span class="logo_name">Cam RealEstate</span>
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
        <ul class="text-light">
        <h3 class="text-light">Contact_Us</h3>
          <h6>Smart: 081513303</h6>
          <h6>Metfone: 0977535488</h6>
          <h6>E-mail: camreales@gmail.com</h6>
          <h6>Telegram: 081513303</h6>
        </ul>
        <ul class="text-light">
        <h3 class="text-light">Address</h3>
          <p class="fst-italic">BBU road, Svaydongkum, Krong Siemreap, Siemreap.</p>
        </ul>
        <ul class="box input-box">
            <h3 class="text-light">Subscribe</h3>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright &#169; 2022 <a href="#">Cam RealEstate</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>
  </div>
</body>

</html>