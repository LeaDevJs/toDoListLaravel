@extends('adminlte::page')

@section('title', 'ToDoList')

@section('content_header')
    <h1>To do list!</h1>
@stop

@section('content')
<a href="todos/create" class="btn btn-primary mb-3">CREATE</a>


<table id="tasks" class="table table-dark table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">Task</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>    
      @foreach ($todos as $todo)
      <tr>
          <td>{{$todo->tarea}}</td>
          <td>
           <form action="{{ route('todos.destroy',$todo->id) }}" method="POST">
            <a href="/todos/{{$todo->id}}/edit" class="btn btn-info">Edit</a>         
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
           </form>          
          </td>        
      </tr>
      @endforeach
    </tbody>
  </table>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>new DataTable('#tasks');</script>
@stop