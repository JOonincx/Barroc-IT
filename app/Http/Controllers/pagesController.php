<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Home(){
        if (Auth::user()->name == "Sales"){
            return view('customers/clients');
        }else if(Auth::user()->name == "Finance"){
            return view('customers/clients');
        }else if(Auth::user()->name == "Development"){
            return view('projects/projects');
        }
    }

    public function Login(){
        return view('auth/login');
    }
}
