@extends('frontend.layouts.frontend')

@section('title','Property Detail')

@push('css')

@endpush

@section('content')

    <div class="mt-3" style="visibility: hidden">s</div>
    <div class="row jumbotron m-5 pt-5">
        <!-- Property rent -->
        <div class="text-center mb-4 ">
            <strong class="btn btn-primary" style="background: #140B5C;" id="rent">
                Properties
            </strong>
            <br><br>
            <h3>{{ $property->name }}</h3>
        </div>
    </div>
    <div class="row jumbotron m-5">
        <!-- Property rent -->
        <div class="row">
            <div class="col-md-12">
                <div id="container">
                    <div id="slideshow" class="">
                        <!-- Below are the images in the gallery -->
                        <div>
                            <img src="{{ asset('images/' . $property->thumbnail) }}" width="100%">
                        </div>
                        @foreach($property->images as $image)
                            <div id="img-{{ $image->id }}" data-img-id="{{ $image->id}}" class="img-wrapper active"
                                 style="background-image: url('{{ asset('images/' . $image->image) }}')"></div>
                        @endforeach

                        <!-- Below are the thumbnails of above images -->
                        <div>
                            <div class="thumbs-container bottom">
                                <div id="prev-btn" class="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </div>
                                <ul class="thumbs">
                                    @foreach($property->images as $image)
                                        <li data-thumb-id="{{ $image->id }}" class="thumb active"
                                            style="background-image: url('{{ asset('images/' . $image->$image) }}')"></li>
                                    @endforeach
                                </ul>

                                <div id="next-btn" class="next">
                                    <span class="carousel-control-next-icon"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <!-- end slide -->

            <!-- description -->
            <div class="row">
                <p></p>
            </div>

            <div class="col-md-12" style="background-color: #ffffff; ">
                <div class="row">
                    <div class="col-md-5">
                        <div class="container mt-1 ">
                            <img class="rounded-circle" alt="100x100" src="../img/nophoto.png" width="30%" ; height="Auto" ; alt="#"><a href="#"
                                                                                                            style="text-decoration: none;  font-size: 200%;">Duong
                                Ret</a>

                            <table class="table table-striped ">
                                <thead>
                                <tr>
                                    <th><h4>property</h4></th>
                                    <th><h4>Qty</h4></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><h5>Bedroom</h5></td>
                                    <td><h5>{{ $property->bedroom }}</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>bathroom</h5></td>
                                    <td><h5>{{ $property->bathroom }}</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>land size</h5></td>
                                    <td><h5>{{ $property->landsize }}</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Floor size</h5></td>
                                    <td><h5>{{ $property->floor }}</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Dimension</h5></td>
                                    <td><h5>{{ $property->dimension }}</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>location</h5></td>
                                    <td><h5>
                                            <a href="https://www.google.com/maps/place/Angkor+Wat/@13.4124745,103.864797,17z/data=!3m1!4b1!4m5!3m4!1s0x3110168aea9a272d:0x3eaba81157b0418d!8m2!3d13.4124693!4d103.8669857"><i
                                                    style='font-size:24px' class='fas fa-map-marker-alt'></i></a>
                                        </h5>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h2 class="text-center mt-3">Description</h2>
                        <h4 class="text-center">
                            {!! $property->description !!}
                        </h4>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('js')

@endpush
