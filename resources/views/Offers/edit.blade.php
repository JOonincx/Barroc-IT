@extends('master')
@section('title')
    Offer create
@endsection
@section('content')
    <div class="title">
        <h1 id="ptitle">Edit current offer</h1>
    </div>
    <div class="wrapper">
        <div class="addclientbox">
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <form action="/offers/{{$offer['offer_id']}}" method="post" id="createOffer">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" name="client_id" value="{{$offer['client_id']}}">
                <div class="form-group">
                    <label for="bankaccountNumber">Bankaccount number</label>
                    <input type="text" name="bankaccountNumber" value="{{$offer->debiteurgegevens}}" required>
                </div>
                <div class="form-group">
                    <label for="balance">Saldo</label>
                    <input type="text" name="balance" value="{{$offer->saldo}}"required>
                </div>
                <div class="form-group">
                    <label for="sales_percentage">Sales percentage</label>
                    <input type="text" name="sales_percentage" value="{{$offer->sales_percentage}}" required>
                </div>
                <div class="form-group">
                    <label for="ledgerAccount">Ledger account</label>
                    <input type="text" name="ledgerAccount" value="{{$offer->crediteurgegevens}}">
                </div>
                <input type="submit" id="submit" value="Edit offer">
            </form>
        </div>
    </div>
@endsection
