@extends('layouts.backend')

@section('title')
    Add New Property
@endsection

@section('css')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card ">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Property Information</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{url('admin/properties',$properties)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                        </div>
                        <br>

                        <div class="form group">
                            <select class="form-select form-select-md form-control mb-3" name="listing_type"
                                aria-label=".form-select-md example">
                                <option selected>Select Listing Type</option>
                                <option value="1">Rent</option>
                                <option value="1">Sale</option>
                            </select>
                        </div>

                        <br>
                        <div class="form group">
                            <select class="form-select form-select-md mb-3 form-control " id="province_id"
                                name="province_id" aria-label=".form-select-md example">
                                <option>Select Province</option>
                                @foreach ($provinces as $CityProvince)
                                    <option value="{{ $CityProvince->id }}">{{ $CityProvince->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <br>
                        <select class="form-select form-select-md mb-3" id="district_id" name="district_id"
                            aria-label=".form-select-md example">
                            <option>Select District</option>
                        </select>
                        <br>
                        <select class="form-select form-select-md mb-3" id="commune_id" name="commune_id"
                            aria-label=".form-select-md example">
                            <option>Select Commune</option>

                        </select>
                        <br>
                        <select class="form-select form-select-md mb-3" id="village_id" name="village_id"
                            aria-label=".form-select-md example">
                            <option selected>Select Village</option>

                        </select>
                        <br>
                        <select class="form-select form-select-md mb-3" name="category_id"
                            aria-label=".form-select-md example">
                            <option>Select Property Type</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <br>


                        <div class="form-group">
                            <label for="example-number-input" class="form-control-label">Title</label>
                            <input class="form-control" type="text" id="example-number-input" name="name" value="{{$properties->name}}" >
                        </div>
                        <div class="form-group">
                            <label for="example-number-input" class="form-control-label">
                                Price</label>
                            <input class="form-control" type="text" id="example-number-input" name="price" value="{{ $properties->price }}">
                        </div>


                        <div class="form-group">

                            <label for="example-number-input" class="form-control-label">How many Bedrooms?</label>

                            <input class="form-control" type="text" value="{{ $properties->bedroom }}" id="example-number-input"
                                name="bedroom">


                        </div>

                        <div class="form-group">
                            <label for="example-number-input" class="form-control-label">How many Bathrooms?</label>

                            <input class="form-control" type="text" value="{{ $properties->bathroom }}" id="example-number-input"
                                name="bathroom">

                        </div>

                        <div class="form-group">
                            <label for="example-number-input" class="form-control-label">FloorSize</label>

                            <input class="form-control" type="text" value="{{ $properties->floor }}" id="example-number-input"
                                name="floor">

                        </div>

                        <div class="form-group">
                            <label for="example-number-input" class="form-control-label">LandSize</label>
                            <input class="form-control" type="text" value="{{ $properties->landsize }}" id="example-number-input"
                                name="landsize">
                        </div>

                        <div class="form-group">
                            <label for="example-number-input" class="form-control-label">Land
                                Dimension</label>
                            <input class="form-control" type="text" value="{{ $properties->dimension }}" id="example-number-input"
                                name="dimension">
                        </div>

                        <div class="form-group">
                            <label for="example-number-input" class="form-control-label">Link
                                Location</label>
                            <input class="form-control" type="text" value="{{ $properties->maplocation }}" id="example-number-input"
                                name="maplocation">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Descrioption</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $properties->description }}</textarea>
                        </div>


                        <div id="image_picker" class="row" name="filename" value="{{ $properties->filename }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br> <br>

                </form>

            </div>
        @endsection



        @section('script')
            <script type="text/javascript"
                src="{{ asset('spartan-multi-image-picker/dist/js/spartan-multi-image-picker-min.js') }}"></script>

            <script type="text/javascript">
                $("#image_picker").spartanMultiImagePicker({
                    fieldName: 'images[]', // this configuration will send your images named "fileUpload" to the server
                    maxCount: 10,
                    rowHeight: '400px',
                    groupClassName: 'col-3',
                    maxFileSize: '',
                    dropFileLabel: "Drop Here",
                    onAddRow: function(index) {
                        console.log(index);
                        console.log('add new row');
                    },
                    onRenderedPreview: function(index) {
                        console.log(index);
                        console.log('preview rendered');
                    },
                    onRemoveRow: function(index) {
                        console.log(index);
                    },
                    onExtensionErr: function(index, file) {
                        console.log(index, file, 'extension err');
                        alert('Please only input png or jpg type file')
                    },
                    onSizeErr: function(index, file) {
                        console.log(index, file, 'file size too big');
                        alert('File size too big');
                    }
                });
            </script>

            <script>
                $(document).ready(function() {
                    // Select Province Get District
                    $('#province_id').on('change', function() {
                        var province_id = $(this).val();

                        if (province_id) {
                            $.ajax({
                                url: '{{ route('admin.location.district') }}',
                                type: "GET",
                                dataType: "json",
                                data: {
                                    province_id: province_id
                                },
                                success: function(data) {
                                    console.log('district data', data.data)
                                    $('#district_id').empty();
                                    $('#district_id').append(
                                        '<option value="">Select District</option>');
                                    $.each(data.data, function(key, value) {
                                        $('#district_id').append('<option value="' + value.id +
                                            '">' + value.name + '</option>');
                                    });
                                }
                            });
                        } else {
                            $('#district_id').empty();
                            $('#district_id').append('<option value="">Select District</option>');
                        }
                    });


                    // Select District Get Commune


                    $('#district_id').on('change', function() {
                        var district_id = $(this).val();

                        if (district_id) {
                            $.ajax({
                                url: '{{ route('admin.location.commune') }}',
                                type: "GET",
                                dataType: "json",
                                data: {
                                    district_id: district_id
                                },
                                success: function(data) {
                                    console.log('commune data', data.data)
                                    $('#commune_id').empty();
                                    $('#commune_id').append('<option value="">Select Commune</option>');
                                    $.each(data.data, function(key, value) {
                                        $('#commune_id').append('<option value="' + value.id +
                                            '">' + value.name + '</option>');
                                    });
                                }
                            });
                        } else {
                            $('#commune_id').empty();
                            $('#commune_id').append('<option value="">Select Commune</option>');
                        }
                    });

                    /// Select Commune to get village

                    $('#commune_id').on('change', function() {
                        var commune_id = $(this).val();

                        if (commune_id) {
                            $.ajax({
                                url: '{{ route('admin.location.village') }}',
                                type: "GET",
                                dataType: "json",
                                data: {
                                    commune_id: commune_id
                                },
                                success: function(data) {
                                    console.log('village data', data.data)
                                    $('#village_id').empty();
                                    $('#village_id').append('<option value="">Select village</option>');
                                    $.each(data.data, function(key, value) {
                                        $('#village_id').append('<option value="' + value.id +
                                            '">' + value.name + '</option>');
                                    });
                                }
                            });
                        } else {
                            $('#village_id').empty();
                            $('#village_id').append('<option value="">Select village</option>');
                        }
                    });
                });
            </script>
        @endsection
