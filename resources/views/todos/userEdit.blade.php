@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Edit Task</h1>
@stop

@section('content')

<form action="/todos/{{$todo->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">To do</label>
    <input id="tarea" name="tarea" type="text" class="form-control" value="{{$todo->tarea}}">
  </div>
  <a href="/todos" class="btn btn-secondary">Cancel</a>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop