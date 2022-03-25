@extends('layouts.app')
@section('content')

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.topnavbar')
        @include('layouts.sidebar')
        <!-- /.navbar -->

        <div class="content-wrapper">
            <div class="card w-70">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Property Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <form>
                        <div class="card-body">
                            <div class="row">
                            </div>
                            <br>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Select Property Type
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">House/Villa</a>
                                    <a class="dropdown-item" href="#">Apartment</a>
                                    <a class="dropdown-item" href="#">Condo</a>
                                    <a class="dropdown-item" href="#">Borey</a>
                                    <a class="dropdown-item" href="#">Flat</a>
                                    <a class="dropdown-item" href="#">Shophouse</a>
                                    <a class="dropdown-item" href="#">Boutique/Hotel/Guesthouse</a>
                                    <a class="dropdown-item" href="#">Office Space</a>
                                    <a class="dropdown-item" href="#">Land</a>
                                    <a class="dropdown-item" href="#">Warehouse</a>
                                    <a class="dropdown-item" href="#">Retail Space</a>
                                    <a class="dropdown-item" href="#">Buisseniss For Sale</a>
                                </div>
                                <br>


                                <div class="col-md-10">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <br>
                                            <label for="example-datetime-local-input"
                                                class="form-control-labe l">Datetime</label>
                                            <input class="form-control" type="datetime-local"
                                                value="2018-11-23T10:30:00" id="example-datetime-local-input"
                                                name="datetime">
                                        </div>
                                    </div>
                                    <label for="example-number-input" class="form-control-label">Sale Price</label>
                                    <input class="form-control" type="text" value="" id="example-number-input"
                                        name="price">

                                    <div class="form-group">
                                        <div class="form-group">

                                            <label for="example-number-input" class="form-control-label">How many
                                                Bedrooms?</label>
                                            <input class="form-control" type="text" value="" id="example-number-input"
                                                name="bedroom">

                                            <div class="form-group">
                                                <label for="example-number-input" class="form-control-label">How many
                                                    Bathrooms?</label>
                                                <input class="form-control" type="text" value=""
                                                    id="example-number-input" name="bathroom">

                                                <div class="form-group">
                                                    <label for="example-number-input" class="form-control-label">Floor
                                                        Size</label>
                                                    <input class="form-control" type="text" value=""
                                                        id="example-number-input" name="housesize">

                                                    <div class="form-group">
                                                        <label for="example-number-input"
                                                            class="form-control-label">Land Size</label>
                                                        <input class="form-control" type="text" value=""
                                                            id="example-number-input" name="landsize">

                                                        <div class="form-group">
                                                            <label for="example-number-input"
                                                                class="form-control-label">Land Dimension</label>
                                                            <input class="form-control" type="text" value=""
                                                                id="example-number-input" name="dimension">

                                                            <div class="form-group">
                                                                <div class="form-group">

                                                                    <label for="example-number-input"
                                                                        class="form-control-label">House No.</label>
                                                                    <input class="form-control" type="text" value=""
                                                                        id="example-number-input" name="houseno">

                                                                    <div class="form-group">

                                                                        <label for="example-number-input"
                                                                            class="form-control-label">Street
                                                                            No.</label>
                                                                        <input class="form-control" type="text" value=""
                                                                            id="example-number-input" name="street">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="example-number-input"
                                                                            class="form-control-label">How far from
                                                                            tourist spot?</label>
                                                                        <input class="form-control" type="text" value=""
                                                                            id="example-number-input" name="tourist">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="example-number-input"
                                                                            class="form-control-label">How far from
                                                                            Hospital or Pharmacy?</label>
                                                                        <input class="form-control" type="text" value=""
                                                                            id="example-number-input" name="hospital">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="example-number-input"
                                                                            class="form-control-label">How far from
                                                                            school or bank?</label>
                                                                        <input class="form-control" type="text" value=""
                                                                            id="example-number-input" name="bank">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="example-number-input"
                                                                            class="form-control-label">How far from
                                                                            shopping place?</label>
                                                                        <input class="form-control" type="text" value=""
                                                                            id="example-number-input" name="shopping">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="example-number-input"
                                                                            class="form-control-label">How far from
                                                                            Restaurant?</label>
                                                                        <input class="form-control" type="text" value=""
                                                                            id="example-number-input" name="resturant">
                                                                    </div>
                                                                </div>
                                                                @include('layouts.service')

                                                                @include('layouts.summernote')
                                                                <br>
                                                                @include('layouts.image')
                                                                <br>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                                </a>




                                                                <a href='#'>
                                                                    <button type="submit"
                                                                        class="btn btn-success">Submit</button>
                                                                </a>

                    </form>
                    </section>
                </div>
            </div>


            @include('layouts.footer')
            <!-- /.content -->

            <!-- Main Footer -->
            {{-- @include('layout.footer') --}}
            <!-- /.content-wrapper -->

            <!-- REQUIRED SCRIPTS -->
        </div>
        @endsection
