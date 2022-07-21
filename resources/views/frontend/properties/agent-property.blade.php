@extends('frontend.layouts.frontend')

@section('title','All Properties')

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

    <div class="row m-5 "></div>
    <div class="row">
        <div class="col-lg-4 col-md-4"></div>
        <div class="col-lg-4 col-md-4">
            <div class="container text-center">
                @if(isset($user->avatar) && !empty($user->avatar))
                    <img alt="img" class="thumb-lg img-circle" width="150px"
                         src="{{ asset('images/' . $user->avatar) }}">
                @else
                    <img alt="img" class="thumb-lg img-circle" width="150px"
                         src="{{ asset('assets/images/users/agent.jpg') }}">
                @endif

            </div>
        </div>
        <div class="col-lg-4 col-md-4">

        </div>
        <div class="col-lg-1 col-md-1">

        </div>
    </div>

    <h2 class="text-center mt-2">{{ $user->name }}</h2>

    <div class="row">
        <div class="col-lg-4 col-md-4">

        </div>
        <div class="col-lg-4 col-md-4 bg-light text-dark p-3">
            <table>
                <tr>
                    <th>Tel : +885</th>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <th>Email :</th>
                    <td>{{ $user->email }}</td>
                </tr>
            </table>

        </div>
        <div class="col-lg-4 col-md-4">

        </div>
    </div>
    <div class="row jumbotron m-5 ">

        @foreach($properties as $property)
            @include('frontend.properties._single_property',['property' => $property])
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $properties->links() }}
        </div>
    </div>

@endsection


@push('js')


@endpush


