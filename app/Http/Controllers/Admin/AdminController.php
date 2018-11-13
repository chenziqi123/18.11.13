<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
//    首页面
  public  function  index(){
      return view ('admin.user');
  }
//  编辑
  public function create(){
      return view ('admin.create');
  }

//  储存
  public function store(Request $request){
//      打印数据
       dd ($request->all ());
  }
}
