<?php

namespace Rocket\Http\Controllers\Backend;

use Rocket\Http\Requests;
use Illuminate\Http\Request;

class DashBoardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    public function vali(){
        return view('backend.vali');
    }
}
