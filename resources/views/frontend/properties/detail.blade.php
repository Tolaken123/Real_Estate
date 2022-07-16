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
                        <div><img src="../img/img1.jpg" width="100%"></div>
                        <div id="img-1" data-img-id="1" class="img-wrapper active"
                             style="background-image: url('../img/House1.jpg')"></div>
                        <div id="img-2" data-img-id="2" class="img-wrapper"
                             style="background-image: url('../img/House7.jpg')"></div>
                        <div id="img-3" data-img-id="3" class="img-wrapper"
                             style="background-image: url('../img/House3.jpg')"></div>
                        <div id="img-4" data-img-id="4" class="img-wrapper"
                             style="background-image: url('../img/House4.jpg')"></div>
                        <div id="img-1" data-img-id="5" class="img-wrapper"
                             style="background-image: url('../img/House8.jpg')"></div>
                        <div id="img-2" data-img-id="6" class="img-wrapper"
                             style="background-image: url('../img/House6.jpg')"></div>
                        <div id="img-3" data-img-id="7" class="img-wrapper"
                             style="background-image: url('../img/House9.jpg')"></div>
                        <div id="img-4" data-img-id="8" class="img-wrapper"
                             style="background-image: url('../img/House2.jpg')"></div>

                        <!-- Below are the thumbnails of above images -->
                        <div>
                            <div class="thumbs-container bottom">
                                <div id="prev-btn" class="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </div>
                                <ul class="thumbs">
                                    <li data-thumb-id="1" class="thumb active"
                                        style="background-image: url('../img/House1.jpg')"></li>
                                    <li data-thumb-id="2" class="thumb"
                                        style="background-image: url('../img/House7.jpg')"></li>
                                    <li data-thumb-id="3" class="thumb"
                                        style="background-image: url('../img/House3.jpg')"></li>
                                    <li data-thumb-id="4" class="thumb"
                                        style="background-image: url('../img/House4.jpg')"></li>
                                    <li data-thumb-id="5" class="thumb"
                                        style="background-image: url('../img/House8.jpg')"></li>
                                    <li data-thumb-id="6" class="thumb"
                                        style="background-image: url('../img/House6.jpg')"></li>
                                    <li data-thumb-id="7" class="thumb"
                                        style="background-image: url('../img/House9.jpg')"></li>
                                    <li data-thumb-id="8" class="thumb"
                                        style="background-image: url('../img/House2.jpg')"></li>
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
                            <img src="../img/duongprofile (1).jpg" width="30%" ; height="Auto" ; alt="#"><a href="#"
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
                                    <td><h5>5</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>bathroom</h5></td>
                                    <td><h5>7</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>land size</h5></td>
                                    <td><h5>30 x 100</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Floor size</h5></td>
                                    <td><h5>3</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>Dimension</h5></td>
                                    <td><h5>20 x 30</h5></td>
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
                        <h2 class="text-center mt-3">Disciption</h2>
                        <h4 class="text-center">As a first-time home seller, you have the advantage of having gone
                            through a purchase and sale transaction when you bought the home. As a buyer, you spent
                            time
                            gathering your financial documents and searching for the perfect home. As the seller, a
                            large amount of prep work is required, too, but it’s just a different type — you’ll
                            spend
                            your time getting your house looking its best for potential buyers. And depending on
                            your
                            plans, you may also have the added stress of buying and selling at the same time.
                        </h4>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('js')

@endpush
