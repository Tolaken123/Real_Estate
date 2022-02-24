
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  </head>
  <body>
    
@extends('layouts.app')
@section('content')
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
    <!-- Navbar -->
    {{-- @include('layout.topnavbar')

  @include('layout.leftmenu') --}}
  <!-- /.navbar -->
  <div class="content-wrapper">
    <div class="card w-70">
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Property Information</h3>
          </div>
          <!-- /.card-header -->
         <form> 
          <div class="card-body">
            <div class="row">
              
          </div>
          <div class="col-md-10">
                <div class="form-group">
                  <label>Property Type</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">House</option>
                    <option>Land</option>
                    <option>Hotel/Guesthouse</option>
                    <option>Borey</option>
                    <option>Condo/Apartment/Flat</option>
                    <option>Shophouse</option>
                    <option>Bussiness</option>
                  </select>
                </div>
            </div>
          <div class="col-md-10">
          <div class="form-group">
          <div class="form-group">
        <label for="example-datetime-local-input" class="form-control-label">Datetime</label>
        <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00" id="example-datetime-local-input" name="datetime">
    </div>
    </div>
   <label for="example-number-input" class="form-control-label">Sale Price</label>
   <input class="form-control" type="text" value="" id="example-number-input"name="house">
   
<div class="form-group">
<div class="form-group">
   
   <label for="example-number-input" class="form-control-label">How many Bedrooms?</label>
   <input class="form-control" type="text" value="" id="example-number-input"name="house">
   
<div class="form-group">
<label for="example-number-input" class="form-control-label">How many Bathrooms?</label>
   <input class="form-control" type="text" value="" id="example-number-input"name="house">
   
<div class="form-group">
<label for="example-number-input" class="form-control-label">Floor Size</label>
   <input class="form-control" type="text" value="" id="example-number-input"name="house">
   
<div class="form-group">
<label for="example-number-input" class="form-control-label">Land Size</label>
   <input class="form-control" type="text" value="" id="example-number-input"name="house">
   
<div class="form-group">
<label for="example-number-input" class="form-control-label">Land Dimension</label>
   <input class="form-control" type="text" value="" id="example-number-input"name="house">
   
<div class="form-group">
    <div class="form-group">
   
        <label for="example-number-input" class="form-control-label">House No.</label>
        <input class="form-control" type="text" value="" id="example-number-input"name="house">
        
    <div class="form-group">

        <label for="example-number-input" class="form-control-label">Street No.</label>
        <input class="form-control" type="text" value="" id="example-number-input" name="street">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">How far from tourist spot?</label>
        <input class="form-control" type="text" value="" id="example-number-input" name="tourist">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">How far from Hospital or Pharmacy?</label>
        <input class="form-control" type="text" value="" id="example-number-input" name="hospital">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">How far from school or bank?</label>
        <input class="form-control" type="text" value="" id="example-number-input" name="bank">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">How far from shopping place?</label>
        <input class="form-control"  type="text" value="" id="example-number-input" name="shopping">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">How far from Restaurant?</label>
        <input class="form-control"  type="text" value="" id="example-number-input" name="resturant">
    </div>
</div> 
<div id="summernote"></div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Write your beautiful decscription here',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['help']]
        ]
      });
    </script>
    <a href='#'> 
      <button type="submit" class="btn btn-success">Submit</button>
      </a>
      
</form>
    </section>
    </div>
        </div>
  </body>
</html>

     
    <!-- /.content -->

  <!-- Main Footer -->
  {{-- @include('layouts.footer') --}}
  <!-- /.content-wrapper -->

<!-- REQUIRED SCRIPTS -->
        </div>
<!-- jQuery -->

</body>
@endsection