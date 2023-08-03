@extends('layouts.plantillabase')

@section('contenido')
<h2>CREATE TODO</h2>

<form action="/todos" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">To do</label>
    <input id="tarea" name="tarea" type="text" class="form-control" tabindex="2">
  </div>
  <a href="/todos" class="btn btn-secondary" tabindex="5">Cancel</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
</form>

@endsection