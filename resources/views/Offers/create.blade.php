@extends('master')
@section('title')
    Offer create
@endsection
@section('content')
<div class="title">
    <h1 id="ptitle">Create offer for Clientname</h1>
</div>
<div class="wrapper">
    <div class="addclientbox">
        <form action="#" method="post" id="createOffer">
            <div class="form-group">
                <label for="bankaccountNumber">Bankaccount number</label>
                <input type="text" id="bankaccountNumber" required>
            </div>
            <div class="form-group">
                <label for="balance">Saldo</label>
                <input type="text" id="balance" required>
            </div>
            <div class="form-group">
                <label for="ledgerAccount">Ledger account</label>
                <input type="text" id="ledgerAccount">
            </div>
            <div class="form-group">
                <label for="btw">BTW-code</label>
                <input type="text" id="btw" required>
            </div>
            <input type="submit" id="submit" value="Create offer">
        </form>
    </div>
</div>
@endsection