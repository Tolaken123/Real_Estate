<!DOCTYPE html>
<!--divinectorweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap 5 Slider With Text Animation</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Cam RealEstate</a> <button aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">Properties
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Sale</a></li>
                                <li><a class="dropdown-item" href="#">Rent</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
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
                <img alt="..." class="d-block w-100" src="https://i.postimg.cc/LsTXqTNZ/1.jpg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">Web Design</h5>
                    <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="https://i.postimg.cc/C1rx7Kyh/2.jpg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">Graphics Design</h5>
                    <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="https://i.postimg.cc/c4nL7ZFW/3.jpg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">Photography</h5>
                    <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
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
                    <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg" width="50px"
                        height="50px">
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
                    <img alt="img " class="rounded-circle border border-5 border-white " src="../img/R.jpg" width="50px"
                        height="50px">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
        </script>
</body>

</html>
