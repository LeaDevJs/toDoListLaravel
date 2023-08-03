<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;
 
class TodoController extends Controller
{

    
    /*redirecciona a login en caso de querer acceder a otra ruta si no estas logueado ↓ */
    public function __construct(){
        $this->middleware('auth');
        }



    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $todos = Todo::all();

        return view('todos.userIndex')->with('todos', $todos);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.userCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todos = new Todo();
        $todos->tarea = $request->get('tarea');
        $todos->save();

        return redirect('/todos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::find($id);
         return view('todos.userEdit')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = Todo::find($id);
        $todo->tarea = $request->get('tarea');
        $todo->save();

        return redirect('/todos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::find($id);        
        $todo->delete();

        return redirect('/todos');
    }
}
