
@extends('layouts.app')
@section('content')
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
    <!-- Navbar -->
    {{-- @include('layout.topnavbar')

  @include('layout.leftmenu') --}}
  <!-- /.navbar -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <!-- <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-fw fa-edit"></i>Page1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="fa fa-sliders fa-sliders-h"></i>Page2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="fa fa-fw fa-image"></i>Page3</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul> -->
  <!-- SELECT2 EXAMPLE -->
    <div class="card w-50">
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Property Information</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          
          <div class="card-body">
            <div class="row">
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
     <a href='#'> 
      <button type="submit" class="btn btn-success">Submit</button>
      </a>
</form>
    </section>
    </div>
        </div>
    <!-- /.content -->

  <!-- Main Footer -->
  {{-- @include('layout.footer') --}}
  <!-- /.content-wrapper -->

<!-- REQUIRED SCRIPTS -->
        </div>
<!-- jQuery -->

</body>
@endsection