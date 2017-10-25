<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;

class clientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        if(isset(Auth::user()['username'])){
            if(Auth::user()['username'] == 'Development'){
                view('/checkhome');
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
        $clients = \App\Client::all();
        return view('customers/clients')
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $client = new \App\Client();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = \App\Client::find($id);
        return view('customers/client')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
