<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

//---------------- Index----------------------
    public function index()
    {
        return view('landing');
    }



    public function Landing(){
        return view('landing');
    }
    public function Landing2(){
        return view('landing', ['url' => '/student']);
    }
    public function Landing3(){
        return view('landing', ['url' => '/tutors']);
    }
}
