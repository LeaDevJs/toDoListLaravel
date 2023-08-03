@extends('layouts.plantillabase')

@section('contenido')
<h2>EDIT TODO</h2>

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

@endsection