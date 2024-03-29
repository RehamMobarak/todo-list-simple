@extends('layouts.app')

@section('content')
    <h1>Create new Todo</h1>
    <div class="col-6">
    <form method="POST" action="/todos" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control input-box" name="title" id="title" placeholder="Enter title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control input-box" name="content" id="content" placeholder="Enter content" value="{{ old('content') }}">
        </div>
        <div class="form-group">
            <label for="due">Due</label>
            <input type="text" class="form-control input-box" name="due" id="due" placeholder="Enter due" value="{{ old('due') }}">
        </div>
        <button type="submit" class="btn todo-bg m-2">Submit</button>
    </form>
    </div>
@endsection
