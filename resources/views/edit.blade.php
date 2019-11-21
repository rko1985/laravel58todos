
@extends('layouts.app')

@section('content')
<h1>Edit Todo</h1>
<form action="/todos/{{$todo->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="{{ $todo->title }}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" name="content" value="{{ $todo->content }}">
    </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" class="form-control" name="due" value="{{ $todo->due }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection