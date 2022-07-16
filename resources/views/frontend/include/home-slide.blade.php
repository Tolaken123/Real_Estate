<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
    <div class="carousel-indicators">
        <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators"
                type="button"></button>
        <button aria-label="Slide 2" data-bs-slide-to="1"
                data-bs-target="#carouselExampleIndicators" type="button"></button>
        <button aria-label="Slide 3"
                data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img alt="..." class="d-block w-100" src="https://live.staticflickr.com/7442/15787257743_1b50713c53_b.jpg">
            <div class="carousel-caption">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">RealEstate</h5>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">The world Properties are
                    in your hand.</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"><a
                        href="{{ route('frontend.properties.index') }}">Learn More</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="..." class="d-block w-100" src="https://live.staticflickr.com/8596/16295589400_ae836d00ea_b.jpg">
            <div class="carousel-caption">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">Properties Sale</h5>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Find many properties to
                    buy.</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"><a
                        href="{{ route('frontend.properties.index') }}">Learn More</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="..." class="d-block w-100" src="https://live.staticflickr.com/7419/16218918228_93ab6aa2e9_b.jpg">
            <div class="carousel-caption">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">Properties Rent</h5>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Thare are many Properties
                    for rent.</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"><a
                        href="{{ route('frontend.properties.index') }}">Learn More</a></p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
            type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
            class="visually-hidden">Previous</span></button>
    <button class="carousel-control-next"
            data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true"
                                                                                                 class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span></button>
</div>
