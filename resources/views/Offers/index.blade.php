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
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Development')
                            <li><a href="{{ action('projectsController@index') }}">Project list</a></li>
                        @endif
                    <!-- Sales -->
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Sales' || \Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
                            <li><a href="{{ action('clientsController@index') }}">Client list</a></li>
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
                <div class="BankNumber">
                    <p>Bank number</p>
                </div>
                <div class="OfferAmount">
                    <p>Offer amount</p>
                </div>
                <div class="SalesPercentage">
                    <p>sales percentage</p>
                </div>
                <div class="Total">
                    <p>Total</p>
                </div>
                <div class="Limit">
                    <p>Limit</p>
                </div>
                <div class="BTW">
                    <p>BTW-code</p>
                </div>
                <div class="BKR">
                    <p>BKR check</p>
                </div>
                <div class="offerButton">
                </div>
            </div>

            <ul id="offerteList">
                @foreach($offers as $offer)
                    <li class="offerteBox">
                        <div class="client_name">
                            <p>{{$clients->find($offer->client_id)->company_name}}</p>
                        </div>
                        <div class="bankNumber">
                            <p>{{ $offer['debiteurengegevens'] }}</p>
                        </div>
                        <div class="offerAmount">
                            <p>{{$clients->find($offer->client_id)->count()}}</p>
                        </div>
                        <div class="salesPercentage">
                            <p>{{ $offer['sales_percentage'] }}</p>
                        </div>
                        <div class="total">
                            @if($offer['total'] == null)
                                <p>0</p>
                            @else
                                <p>{{$offer['total']}}</p>
                            @endif
                        </div>
                        <div class="limit">
                            <p>{{$offer['limiet']}}</p>
                        </div>
                        <div class="BTW">
                            <p>{{$offer['BTW']}}</p>
                        </div>
                        <div class="BKR">
                            <p>BKR</p>
                        </div>
                        <div class="offerButton">
                            <a href="{{ action('offersController@show', $offer['client_id']) }}"> Show details</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection