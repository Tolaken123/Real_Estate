<html>
<head>
  <title>Format ImagesLoader</title>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" crossorigin="anonymous">

  <!-- Format Images loader CSS -->
  <link rel="stylesheet" href="{{ asset('css/jquery.imagesloader.css') }}">

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <!-- Font awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" crossorigin="anonymous"></script>

  <!-- Images loader -->
  <script src="{{ asset('js/jquery.imagesloader-1.0.1.js')}}"> </script>

</head>

<body>

  <div class="container col-10 ">
    <div class="content-wrapper">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div> 
      @endif
    <form id="frm" method="POST"  action="/image " class="needs-validation" novalidate="">
        {{ csrf_field() }} 
      <!--Image Upload-->
     
     

      <!--Image container -->
      
      <div class="row"
           data-type="imagesloader"
           data-errorformat="Accepted file formats"
           data-errorsize="Maximum size accepted"
           data-errorduplicate="File already loaded"
           data-errormaxfiles="Maximum number of images you can upload"
           data-errorminfiles="Minimum number of images to upload"
           data-modifyimagetext="Modify immage">

        <!-- Progress bar -->
        
        <div class="col-12 order-1 mt-2">
          <div data-type="progress" class="progress" style="height: 250px; display:none;">
            <div data-type="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%;">Load in progress...</div>
          </div>
        </div>

        <!-- Model -->
       
           
        <div data-type="image-model" class="col-2 pl-2 pr-2 pt-2" style="max-width:200px; display:none;">

          <div class="ratio-box text-center" data-type="image-ratio-boxs">
            <img data-type="noimage" class="btn btn-light ratio-img img-fluid p-2 image border dashed rounded" src="{{ asset('img/photo-camera-gray.svg')}}" style="cursor:pointer;">
            <div data-type="loading" class="img-loading" style="color:#218838; display:none;">
              <span class="fa fa-2x fa-spin fa-spinner"></span>
            </div>
            <img data-type="preview" class="btn btn-light ratio-img img-fluid p-2 image border dashed rounded" src="" style="display: none; cursor: default;">
            <span class="badge badge-pill badge-success p-2 w-50 main-tag" style="display:none;">Main</span>
          </div>

          <!-- Buttons -->
          <div data-type="image-button" class="row justify-content-center mt-2">
            <button data-type="add" class="btn btn-outline-success" type="button"><span class="fa fa-camera mr-2"></span>Add</button>
            <button data-type="btn-modify" type="button" class="btn btn-outline-success m-0" data-toggle="popover" data-placement="right" style="display:none;">
              <span class="fa fa-pencil-alt mr-2"></span>Modify
            </button>
          </div>
        </div>

        <!-- Popover operations -->
        <div data-type="popover-model" style="display:none">
          <div data-type="popover" class="ml-3 mr-3" style="min-width:150px;">
            <div class="row">
              <div class="col p-0">
                <button data-operation="main" class="btn btn-block btn-success btn-sm rounded-pill" type="button"><span class="fa fa-angle-double-up mr-2"></span>Main</button>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-6 p-0 pr-1">
                <button data-operation="left" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button"><span class="fa fa-angle-left mr-2"></span>Left</button>
              </div>
              <div class="col-6 p-0 pl-1">
                <button data-operation="right" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button">Right<span class="fa fa-angle-right ml-2"></span></button>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-6 p-0 pr-1">
                <button data-operation="rotateanticlockwise" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button"><span class="fas fa-undo-alt mr-2"></span>Rotate</button>
              </div>
              <div class="col-6 p-0 pl-1">
                <button data-operation="rotateclockwise" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button">Rotate<span class="fas fa-redo-alt ml-2"></span></button>
              </div>
            </div>
            <div class="row mt-2">
              <button data-operation="remove" class="btn btn-outline-danger btn-sm btn-block" type="button"><span class="fa fa-times mr-2"></span>Remove</button>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <!--Hidden file input for images-->
          <input id="files" type="file" name="files[]" data-button="" multiple="" accept="image/jpeg, image/png, image/gif," style="display:none;">
        </div>
      </div>

        </form>


    </div>

  </div>

  <!-- Custom javascript -->
  <script type="text/javascript">

    // Ready
    $(document).ready(function () {

      //Image loader var to use when you need a function from object
      var auctionImages = null;

      // Create image loader plugin
      var imagesloader = $('[data-type=imagesloader]').imagesloader({
        maxFiles: 25
        , minSelect: 1
        , imagesToLoad: auctionImages
      });

      //Form
      $frm = $('#frm');

      // Form submit
      $frm.submit(function (e) {

        var $form = $(this);

        var files = imagesloader.data('format.imagesloader').AttachmentArray;

        var il = imagesloader.data('format.imagesloader');

        if (il.CheckValidity())
          alert('Upload ' + files.length + 'files');        

        e.preventDefault();
        e.stopPropagation();
      });

    });
  </script>
</body >
</html >
