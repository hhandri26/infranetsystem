<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupmenu;
use App\Models\Submenu;
use Alert;
use DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('home');
    }

   
}
