<!--This page call for new user who just sign up with no post-->
<div class="card">
        <div class="card-header">

        <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Create New Property
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{route('admin/properties.rent')}}">Rent</a>
    <a class="dropdown-item" href="{{route('admin/properties.sale')}}">Sale</a>
  </div>
          </div>
        </div>
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Welcome with Name</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Start creating your Properties Here!
        </div>