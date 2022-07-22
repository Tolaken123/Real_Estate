@extends('frontend.layouts.frontend')

@section('title', 'About Us')

@push('css')
@endpush
@section('content')
    <!-- start about us -->

    <!-- end about us -->
    <!-- start contact us -->

    <style>
    .about-section {
      padding: 50px;
      text-align: center;
      background-color:#ffffff;
      color: rgb(24, 3, 116);
    }
    body{
    background:#DCDCDC;
    margin-top:20px;
}
.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}

.social-links li a {
    border-radius: 50%;
    color: rgba(23, 9, 219, 0.8);
    display: inline-block;
    height: 30px;
    line-height: 27px;
    border: 2px solid rgba(121, 121, 121, 0.5);
    text-align: center;
    width: 30px
}

.social-links li a:hover {
    color: #797979;
    border: 2px solid #797979
}
.thumb-lg {
    height: 150px;
    width: 150px;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 3px solid #1b057c;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.name{
    color: #07042c;
    font-weight: bold;
}
.text-pink {
    color: #e41676!important;
}
.btn-rounded {
    border-radius: 2em;
    background-color: #1b057c;
}
.text-muted {
    color: #07042c!important;
}
h4 {
    color:#1b057c
    line-height: 22px;
    font-size: 18px;
}
    </style>
<br><br>
    <div class="about-section">
        <h1>About Us </h1>
        <p>CamRealEstate is based in Siem Reap and founded in 2020 at a time when COVID-19 is in turmoil around the world,
            as it is in Cambodia. Properties have been in crisis and have found solutions to advertise their properties and
            change their way of Selling. At the same time, we also created CamRealEstate, an innovative,
             high-performance website technology company that connects customers and Agentcy.
            We are part of your business team. We think we help create and deliver messages to your target customers.</p>
      </div>
<br>
      <h2 style="text-align:center">Our Team</h2>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <div class="content">
          <div class="container">
              <div class="row">
                  <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i></a></div>
                  <!-- end col -->
              </div>
              <!-- end row -->
              <div class="row">


              <!-- end row -->
              <div class="row">
                  <div class="col-lg-4">
                      <div class="text-center card-box">
                          <div class="member-card pt-2 pb-2">
                              <div class="thumb-lg member-thumb mx-auto"><img  src="{{ asset('assets/images/users/dara.jpg') }}" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                              <div class="">
                                  <h4 class="name">Phuong Dara</h4>
                                  <p class="text-muted">@Webdesigner <span>| </span><span><a href="#" class="text-pink">phuongdara.com</a></span></p>
                              </div>
                              <ul class="social-links list-inline">
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                              </ul>
                              <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Message Now</button>
                              <div class="mt-4">
                                  <div class="row">
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">7845</h4>
                                              <p class="mb-0 text-muted">Sale</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">1254</h4>
                                              <p class="mb-0 text-muted">Rent</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">5846</h4>
                                              <p class="mb-0 text-muted">Total</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-4">
                      <div class="text-center card-box">
                          <div class="member-card pt-2 pb-2">
                              <div class="thumb-lg member-thumb mx-auto"><img src="{{ asset('assets/images/users/duong.jpg') }}" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                              <div class="">
                                  <h4 class="name">Ret Sreyduong</h4>
                                  <p class="text-muted">@Director <span>| </span><span><a href="#" class="text-pink">retsreyduong.com</a></span></p>
                              </div>
                              <ul class="social-links list-inline">
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                              </ul>
                              <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Message Now</button>
                              <div class="mt-4">
                                  <div class="row">
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">4851</h4>
                                              <p class="mb-0 text-muted">Sale</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">10250</h4>
                                              <p class="mb-0 text-muted">Rent</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">895</h4>
                                              <p class="mb-0 text-muted">Total</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-4">
                      <div class="text-center card-box">
                          <div class="member-card pt-2 pb-2">
                              <div class="thumb-lg member-thumb mx-auto"><img src="{{ asset('assets/images/users/tola.jpg') }}" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                              <div class="">
                                  <h4 class="name">Ken Tola</h4>
                                  <p class="text-muted">@Manager <span>| </span><span><a href="#" class="text-pink">tolaken.com</a></span></p>
                              </div>
                              <ul class="social-links list-inline">
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                              </ul>
                              <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Message Now</button>
                              <div class="mt-4">
                                  <div class="row">
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">4560</h4>
                                              <p class="mb-0 text-muted">Sale</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">12350</h4>
                                              <p class="mb-0 text-muted">Rent</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">742</h4>
                                              <p class="mb-0 text-muted">Total</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- end col -->
              </div>
              <!-- end row -->
              <div class="row">
                  <div class="col-lg-4">
                      <div class="text-center card-box">
                          <div class="member-card pt-2 pb-2">
                              <div class="thumb-lg member-thumb mx-auto"><img src="{{ asset('assets/images/users/hey.jpg') }}" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                              <div class="">
                                  <h4 class="name">Chhorn Hey</h4>
                                  <p class="text-muted">@Webdeveloper <span>| </span><span><a href="#" class="text-pink">heychhorn.com</a></span></p>
                              </div>
                              <ul class="social-links list-inline">
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                              </ul>
                              <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Message Now</button>
                              <div class="mt-4">
                                  <div class="row">
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">3520</h4>
                                              <p class="mb-0 text-muted">Sale</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">4587</h4>
                                              <p class="mb-0 text-muted">Rent</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">423</h4>
                                              <p class="mb-0 text-muted">Total</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-4">
                      <div class="text-center card-box">
                          <div class="member-card pt-2 pb-2">
                              <div class="thumb-lg member-thumb mx-auto"><img src="{{ asset('assets/images/users/lyhoung.jpg') }}" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                              <div class="">
                                  <h4 class="name">Ly Houng</h4>
                                  <p class="text-muted">@Webdesigner <span>| </span><span><a href="#" class="text-pink">lyhoung.com</a></span></p>
                              </div>
                              <ul class="social-links list-inline">
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                              </ul>
                              <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Message Now</button>
                              <div class="mt-4">
                                  <div class="row">
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">7851</h4>
                                              <p class="mb-0 text-muted">Sale</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">10020</h4>
                                              <p class="mb-0 text-muted">Sale</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">1036</h4>
                                              <p class="mb-0 text-muted">Total</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-4">
                      <div class="text-center card-box">
                          <div class="member-card pt-2 pb-2">
                              <div class="thumb-lg member-thumb mx-auto"><img src="{{ asset('assets/images/users/tharoth.jpg') }}" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                              <div class="">
                                  <h4 class="name">Van Sotharoth</h4>
                                  <p class="text-muted">@Manager <span>| </span><span><a href="#" class="text-pink">vansotharoth.com</a></span></p>
                              </div>
                              <ul class="social-links list-inline">
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                              </ul>
                              <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Message Now</button>
                              <div class="mt-4">
                                  <div class="row">
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">7421</h4>
                                              <p class="mb-0 text-muted">Sale</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">14754</h4>
                                              <p class="mb-0 text-muted">Rent</p>
                                          </div>
                                      </div>
                                      <div class="col-4">
                                          <div class="mt-3">
                                              <h4 class="text-pink">11525</h4>
                                              <p class="mb-0 text-muted">Total</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- end col -->
              </div>
              <!-- end row -->
              <!-- end row -->
          </div>
          <!-- container -->
      </div>

    </div>
@endsection
@push('js')
@endpush
