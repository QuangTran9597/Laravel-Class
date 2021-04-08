<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

   public function template(Request $request){

        $searchText= $request->input('search');

        $date = Carbon::hasFormat($searchText, 'Y-m-d');

        $posts = DB::table('posts');

        if ($date){
            $posts->whereDate('created_at', $searchText);
        } else {
            $posts->where('title', 'LIKE', "%{$searchText}%")
            ->orWhere('content', 'LIKE', "%{$searchText}%");
        }

        $posts = $posts->paginate(10);

       return view('test', ['posts' => $posts]);
   }
}
