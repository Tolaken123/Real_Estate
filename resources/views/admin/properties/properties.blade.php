
@extends('layouts.app')
@section('content')
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
    <!-- Navbar -->
    {{-- @include('layout.topnavbar')

  @include('layout.leftmenu') --}}
  <!-- /.navbar -->
  <div class="card card-outline-primary">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Property</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <ul class="nav nav-tabs">
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
</ul>
 
    <section class="content">
    <form action="#" method="POST">
    @csrf
  <div class="card-body">
    <div class="form-group">
        <label for="example-text-input" class="form-control-label"><i class="fa fa-id-card"></i>LandLord/Owner Name</label>
        <input class="form-control" type="text" value=" " id="example-text-input​">
    </div>
    <div class="form-group">
        <label for="example-tel-input" class="form-control-label">Phone Number</label>
        <input class="form-control" type="tel" value=" " id="example-tel-input">
    </div>
    <div class="form-group">
        <label for="example-email-input" class="form-control-label">Email</label>
        <input class="form-control" type="email" value="chhornhey@admin.com" id="example-email-input">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">House No.</label>
        <input class="form-control" type="text" value="" id="example-number-input">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">Street No.</label>
        <input class="form-control" type="text" value="" id="example-number-input">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">Tourist Spot/Landmarks</label>
        <input class="form-control" type="text" value="" id="example-number-input">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">Nearby Hospital/Pharmacy</label>
        <input class="form-control" type="text" value="" id="example-number-input">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">Nearby Bank/School/Others</label>
        <input class="form-control" type="text" value="" id="example-number-input">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">Nearby Mall/Shopping Place</label>
        <input class="form-control"  type="text" value="" id="example-number-input">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">Nearby Cafe/Restaurant</label>
        <input class="form-control"  type="text" value="" id="example-number-input">
    </div>
   
    <div class="form-group">
        <label for="example-datetime-local-input" class="form-control-label">Datetime</label>
        <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00" id="example-datetime-local-input">
    </div>
    <div class="form-group">
        <label for="example-date-input" class="form-control-label">Date</label>
        <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
    </div>
    <div class="form-group">
        <label for="example-month-input" class="form-control-label">Month</label>
        <input class="form-control" type="month" value="2018-11" id="example-month-input">
    </div>
    <div class="form-group">
        <label for="example-week-input" class="form-control-label">Week</label>
        <input class="form-control" type="week" value="2018-W23" id="example-week-input">
    </div>
    <div class="form-group">
        <label for="example-time-input" class="form-control-label">Time</label>
        <input class="form-control" type="time" value="10:30:00" id="example-time-input">
    </div>
   
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