<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function todo()
    {
        $user = \Auth::user();
        $todos = Todo::where('user_id',$user['id'] )->where('status',1)->get();

        return view('week',compact('todos'));
    }
}
