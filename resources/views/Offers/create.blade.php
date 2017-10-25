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
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="/offers" method="post" id="createOffer">
            {{csrf_field()}}
            <input type="hidden" name="client_id" value="{{$client_id}}">
            <div class="form-group">
                <label for="project_id">Project id</label>
                <input type="text" name="project_id">
                <label for="bankaccountNumber">Bankaccount number</label>
                <input type="text" name="bankaccountNumber">
            </div>
            <div class="form-group">
                <label for="balance">Saldo</label>
                <input type="text" name="balance">
            </div>
            <div class="form-group">
                <label for="balance">Sales percentage</label>
                <input type="text" name="sales_percentage">
            </div>
            <div class="form-group">
                <label for="ledgerAccount">Ledger account</label>
                <input type="text" name="ledgerAccount">
            </div>
            <input type="submit" id="submit" value="Create offer">
        </form>
    </div>
</div>
@endsection
