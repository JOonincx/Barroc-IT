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
            'btw' => 'Required|String'
        ]);
        $offer = new \App\Offer();
        $offer->client_id = $request->client_id;
        $offer->bankaccountNumber = $request->bankaccountNumber;
        $offer->balance = $request->balance;
        $offer->ledgerAccount = $request->ledgerAccount;
        $offer->btw = $request->btw;
        $offer->save();

        return redirect('offers');
    }
}
