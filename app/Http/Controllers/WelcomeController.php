<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function show($page = "index"){
        return view($page);
    }
    public function process_signup(Request $request){
        return view('page1',['data'=>$request]);
    }
}
