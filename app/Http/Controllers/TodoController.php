<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
      return view('todo.index');
    }
    public function update(Request $req){
      /*
      $todo = new Todo();
      $todo->title = $req->title;
      $todo->save();*/

      $todo = Todo::create(['title'=>$req->title]);
      # $todo = Todo::create($req->all()); # not work

      return $todo;
    }
}
