@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header bg-danger text-white">Permission Denied</div>

                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            <strong><i class="fas fa-exclamation-circle"></i> Oops!</strong> You don't have permission to access this page.
                        </div>

                        <p>Please contact your administrator for assistance or return to the <a href="{{ route('home') }}">home page</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
