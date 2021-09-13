@extends("layouts.app")
@section("content")
<link rel="stylesheet" href="../../css/app.css">
<h1>Edit form</h1>

<form action="/todolist/todolist_laravel/todolist/public/todos/{{$todo->id}}" method="POST">
    @csrf
    
    @method("PUT")
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}">

    </div>
    <div class="form-group">
        <label>Content</label>
        <input type="text" class="form-control" id="content" name="content" value="{{ $todo->content }}">
    </div>
    <div class="form-group">
        <label>Due</label>
        <input type="text" class="form-control" id="due" name="due" value="{{ $todo->due }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection