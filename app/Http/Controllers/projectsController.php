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

    public function create()
    {
        return view('development/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'companyNames'      => 'required|string|min:6',
            'address'           => 'required|string',
            'zipcode'           => 'required',
            'residence'         => 'required',
            'contactperson'     => 'required',
            'telephonenumber'   => 'required',
            'email'             => 'required|email',
            'prospect'          => 'required',
        ]);

        $client = new \App\Project();
        $client->company_name = $request->companyNames;
        $client->Address1 = $request->address;
        $client->Postcode1 = $request->zipcode;
        $client->Residence1 = $request->residence;
        $client->contact_person = $request->contactperson;
        $client->telephone_number1 = $request->telephonenumber;
        if (isset($request->faxnumber)){
            $client->Fax_number = $request->faxnumber;
        }
        $client->email= $request->email;
        if($request->prospect == "yes"){
            $client->prospect = 1;
        }else{
            $client->prospect = 0;
        }
        $client->save();
        return back()->with('success', 'Succesfully added client');
    }

}
