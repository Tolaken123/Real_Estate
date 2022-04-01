<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/slideshow.css">
  <title>Document</title>
  <style>
    .mf-12{
      margin-left: 12px;
    }
    .txtcenter {
  text-align: center;
}
  </style>
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
<!-- start about us -->
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="container mt-3">
      <h2 class="txtcenter">HDDTTL KH</h2>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action txtcenter"><h3>Welcome</h3></a>
          <a href="#" class="list-group-item list-group-item-action "><h4>ក្រុមហ៊ុនយើងខ្ញុំមានទទួលផ្សប់ផ្សាយលក់អចលនទ្រព្យ</h4></a>
          <a href="#" class="list-group-item list-group-item-action "><h4>លោកអ្នកក៏អាចចូលទិញ ជួល លក់ បង់រំលស់ អចលនទ្រព្យបានដោយសេរី</h4></a>
        </div>
    </div>
  </div>
  <div class="col-md-3"></div>
</div>
<!-- end about us -->
<!-- start contact us -->
<div class="row">
    <div class="col-md-2 p-3 col-sm-2">
    <table class="table table-striped" style="background-color: white">
            <thead>
                <tr>
                    <img src="../img/img1.jpg" width="100%">
                </tr>
                <tr>
                    <h2 class="txtcenter">Duong Ret</h2>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i style='font-size:36px' class='fas'>&#xf2a0;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i style='font-size:24px' class='fas'>&#xf1d8;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i class="material-icons style='font-size:36px'">&#xe158;</i></td>
                    <td><h4>duongret@gmail.com</h4></td>
                </tr>
                <tr>
                    <td><i class='fab fa-facebook' style='font-size:24px'></i></i></td>
                    <td><h4>Duong Ret</h4></td>
                </tr>
                <tr>
                    <td><i class='fas fa-map-marker-alt' style='font-size:30px'></i></i></td>
                    <td><h4>ភូមិជ្រៃ សង្កាត់ទឹកវិល ក្រុងសៀមរាប</h4></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-2 p-3">
        <table class="table table-striped" style="background-color: white">
            <thead>
                <tr>
                    <img src="../img/img1.jpg" width="100%">
                </tr>
                <tr>
                    <h2 class="txtcenter">Duong Ret</h2>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i style='font-size:36px' class='fas'>&#xf2a0;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i style='font-size:24px' class='fas'>&#xf1d8;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i class="material-icons style='font-size:36px'">&#xe158;</i></td>
                    <td><h4>duongret@gmail.com</h4></td>
                </tr>
                <tr>
                    <td><i class='fab fa-facebook' style='font-size:24px'></i></i></td>
                    <td><h4>Duong Ret</h4></td>
                </tr>
                <tr>
                    <td><i class='fas fa-map-marker-alt' style='font-size:30px'></i></i></td>
                    <td><h4>ភូមិជ្រៃ សង្កាត់ទឹកវិល ក្រុងសៀមរាប</h4></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-2 p-3">
    <table class="table table-striped" style="background-color: white">
            <thead>
                <tr>
                    <img src="../img/img1.jpg" width="100%">
                </tr>
                <tr>
                    <h2 class="txtcenter">Duong Ret</h2>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i style='font-size:36px' class='fas'>&#xf2a0;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i style='font-size:24px' class='fas'>&#xf1d8;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i class="material-icons style='font-size:36px'">&#xe158;</i></td>
                    <td><h4>duongret@gmail.com</h4></td>
                </tr>
                <tr>
                    <td><i class='fab fa-facebook' style='font-size:24px'></i></i></td>
                    <td><h4>Duong Ret</h4></td>
                </tr>
                <tr>
                    <td><i class='fas fa-map-marker-alt' style='font-size:30px'></i></i></td>
                    <td><h4>ភូមិជ្រៃ សង្កាត់ទឹកវិល ក្រុងសៀមរាប</h4></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-2 p-3">
    <table class="table table-striped" style="background-color: white">
            <thead>
                <tr>
                    <img src="../img/img1.jpg" width="100%">
                </tr>
                <tr>
                    <h2 class="txtcenter">Duong Ret</h2>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i style='font-size:36px' class='fas'>&#xf2a0;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i style='font-size:24px' class='fas'>&#xf1d8;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i class="material-icons style='font-size:36px'">&#xe158;</i></td>
                    <td><h4>duongret@gmail.com</h4></td>
                </tr>
                <tr>
                    <td><i class='fab fa-facebook' style='font-size:24px'></i></i></td>
                    <td><h4>Duong Ret</h4></td>
                </tr>
                <tr>
                    <td><i class='fas fa-map-marker-alt' style='font-size:30px'></i></i></td>
                    <td><h4>ភូមិជ្រៃ សង្កាត់ទឹកវិល ក្រុងសៀមរាប</h4></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-2 p-3">
    <table class="table table-striped" style="background-color: white">
            <thead>
                <tr>
                    <img src="../img/img1.jpg" width="100%">
                </tr>
                <tr>
                    <h2 class="txtcenter">Duong Ret</h2>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i style='font-size:36px' class='fas'>&#xf2a0;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i style='font-size:24px' class='fas'>&#xf1d8;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i class="material-icons style='font-size:36px'">&#xe158;</i></td>
                    <td><h4>duongret@gmail.com</h4></td>
                </tr>
                <tr>
                    <td><i class='fab fa-facebook' style='font-size:24px'></i></i></td>
                    <td><h4>Duong Ret</h4></td>
                </tr>
                <tr>
                    <td><i class='fas fa-map-marker-alt' style='font-size:30px'></i></i></td>
                    <td><h4>ភូមិជ្រៃ សង្កាត់ទឹកវិល ក្រុងសៀមរាប</h4></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-2 p-3">
    <table class="table table-striped" style="background-color: white">
            <thead>
                <tr>
                    <img src="../img/img1.jpg" width="100%">
                </tr>
                <tr>
                    <h2 class="txtcenter">Duong Ret</h2>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i style='font-size:36px' class='fas'>&#xf2a0;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i style='font-size:24px' class='fas'>&#xf1d8;</i></td>
                    <td><h4>0882885211</h4></td>
                </tr>
                <tr>
                    <td><i class="material-icons style='font-size:36px'">&#xe158;</i></td>
                    <td><h4>duongret@gmail.com</h4></td>
                </tr>
                <tr>
                    <td><i class='fab fa-facebook' style='font-size:24px'></i></i></td>
                    <td><h4>Duong Ret</h4></td>
                </tr>
                <tr>
                    <td><i class='fas fa-map-marker-alt' style='font-size:30px'></i></i></td>
                    <td><h4>ភូមិជ្រៃ សង្កាត់ទឹកវិល ក្រុងសៀមរាប</h4></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<!-- end contact us -->
<!-- start description -->
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
<!-- end description -->
<!-- start footer -->
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
  <!-- end footer -->
</body>
</html>