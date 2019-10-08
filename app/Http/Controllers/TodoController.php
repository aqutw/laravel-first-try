<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\ProjController;
use App\Todo;

class TodoController extends ProjController
{
    public function index(){
      $todos = Todo::all();
      return view('todo.index', ['todos'=>$todos]);
    }
    public function update(Request $req){
      $valid_data = $req->validate([
        'title'=>'required|min:5'
      ]);

      /*
      $todo = new Todo();
      $todo->title = $req->title;
      $todo->save();*/

      $todo = Todo::create($valid_data);
      # $todo = Todo::create($req->all()); # not work

      return redirect(route(TODO_LIST_ROUTE_NAME));
    }

    public function test_var(){
      echo route(PROFILE_ROUTE_NAME);
      echo'<hr>';
      $href = route(TODO_LIST_ROUTE_NAME);
      echo$href;
      echo'<a href="'.$href.'">'.$href.'</a>';
      echo'<hr>';
      $this->fn1();
    }

    public function remove(Request $req, Todo $todo){
      $todo->delete();

      return redirect(route(TODO_LIST_ROUTE_NAME));
    }
    public function remove2(Request $req, $todo_id){
      Todo::where('id',$todo_id)->delete();

      return redirect(route(TODO_LIST_ROUTE_NAME));
    }
}
