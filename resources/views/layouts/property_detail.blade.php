<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-1">
        <img  src="../img/logo.png" alt="" width="100px" height="100px">
    </div>
    <!-- Search -->
    <div class="col-md-7">
          <div class="jumbotron m-3">
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
    <div class="col-md-2 mt-4">
    <!-- justify-content-center -->
      <ul class="nav center-content " >
        <li class="navbar-nav ms-auto" >
          @if (Route::has('login'))
                          <!-- <div  class="hidden fixed top-0 right-0 px-6 py-4 sm:block" > -->
                         <!-- class="hidden fixed top-0 right-0 px-6 py-4 sm:block"  -->
                                
           @auth
           <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
           @else
           <li class="nav-item ">
             <a href="{{ route('login') }}" class="nav-link"><h3>Login</h3></a>
             <!-- {{-- class="text-sm text-gray-700 dark:text-gray-500 underline" --}} -->
           </li>
           <li class="nav-item">
             @if (Route::has('register'))
             <a href="{{ route('register') }}"class="nav-link"><h3>Register</h3></a>
             @endif
             @endauth
             <!-- {{-- </div> --}} -->
             @endif
           </li>
        </li>
      </ul>
    </div>
    <div class="col-sm-1"></div>
</div>

<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-6">
        <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/House1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/House1.jpg" alt="Chicago" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div> 
      </div>
      <div class="carousel-item">
        <img src="../img/House1.jpg" alt="New York" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>  
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    </div>

    <div class="container-fluid mt-3">
    <h3>Carousel Example</h3>
    <p>The following example shows how to create a basic carousel with indicators and controls.</p>
    </div>

</div>
<div class="col-md-4">
<div class="container mt-3">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Category</th>
        <th>Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bedroom</td>
        <td>6</td>
      </tr>
      <tr>
        <td>Bathroom</td>
        <td>8</td>
      </tr>
      <tr>
      <td>Garage</td>
        <td>4</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</body>
</html>