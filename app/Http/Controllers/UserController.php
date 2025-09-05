<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    $Articles = App\article::all();
    return view('articles.index',['articles'=>$Articles]);
    //
}
