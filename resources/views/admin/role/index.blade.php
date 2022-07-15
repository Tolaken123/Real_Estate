@extends('layouts.backend')

@section('title')
    list Role
@endsection

@section('css')

@endsection

@section('content')
<div class="row">
  <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
    <h1 class="role-title txt-color-blueDark">
      <i class="fa fa-table fa-fw "></i> 
        Table 
      <span>> 
        Role
      </span>
    </h1>
  </div>
  <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
      <a class="btn btn-primary pull-right" href="/admin/roles/create">
        <i class="fa fa-plus"></i> 
        Add New
      </a>
  </div>
</div>

<!-- widget grid -->
<section id="widget-grid" class="">

  <!-- row -->
  <div class="row">

    <!-- NEW WIDGET START -->
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <!-- Widget ID (each widget will need unique ID)-->
      <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">
        <header>
          <span class="widget-icon"> <i class="fa fa-table"></i> </span>
          <h2>Role</h2>

        </header>

        <!-- widget div-->
        <div>
          <!-- end widget edit box -->

          <!-- widget content -->
          <div class="widget-body">
            <div class="table-responsive">
            
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Created At</th>                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($roles as $role)        
                    <tr>
                      <td>{{$role->name }}</td>
                      <td title="{{$role->created_at}}">{{ $role->created_at->format('d/m/Y') }}</td>                     
                      <td class="action">
                        <a href="/admin/roles/{{$role->id}}/edit" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <form method="POST" action="{{ route('admin.roles.destroy', $role) }}" style="display:inline" >
                        <input name="_method" type="hidden" value="DELETE">
                         {{ csrf_field() }}
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?')">
                           <i class="fa fa-trash-o" style="color: #FFF;"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach      
                </tbody>

              </table>
              
            </div>
            <div style="text-align: center">
              {{ $roles->links() }}
            </div>
          </div>
          <!-- end widget content -->

        </div>
        <!-- end widget div -->

      </div>
      <!-- end widget -->

      <!-- Widget ID (each widget will need unique ID)-->
      

    </article>
    <!-- WIDGET END -->       

  </div>

  <!-- end row -->

  

  <!-- end row -->

</section>
<!-- end widget grid -->

@endsection
