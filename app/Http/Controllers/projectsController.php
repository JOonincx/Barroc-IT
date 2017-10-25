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
        $clients = \App\Client::all();
        $offers = \App\Offer::all();

        if (isset($offers)){
            for ($i = 0; $i < count($offers); $i++){
                for ($x = 0; $x < count($clients); $x++){
                    if($offers['client_id'] == $clients['id']){
                        $clients[$x]['total'] = isset($clients[$x]['total']) ? $clients[$x]['total'] + $offers[$i]['saldo'] : $offers[$i]['saldo'];
                    }
                }
            }

            for ($i = 0; $i < count($projects); $i++){
                for ($x = 0; $i < count($clients); $i++){
                    if ($projects[$i]['client_id'] == $clients[$x]['id']){
                        if($clients[$x]['total'] > $clients[$x]['limiet']){
                            $projects[$i]['shouldWork'] = false;
                        }else{
                            $projects[$i]['shouldWork'] = true;
                        }
                        break;
                    }
                }
            }
        }
        return view('projects/projects')->with('projects', $projects);
    }

    public function show($id)
    {
        $projects = \App\Project::find($id);
        return view('projects/project')->with('projects', $projects);
    }

    public function create()
    {
        return view('projects/create');
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
        return view('projects/create')->with('client_id', $client_id);
    }
}
