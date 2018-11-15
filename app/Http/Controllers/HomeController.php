<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
//    2.首页
    public function index(){
//        加载首页面
         return view ('home.index');
    }
}
