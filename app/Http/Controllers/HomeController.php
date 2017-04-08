<?php

namespace Rocket\Http\Controllers;

use Rocket\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
}
