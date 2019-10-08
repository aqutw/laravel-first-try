<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\ProjController;

class AjaxController extends ProjController
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
