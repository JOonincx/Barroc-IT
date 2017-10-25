@extends('master')
@section('title')
    Offers
@endsection
@section('header')
    <header>
        <div class="jumbo">
            <div class="wrapper">
                <nav>
                    <ul>
                        @if(isset(\Illuminate\Support\Facades\Auth::user()['username']))
                            <li><p>{{\Illuminate\Support\Facades\Auth::user()['username']}}</p></li>
                        @endif
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Development')
                            <li><a href="{{ action('projectsController@index') }}">Project list</a></li>
                        @endif
                    <!-- Sales -->
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Sales' || \Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
                            <li><a href="{{ action('clientsController@index') }}">Client list</a></li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
                            <li><a href="{{ action('offersController@index') }}">Offer list</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <div class="jumbo">
        <div class="wrapper">
        <div class="offerte-list">
            <div class="title">
                <h2>Offerte list</h2>
            </div>
            <div class="offertePageHeader">
                <div id="clientName">
                    <p>client name</p>
                </div>
                <div class="OfferAmount">
                    <p>Amount offers</p>
                </div>
                <div class="Total">
                    <p>Total</p>
                </div>
                <div class="BKR">
                    <p>BKR check</p>
                </div>
                <div class="details">

                </div>
                <script src="{{ URL::asset('js/searchFilters.js') }}"></script>
                <input type="text" id="clientSearch" onkeyup="clientSearch()" placeholder="Search for client..">
            </div>
            <ul id="clientlist">
                @foreach($clients as $client)
                    <li class="clientbox">
                        <div class="client_name">
                            <p>{{$client->company_name}}</p>
                        </div>
                        <div class="offerAmount">
                            <p>{{$client->offers->count()}}</p>
                        </div>
                        <div class="total">
                            @if(!$client->offers->isEmpty())
                                <p>{{$client->offers->sum('saldo')}}</p>
                            @else
                                <p>0</p>
                            @endif
                        </div>
                        <div class="BKR">
                            <p>BKR</p>
                        </div>
                        <div class="offerButton">
                            @if(!$client->offers->isEmpty())
                                <a href="{{ action('offersController@show', $client->offers[0]['client_id']) }}"> Show details</a>
                            @else
                                <p></p>
                            @endif
                        </div>
                        <div class="createOffer">
                            <a href="{{ action('offersController@createOffer', $client['client_id']) }}"> Create offer</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection