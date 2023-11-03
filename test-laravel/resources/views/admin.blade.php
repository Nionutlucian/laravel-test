@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                @component('components.navbar')
                @endcomponent
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Page Name</th>
                <th>Image URL</th>
                <th>Page Content</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pageContents as $pageContent)
                <tr>
                    <td>{{ $pageContent->page_name }}</td>
                    <td><img src="{{ $pageContent->image_url }}" alt="Image" class="img-thumbnail" style="max-width: 100px;"></td>
                    <td>{{ $pageContent->page_content }}</td>
                    <td>
                        <a href="{{ route('page.edit', $pageContent->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
