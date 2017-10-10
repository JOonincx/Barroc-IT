<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Home(){
        if(Auth::guest()){
            return view('auth/login');
        }else{
            if (Auth::user()['username'] == "Sales"){
                return redirect('/clients');
            }else if(Auth::user()['username'] == "Finance"){
                return redirect('/clients');
            }else if(Auth::user()['username'] == "Development"){
                return redirect('/projects');
            }
        }
    }

    public function Login(){
        return view('auth/login');
    }

    public function Logout(){
        \Illuminate\Support\Facades\Auth::logout();
        return redirect('/login');
    }
}
