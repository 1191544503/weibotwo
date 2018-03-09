<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //
    public function home(){
        return view('static_pages/home');
    }
    public function help(){
        return view('layouts/help');
    }
    public function about(){
        return view('layouts/about');
    }

}
