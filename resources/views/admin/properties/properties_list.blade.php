
@extends('layouts.app')
@section('content')
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
    <!-- Navbar -->
 @include('layouts.topnavbar')
  @include('layouts.sidebar') 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">

        <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Create New Property
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="">Rent</a> 
    <a class="dropdown-item" href="">Sale</a> 
  </div>
  </div>
  </div>
<div class="card-body p-0">
  <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">

          <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
        </div>
        
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    
    <!-- /.content -->
  </div>
</div>
@include('layouts.footer') 

</div>
@endsection
  <!-- /.content-wrapper -->

  