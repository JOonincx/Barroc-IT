@extends('master')

@section('title')
    Clientpage
@endsection

@section('content')
    <div class="title">
        <h1 class="ptitle">Client name</h1>
    </div>
    <div class="wrapper">
        <div class="clientdetailpage">
            <div class="field">
                <p>{{ $client['customer_name'] }}</p>
            </div>
            <div class="field">
                <p>Adress:</p>
            </div>
            <div class="field">
                <p>Housenumber:</p>
            </div>
            <div class="field">
                <p>Zipcode:</p>
            </div>
            <div class="field">
                <p>Residence:</p>
            </div>
            <div class="field">
                <p>Contact person:</p>
            </div>
            <div class="field">
                <p>Telephone number:</p>
            </div>
            <div class="field">
                <p>Faxnumber:</p>
            </div>
            <div class="field">
                <p>E-mail:</p>
            </div>
            <div class="field">
                <p>Prospect:</p>
            </div>
            <div class="field">
                <p>Creditworthy:</p>
            </div>
            <div class="field">
                <p>Limit:</p>
            </div>
        </div>
    </div>



@endsection