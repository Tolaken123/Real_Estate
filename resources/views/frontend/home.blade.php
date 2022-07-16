@extends('frontend.layouts.frontend')

@section('title','Home')

@push('css')

@endpush

@section('content')
    @include('frontend.include.home-slide')

   @include('frontend.include.property-filter')

    <div class="row jumbotron m-5">
        <div class="text-center mb-4 ">
            <strong class="btn btn-primary fs-4" style="background: #140B5C;" id="sale">
                Properties For Sale
            </strong>
        </div>

        @foreach($sale_properties as $property)
            @include('frontend.properties._single_property',['property' => $property])
        @endforeach

    </div>

    <div class="row jumbotron m-5">
        <!-- Property rent -->
        <div class="text-center mb-4 "><strong class="btn btn-primary fs-4" style="background: #140B5C;" id="rent">Properties
                For Rent</strong></div>

        @foreach($rent_properties as $property)
            @include('frontend.properties._single_property',['property' => $property])
        @endforeach

    </div>

@endsection

@push('js')

@endpush
