<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Cam Real Estate</title>
</head>
<body>
<nav class="nav -mt-3" style="background-color: #99eeff;">
    <img src="../img/logo.png" alt="" width="70px" height="70px">

    <ul class="nav justify-content-center">

      <div class="nav nav-tabs align-center">
        <li class="nav-item mt-4">
          <a class="nav-link btn-outline-light" href="#">Home</a>
        </li>
        <li class="nav-item mt-4">
          <a class="nav-link btn-outline-light" href="#">House</a>
        </li>
        <li class="nav-item mt-4">
          <a class="nav-link btn-outline-light" href="#">Land</a>
        </li>
        <li class="nav-item mt-4">
          <a class="nav-link btn-outline-light" href="#">Hotel</a>
        </li>
        <li class="nav-item mt-4">
          <a class="nav-link btn-outline-light" href="#">Condo</a>
        </li>
        <li class="nav-item mt-4">
          <a class="nav-link btn-outline-light" href="#">Room</a>
        </li>
        <li class="nav-item mt-4">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </div>
    </ul>
  </nav>
  <!-- Search -->
  <div class="jumbotron m-3">
  <div class="row">
                    <div class="col-md-12">
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
                </div>
<!-- /Search -->
<!-- Item -->
<!-- .row -->
<div class="row jumbotron m-2">
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
                                    <span><img src="../assets/images/property/pro-bath.png"></span>
                                    <span class="p-10 text-muted">Bathrooms</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><img src="../assets/images/property/pro-bed.png"></span>
                                    <span class="p-10 text-muted">Beds</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><img src="../assets/images/property/pro-garage.png"></span>
                                    <span class="p-10 text-muted">Garages</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="d-flex no-block align-items-center">
                                    <a href="javascript:void(0) " class="m-r-15"><img alt="img " class="thumb-md img-circle " src="../assets/images/users/agent2.jpg "></a>
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
                                    <span><img src="../assets/images/property/pro-bath.png"></span>
                                    <span class="p-10 text-muted">Bathrooms</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><img src="../assets/images/property/pro-bed.png"></span>
                                    <span class="p-10 text-muted">Beds</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><img src="../assets/images/property/pro-garage.png"></span>
                                    <span class="p-10 text-muted">Garages</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="d-flex no-block align-items-center">
                                    <a href="javascript:void(0) " class="m-r-15"><img alt="img " class="thumb-md img-circle " src="../assets/images/users/agent2.jpg "></a>
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
                                    <span><img src="../assets/images/property/pro-bath.png"></span>
                                    <span class="p-10 text-muted">Bathrooms</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><img src="../assets/images/property/pro-bed.png"></span>
                                    <span class="p-10 text-muted">Beds</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><img src="../assets/images/property/pro-garage.png"></span>
                                    <span class="p-10 text-muted">Garages</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="d-flex no-block align-items-center">
                                    <a href="javascript:void(0) " class="m-r-15"><img alt="img " class="thumb-md img-circle " src="../assets/images/users/agent2.jpg "></a>
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
                                <span><img src="../assets/images/property/pro-bed.png"></span>
                                    <span class="p-10 text-muted">Bathrooms</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><img src="../assets/images/property/pro-bed.png"></span>
                                    <span class="p-10 text-muted">Beds</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">2</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><img src="../assets/images/property/pro-garage.png"></span>
                                    <span class="p-10 text-muted">Garages</span>
                                    <span class="ml-auto badge badge-pill badge-secondary pull-right">1</span>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="d-flex no-block align-items-center">
                                    <a href="javascript:void(0) " class="m-r-15"><img alt="img " class="thumb-md img-circle " src="../assets/images/users/agent2.jpg "></a>
                                    <div>
                                        <h5 class="card-title m-b-0">Jon Doe</h5>
                                        <h6 class="text-muted">5 Property</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->
                    
                    
<!-- /Item -->
<script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- bootstrap-select javascript -->
    <script src="../assets/node_modules/bootstrap-select/bootstrap-select.min.js"></script>
</body>
</html>