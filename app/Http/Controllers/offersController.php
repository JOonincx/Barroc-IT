<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class offersController extends Controller
{
    public function index()
    {
        $offers = \App\Offer::all();
        $clients = \App\Client::all();
        return view('Offers/index')->with('offers', $offers)->with('clients',$clients);
    }
    public function show($id)
    {
        $offers = \App\Offer::all();
        $client = \App\Client::find($id);
        return view('Offers/Show')->with('offers', $offers)->with('client', $client);
    }
    public function create()
    {
        $clients = \App\Client::all();
        return view('Offers/create')->with('clients', $clients);
    }
    public function edit($id)
    {
        $offer = \App\Offer::find($id);
        return view('Offers/edit')->with('offer', $offer);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'bankaccountNumber' => 'Required|Numberic',
            'balance' => 'Required|Numberic',
            'ledgerAccount' => 'Required|String',
            'sales_percentage' => 'Required|Numberic'
        ]);
        $offer = \App\Offer::find($id);
        $offer->bankaccountNumber   = Input::get('bankaccountNumber');
        $offer->saldo               = Input::get('balance');
        $offer->sales_percentage    = Input::get('sales_percentage');
        $offer->debiteurengegevens  = Input::get('ledgeraccount');
        $offer->save();
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'client' => 'Required',
            'bankaccountNumber' => 'Required|Numberic',
            'balance' => 'Required|Numberic',
            'ledgerAccount' => 'Required|String',
            'sales_percentage' => 'Required|Numberic'
        ]);

        $offer = new \App\Offer();
        $offer->cliend_id = $request->client;
        //$offer->creditworthy = $request->creditworthy;
        $offer->prospect = 0;

        $offer->offerte_status = 0;
        $offer->sales_percentage = $request->sales_percentage;
        $offer->crediteurengegevens = $request->bankaccountNumber;
        $offer->debiteurengegevens = $request->ledgerAccount;
        $offer->saldo = $request->balance;
        $offer->save();

        return redirect('offers');
    }
}
