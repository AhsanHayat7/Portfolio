<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{

    public function todos()
    {

        $todos = Todo::orderBy("id","desc")->get();
        return view("todo")->with('todos', $todos);
    }

    public function create(Request $request)
    {
        // dd($request->all());

        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->back();
    }

    public function delete($id){

        $todo = Todo::find($id);
        $todo->delete();
        Session::flash('success','Todo is Successfully deleted');
        return redirect()->back();
    }

    public function update($id){
        $todo = Todo::find( $id );

        return view('update')->with('todo',$todo);
    }

    public function save(Request $request, $id){

        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();

        Session::flash('success','Your Todo is Created');
        return redirect()->route('todos');
}

    public function completed($id){
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();

        Session::flash('success','Your Todo is UnCompleted.');

        return redirect()->back();
    }

    public function uncompleted($id){
        $todo = Todo::find($id);
        $todo->completed = 0;
        $todo->save();

        Session::flash('success','Your Todo is Completed.');

        return redirect()->back();
}
}
