@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                @component('components.navbar')
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome to Services</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt gravida ligula, ac vestibulum ante cursus ut. Integer bibendum faucibus tortor.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('resources/img/img.jpg') }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
