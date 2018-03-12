<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class StaticPageController extends Controller
{
    //
    public function home(){
        if(Auth::check()){
            $user_ids=Auth::user()->followings->pluck('id')->toArray();
            array_push($user_ids,Auth::user()->id);
            $feed_items=Status::whereIn('user_id',$user_ids)
                ->with('user')
                ->orderBy('created_at','desc')
                ->paginate(30);
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
