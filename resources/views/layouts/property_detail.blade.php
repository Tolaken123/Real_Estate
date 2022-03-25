<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/slideshow.css">
  <title>Document</title>
</head>
<body style="background-color: #E5E5E5E5">
<div class="row" style="background-color: #ffffff">
  <div class="col-sm-1"></div>
  <div class="col-md-1">
    <img src="../img/logo.png" alt="" height="70%">
  </div>
<!-- Search -->
  <div class="col-md-7">
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
    </div>
  <div class="col-md-2 mt-4">
    <ul class="nav center-content ">
      <li class="navbar-nav ms-auto">
        @if (Route::has('login'))
        @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
        <li class="nav-item ">
          <a href="{{ route('login') }}" class="nav-link">
            <h3>Login</h3>
          </a>
        </li>
        <li class="nav-item">
          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="nav-link">
            <h3>Register</h3>
          </a>
          @endif
          @endauth
          @endif
        </li>
      </li>
    </ul>
  </div>
  <div class="col-sm-1">

  </div>
</div>
<!-- slide -->
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <div id="container">
    <div id="slideshow" class="" width="300%">
  <!-- Below are the images in the gallery -->
          <div><img src="../img/img1.jpg" width="100%" ></div>
          <div id="img-1" data-img-id="1" class="img-wrapper active" style="background-image: url('../img/img1.jpg')"></div>
          <div id="img-2" data-img-id="2" class="img-wrapper" style="background-image: url('../img/img2.jpg')"></div>
          <div id="img-3" data-img-id="3" class="img-wrapper" style="background-image: url('../img/img3.jpg')"></div>
          <div id="img-4" data-img-id="4" class="img-wrapper" style="background-image: url('../img/img2.jpg')"></div>
          <div id="img-1" data-img-id="5" class="img-wrapper" style="background-image: url('../img/img1.jpg')"></div>
          <div id="img-2" data-img-id="6" class="img-wrapper" style="background-image: url('../img/img2.jpg')"></div>
          <div id="img-3" data-img-id="7" class="img-wrapper" style="background-image: url('../img/img3.jpg')"></div>
          <div id="img-4" data-img-id="8" class="img-wrapper" style="background-image: url('../img/img2.jpg')"></div>

  <!-- Below are the thumbnails of above images -->
    <div>
      <div class="thumbs-container bottom">
        <div id="prev-btn" class="prev">	
          <span class="carousel-control-prev-icon"></span>
        </div>
        <ul class="thumbs">
          <li data-thumb-id="1" class="thumb active" style="background-image: url('../img/img1-thumb.jpg')"></li>
          <li data-thumb-id="2" class="thumb" style="background-image: url('../img/img2-thumb.jpg')"></li>
          <li data-thumb-id="3" class="thumb" style="background-image: url('../img/img3-thumb.jpg')"></li>
          <li data-thumb-id="4" class="thumb" style="background-image: url('../img/img2-thumb.jpg')"></li>
          <li data-thumb-id="5" class="thumb" style="background-image: url('../img/img1-thumb.jpg')"></li>
          <li data-thumb-id="6" class="thumb" style="background-image: url('../img/img2-thumb.jpg')"></li>
          <li data-thumb-id="7" class="thumb" style="background-image: url('../img/img3-thumb.jpg')"></li>
          <li data-thumb-id="8" class="thumb" style="background-image: url('../img/img2-thumb.jpg')"></li>
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
  <div class="col-md-2"></div>
  <div class="col-md-8" style="background-color: #ffffff">
    <div class="container mt-5">
      <a href="">Duong</a>
    </div>

  </div>
  <div class="col-md-2"></div>
</div>

<!-- end description -->

<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script src="../js/gallery.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>