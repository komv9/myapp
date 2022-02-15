<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = auth()->user()->id;
        $username = auth()->user()->name;
        $userratings = \App\Models\Userrating::with('user','movie')->where('user_id',$id)->get();
        //return $userratings;

        return view('home', compact('userratings'));
    }
}
