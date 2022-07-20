@extends('frontend.layouts.frontend')

@section('title','Property Detail')

@push('css')
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <style>
        .carousel-item {
            height: 350px;
        }

        a.navbar-brand {
            color: white !important;
        }
    </style>
@endpush

@section('content')
    <div class="mt-3" style="visibility: hidden">s</div>
    <div class="row mt-5 pt-5">
        <!-- Property rent -->
        <div class="text-center ">
            <strong class="btn btn-primary" style="background: #140B5C;" id="rent">
                Properties
            </strong>
            <br><br>
            <h3>{{ $property->name }}</h3>
        </div>
    </div>
    <div class="row jumbotron m-5 mt-0">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"
                                    class="active"></li>
                                @foreach($property->images as $image)
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $loop->index }}"
                                        class=""></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="img-responsive"
                                         src="{{ asset("images/" . $property->thumbnail) }}"
                                         alt="Property Image">
                                </div>
                                @foreach($property->images as $image)
                                    <div class="carousel-item">
                                        <img class="img-responsive"
                                             src="{{ asset("images/" . $image->image) }}"
                                             alt="Property Image">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="p-t-20 p-b-20">
                            <h4 class="card-title">{{ $property->name }}</h4>
                            <h5 class="m-b-0"><span class="text-muted"><i class="fa fa-map-marker text-danger m-r-10"
                                                                          aria-hidden="true"></i>{{ $property->province->name ?? '' }}</span>
                            </h5>
                        </div>
                        <hr class="m-0">
                        <p class="text-dark p-t-20 pro-desc">{!! $property->description !!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card p-l-0 p-r-0 p-b-10">
                            <div class="card-body">
                                <h5 class="card-title fw-500 p-l-20">Location</h5>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d117506.98606137399!2d72.5797426!3d23.020345749999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1476988114677"
                                    width="100%" height="244" frameborder="0" style="border:0"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Essential Information</h5>
                        <div class="table-responsive">
                            <table class="table no-border">
                                <tbody class="text-dark">

                                <tr>
                                    <td>Price</td>
                                    <td class="text-danger" >{{ format_currency($property->price) }}</td>
                                </tr>
                                <tr>
                                    <td>Bedrooms</td>
                                    <td class="text-danger">{{ $property->bedroom }}</td>
                                </tr>
                                <tr>
                                    <td>Bathrooms</td>
                                    <td class="text-danger">{{ $property->bathroom }}</td>
                                </tr>
                                <tr>
                                    <td>Floor size</td>
                                    <td class="text-danger"><h5>{{ $property->floor }}</h5></td>
                                </tr>
                                <tr>
                                    <td>Land Dimension</td>
                                    <td class="text-danger">{{ $property->dimension }}</td>
                                </tr>
                                <tr>
                                    <td>Land Size</td>
                                    <td class="text-danger">{{ $property->landsize}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="text-center">
                            <a href="{{ route('frontend.agent.index', $property->user->id) }}">
                                @if(isset($property->user->avatar) && !empty($property->user->avatar))
                                    <img alt="img" class="thumb-lg img-circle"
                                         src="{{ asset('images/' . $property->user->avatar) }}">
                                @else
                                    <img alt="img" class="thumb-lg img-circle"
                                         src="{{ asset('assets/images/users/agent.jpg') }}">
                                @endif

                                <h4 class="mt-2">{{ $property->user->name ?? '' }}</h4>
                            </a>
                        </div>
                        <div class="card-body border-top">

                            <div class="text-center">
                                @if(!empty($property->user->phone))
                                    <i class="fa fa-phone text-danger p-r-10" aria-hidden="true"></i>
                                    {{ $property->user->phone ?? '' }}
                                    <br>
                                @endif
                                @if(!empty($property->user->email))

                                    <i class="fa fa-envelope-o text-danger p-r-10 m-t-10" aria-hidden="true"></i>
                                    {{ $property->user->email ?? '' }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="row">
        <!-- Property rent -->
        <div class="text-center ">
            <h3>Related Property</h3>
        </div>
    </div>
    <div class="row jumbotron m-5 ">

        @foreach($related_properties as $property)
            @include('frontend.properties._single_property',['property' => $property])
        @endforeach

    </div>
@endsection

@push('js')
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/node_modules/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/sparkline/jquery.sparkline.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
@endpush
