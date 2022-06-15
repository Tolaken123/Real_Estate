<!DOCTYPE html>
<!--divinectorweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detail</title>
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
    <div class="row">
      <h2>h</h2>
    </div>
    
    <div class="jumbotron m-3"style="margin-top: 100px;">
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
    
<!-- slide -->
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <div id="container">
    <div id="slideshow" class="" width="300%">
  <!-- Below are the images in the gallery -->
          <div><img src="../img/img1.jpg" width="100%" ></div>
          <div id="img-1" data-img-id="1" class="img-wrapper active" style="background-image: url('../img/House1.jpg')"></div>
          <div id="img-2" data-img-id="2" class="img-wrapper" style="background-image: url('../img/House7.jpg')"></div>
          <div id="img-3" data-img-id="3" class="img-wrapper" style="background-image: url('../img/House3.jpg')"></div>
          <div id="img-4" data-img-id="4" class="img-wrapper" style="background-image: url('../img/House4.jpg')"></div>
          <div id="img-1" data-img-id="5" class="img-wrapper" style="background-image: url('../img/House8.jpg')"></div>
          <div id="img-2" data-img-id="6" class="img-wrapper" style="background-image: url('../img/House6.jpg')"></div>
          <div id="img-3" data-img-id="7" class="img-wrapper" style="background-image: url('../img/House9.jpg')"></div>
          <div id="img-4" data-img-id="8" class="img-wrapper" style="background-image: url('../img/House2.jpg')"></div>

  <!-- Below are the thumbnails of above images -->
    <div>
      <div class="thumbs-container bottom">
        <div id="prev-btn" class="prev">	
          <span class="carousel-control-prev-icon"></span>
        </div>
        <ul class="thumbs">
          <li data-thumb-id="1" class="thumb active" style="background-image: url('../img/House1.jpg')"></li>
          <li data-thumb-id="2" class="thumb" style="background-image: url('../img/House7.jpg')"></li>
          <li data-thumb-id="3" class="thumb" style="background-image: url('../img/House3.jpg')"></li>
          <li data-thumb-id="4" class="thumb" style="background-image: url('../img/House4.jpg')"></li>
          <li data-thumb-id="5" class="thumb" style="background-image: url('../img/House8.jpg')"></li>
          <li data-thumb-id="6" class="thumb" style="background-image: url('../img/House6.jpg')"></li>
          <li data-thumb-id="7" class="thumb" style="background-image: url('../img/House9.jpg')"></li>
          <li data-thumb-id="8" class="thumb" style="background-image: url('../img/House2.jpg')"></li>
        </ul>

        <div id="next-btn" class="next">
          <span class="carousel-control-next-icon"></span>
          </div>
        </div>
      </div>
    </div>
  <div class="col-md-2"></div>
</div>
</div>
<!-- end slide -->

<!-- description -->
<div class="row">
  <p></p>
</div>
<div class="row mt-1">
    <div class="col-md-2"></div>
    <!-- <div class="jumbotron m-3"> -->
    <div class="col-md-8 mf-12" style="background-color: #ffffff; " >
    <div class="row">
      <div></div>
      <div class="col-md-5">
        <div class="container mt-1 ">
          <img src="../img/duongprofile (1).jpg" width="30%"; height="Auto"; alt="#" ><a href="#" style="text-decoration: none;  font-size: 200%;">Duong Ret</a>
          
          <table class="table table-striped ">
          <thead>
            <tr>
              <th><h4>property</h4></th>
              <th><h4>Qty</h4></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><h5>Bedroom</h5></td>
              <td><h5>5</h5></td>
            </tr>
            <tr>
              <td><h5>bathroom</h5></td>
              <td><h5>7</h5></td>
            </tr>
            <tr>
              <td><h5>land size</h5></td>
              <td><h5>30 x 100</h5></td>
            </tr>
            <tr>
              <td><h5>Floor size</h5></td>
              <td><h5>3</h5></td>
            </tr>
            <tr>
              <td><h5>Dimension</h5></td>
              <td><h5>20 x 30</h5></td>
            </tr>
            <tr>
              <td><h5>location</h5></td>
              <td><h5><a href="https://www.google.com/maps/place/Angkor+Wat/@13.4124745,103.864797,17z/data=!3m1!4b1!4m5!3m4!1s0x3110168aea9a272d:0x3eaba81157b0418d!8m2!3d13.4124693!4d103.8669857"><i style='font-size:24px' class='fas fa-map-marker-alt'></i></a></h5></td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
      <div class="col-md-7">
        <h2 class="text-center mt-3">Disciption</h2>
        <h4 class="text-center">As a first-time home seller, you have the advantage of having gone through a purchase and sale transaction when you bought the home. As a buyer, you spent time gathering your financial documents and searching for the perfect home. As the seller, a large amount of prep work is required, too, but it’s just a different type — you’ll spend your time getting your house looking its best for potential buyers. And depending on your plans, you may also have the added stress of buying and selling at the same time.
        </h4>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>
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