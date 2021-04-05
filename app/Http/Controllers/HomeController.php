<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

   public function login(Request $request){
     return view('layout.login');

   }

   public function create(){
    return redirect('home')->with('status', ' Hello');
   }

   public function index(Request $request){
//    $name= $request->session()->forget('name');
//    dd($name);
    return('ok la');

   }
}
