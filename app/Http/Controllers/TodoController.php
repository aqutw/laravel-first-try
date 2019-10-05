<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
      $todos = Todo::all();
      return view('todo.index', ['todos'=>$todos]);
    }
    public function update(Request $req){
      /*
      $todo = new Todo();
      $todo->title = $req->title;
      $todo->save();*/

      $todo = Todo::create(['title'=>$req->title]);
      # $todo = Todo::create($req->all()); # not work

      return redirect(route(TODO_ROUTE_NAME));
    }

    public function test_var(){
      echo route(PROFILE_ROUTE_NAME);
      echo'<hr>';
      $href = route(TODO_ROUTE_NAME);
      echo$href;
      echo'<a href="'.$href.'">'.$href.'</a>';
    }

    public function remove(Request $req, Todo $todo){
      return ($todo);
    }
}
