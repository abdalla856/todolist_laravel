@extends("layouts.app")
@section("content")
<form   action="../todos" method="POST">
  @csrf

  <div class="form-group">
      <label >Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
      
    </div>
    <div class="form-group">
      <label>Content</label>
      <input type="text" class="form-control" id="content" name="content" value="{{old('content')}}">
    </div>
    <div class="form-group">
      <label>Due</label>
      <input type="text" class="form-control" id="due" name="due" value="{{old('due')}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
