
@extends('layouts.app')

@section('content')
<h1>Create new Todo</h1>
<form action="/todos" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" name="content" placeholder="Enter Content" value="{{ old('content') }}">
    </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" class="form-control" name="due" placeholder="Enter due date" value="{{ old('due') }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection