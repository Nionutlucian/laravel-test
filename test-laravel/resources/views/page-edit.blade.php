@extends('layouts.app')
<form action="{{ route('page.update') }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="page_content">Page Content:</label>
        <textarea name="page_content" id="page_content" class="form-control" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Page Content</button>
</form>
