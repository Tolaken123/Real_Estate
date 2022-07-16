@extends('layouts.backend')

@section('title')
    Form Role
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
          Page
        </span>
        <span>>
          Form
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
        <article class="col-sm-12 col-md-12 col-lg-12">
          <!-- Widget ID (each widget will need unique ID)-->
          <div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false">
            <header>
              <span class="widget-icon"> <i class="fa fa-eye"></i> </span>
              <h2>Page Form</h2>

            </header>

            <!-- widget div-->
            <div>

              <!-- widget edit box -->
              <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->

              </div>
              <!-- end widget edit box -->

              <!-- widget content -->
              <div class="widget-body">
                @if(empty($role))
                <form class="form-horizontal" method="POST" action="{{route('admin.roles.store')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <fieldset>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Name</label>
                      <div class="col-md-7">
                        <input class="form-control" placeholder="Page Name" type="text" name="name" required>
                      </div>
                    </div>
                  </fieldset>

                  <div class="form-actions">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-default" type="button" onclick="window.history.back();">
                          Cancel
                        </button>
                        <button class="btn btn-primary" type="submit" return="false">
                          <i class="fa fa-save"></i>
                          Save
                        </button>
                      </div>
                    </div>
                  </div>

                </form>
                @else
                  <form class="form-horizontal" method="POST" action="{{route('admin.roles.update', $role)}}"  enctype="multipart/form-data">
                  <input name="_method" type="hidden" value="PUT">
                  {{ csrf_field() }}
                  <fieldset>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Name</label>
                      <div class="col-md-7">
                        <input class="form-control" placeholder="Page Name" type="text" name="name" value="{{$role->name}}" required>
                      </div>
                    </div>
                  </fieldset>

                  <div class="form-actions">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-default" type="button" onclick="window.history.back();">
                          Cancel
                        </button>
                        <button class="btn btn-primary" type="submit">
                          <i class="fa fa-save"></i>
                          Save
                        </button>
                      </div>
                    </div>
                  </div>

                </form>
                @endif
              </div>
              <!-- end widget content -->

            </div>
            <!-- end widget div -->

          </div>
          <!-- end widget -->


          <!-- end widget -->

        </article>
        <!-- WIDGET END -->

      </div>
      <!-- end row -->


    </section>

  </div>
  <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->


@endsection
