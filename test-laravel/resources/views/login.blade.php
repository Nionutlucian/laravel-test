@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <a href="{{ route('login-simple') }}" class="btn btn-secondary btn-block">Login as Guest</a>
                        <a href="{{ route('login-admin') }}" class="btn btn-danger btn-block">Login as Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
