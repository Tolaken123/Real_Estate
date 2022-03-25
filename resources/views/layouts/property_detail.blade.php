<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="../css/slideshow.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Detail</title>
</head>
<body class="" style="background-color: #E5E5E5E5">
<div class="row" style="background-color: #ffffff" >
    <div class="col-sm-1"></div>
    <div class="col-md-1">
        <img  src="../img/logo.png" alt="" height="70%">
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
<!-- slideshow -->
<div class="row" style="padding-top: 1%;">
	<div class="col-md-2">
  
	</div>
	<div class="col-md-6" >

    <div id="container">

			<div id="slideshow" class="" width="300%">
				<!-- Below are the images in the gallery -->
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
		</div>
<!--end slideshow -->
</div>
<div class="col-md-3" style="background-color: #ffffff" >
  <div class="container mt-3" >
  <tr>
    <th><img class="mx-auto d-block" src="../img/user2-160x160.jpg" alt="#" height="10%"></th>
    <th><h3 class="text-center">Duong </h3></th>
  </tr>
    <div class="" style="background-color: #ffffff">
      <h2>ផ្ទះលក់បន្ទាន់​</h2>
      <h4>មានសម្ភារះ​ប្រើប្រាស់ស្រាប់ អាចបង់រំលស់ ឬ ទិញដាក់</h4>
      <h4>0123456789</h4>
      <h4>realestate@gmail.com</h4>
      <h4>SiemReap</h4>
      <table class="table table-striped">
        <tbody>
          <tr>
            <td>ID</td>
            <td>62453</td>
          </tr>
          
          <tr>
            <td>Category</td>
            <td>House</td>
          </tr>
          <td>For</td>
            <td>Sale</td>
          </tr>
          <td>Price</td>
            <td>100000$</td>
          </tr>
          <tr>
          <td>Location</td>
            <td>siem reap</td>
          </tr>
          <td>Posted</td>
            <td>17-Mar-22</td>
          </tr>
        </tbody>
      </table>
      </div>
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
        <tr>
      </tbody>
    </table>
  </div>
</div>
  <div class="col-md-1">
    
  </div>
</div>

<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-6">
    

  </div>
  <div class="col-md-4">

  </div>
</div>
<div class="row">
  <p></p>
</div>
<footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">CodingLab</span>
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