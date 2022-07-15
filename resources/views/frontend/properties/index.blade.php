@extends('frontend.layouts.frontend')

@section('title','All Properties')

@push('css')

@endpush

@section('content')

    <div class="mt-3" style="visibility: hidden">s</div>
    <div class="row jumbotron m-5 pt-5">
        <!-- Property rent -->
        <div class="text-center mb-4 ">
            <strong class="btn btn-primary" style="background: #140B5C;" id="rent">
                All Properties
            </strong>
        </div>
    </div>

    @include('frontend.include.property-filter')

    <div class="row jumbotron m-5">

        @foreach($properties as $property)
            @include('frontend.properties._single_property',['property' => $property])
        @endforeach

    </div>
@endsection

@push('js')

@endpush
