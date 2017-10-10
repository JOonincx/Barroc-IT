<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class offersController extends Controller
{
    public function create()
    {
        return view('Offers/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bankaccountNumber' => 'Required|Numberic',
            'balance' => 'Required|Numberic',
            'ledgerAccount' => 'Required|String',
            'sales_percentage' => 'Required|Numberic'
        ]);

        $offer = new \App\Offer();
        //$offer->cliend_id = $request->client_id;
        //$offer->creditworthy = $request->creditworthy;
        //$offer->prospect = "postive";

        $offer->offerte_status = "started";
        $offer->sales_percentage = $request->sales_percentage;
        $offer->crediteurengegevens = $request->bankaccountNumber;
        $offer->debiteurengegevens = $request->ledgerAccount;
        $offer->saldo = $request->balance;
        $offer->save();

        return redirect('offers');
    }
}
