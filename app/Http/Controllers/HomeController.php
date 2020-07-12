<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
session_start();
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
         Session::put('active',1);
        $data=DB::table('content_manages')->get();
        return view('admin.adminhome',compact('data'));
        
    }
}
