<?php

namespace App\Http\Controllers;

class productcontroller extends Controller
{
    public function index()
        $articles =App\product::all();
    return view('articles.index',['articles'=>$articles]);
    //
}
