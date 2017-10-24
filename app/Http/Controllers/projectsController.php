<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = \App\Project::all();
        return view('development/projects')->with('projects', $projects);
    }

    public function show($id)
    {
        $projects = \App\Project::find($id);
        return view('development/project')->with('projects', $projects);
    }


}
