<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class StaticPageController extends Controller
{
    //
    public function home(){
        if(Auth::check()){
            $feed_items=Auth::user()->statuses()->orderBy('created_at','desc')->paginate(30);
        }
        return view('static_pages/home',compact('feed_items'));
    }
    public function help(){
        return view('layouts/help');
    }
    public function about(){
        return view('layouts/about');
    }

}
