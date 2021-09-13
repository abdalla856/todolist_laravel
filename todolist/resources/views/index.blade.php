
@extends("layouts.app")
@section("content")
<link rel="stylesheet" href="css/app.css">

<h1>Todos list </h1>
@if(count($todos)>0)
@foreach($todos  as $todo)
<div class="card m-2">

    <h3><a href="todos/{{$todo->id}}">{{$todo->title}}</a></h3>
    <span class="badge badge-danger">{{$todo->due}}</span>


</div>
@endforeach
@endif

@endsection