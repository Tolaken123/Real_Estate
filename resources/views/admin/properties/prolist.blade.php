
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

          <table class="table table-striped projects">
              <thead>
                  <tr>
                  <th style="width: 30%">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          All
                      </th>
                      <th style="width: 20%">
                          Type
                      </th>
                     
                      <th>
                          MonthlyRental
                      </th>
                      <th style="width: 30%" class="text-center">
                         Sale Price 
                      </th>
                      <th style="width: 50%">
                      Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                  <td>
                    <ul class="list-inline">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <p>11</p>
                              <li class="list-inline-item">
                                  <img style="max-width:100px" src="{{('vendors/dist/img/home.jpg')}}"><br>
                          
                              </li>
                          </ul>
                      </td>
                      <td>
                         1
                      </td>
                      <td>
                          <a>
                              5000$
                          </a>

                      </td>
                      <td>
                          <a>
                              5000$
                          </a>

                      </td>
                      <td class="project-actions text-right">
                      <a class="btn btn-success btn-sm" href="#">
                      <i class="fas fa-list-ul"></i>
                            
                          </a>
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                             
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                            
                          </a>
                      </td>
                  </tr>
              </tbody>
    
          </table>
          <br>
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

  