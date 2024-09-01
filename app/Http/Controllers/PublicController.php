<?php

namespace App\Http\Controllers;

use App\Models\Sweet;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PublicController extends Controller implements HasMiddleware
{

public static function middleware(){
    return [
        new Middleware('auth', only:['dashboard']),
        //applica questo array solo alla dashboard

    ];
    
}


    public function home(){
        $sweets = Sweet::orderBy('created_at','desc')->take(3)->get();
    // @dd($sweets);
        return view('welcome', compact('sweets'));
    }


    public function dashboard(){
        return view('auth.dashboard');
    }
}
