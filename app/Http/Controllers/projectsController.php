<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;

class projectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if(isset(Auth::user()['username'])){
            if(Auth::user()['username'] == 'Sales' || Auth::user()['username'] == 'Finance'){
                redirect('/checkhome');
            }
        }
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

    public function create()
    {
        return view('development/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'client_id'         => 'required',
            'project_name'      => 'required|string|min:4',
            'maintance'      => 'required',
        ]);

        $project = new Project();
        $project->client_id = $request->client_id;
        $project->project_name = $request->project_name;
        if($request->maintance == "yes"){
            $project->maintance = 1;
        }else{
            $project->maintance = 0;
        }
        $project->save();
        return back()->with('success', 'Succesfully added client');
    }

    public function createProject($client_id){
        return view('development/create')->with('client_id', $client_id);
    }
}
