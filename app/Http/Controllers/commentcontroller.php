<?php

namespace App\Http\Controllers;

class commentcontroller extends Controller
{
    public function index();


    $comments = App\model\comment::all();

    return view('comments.index',['comments'=>$comments]);
    //
}
//
}
