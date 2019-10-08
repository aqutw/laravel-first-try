<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
  public function index(){
    die('ajax index here.');
  }
  public function try_ajax1(Request $request){
    if($request->ajax()){
      die(json_encode(['code'=>0, 'msg'=>'', 'data'=>[]]));
    }else{
      return view('ajax.index');
    }
  }
}
