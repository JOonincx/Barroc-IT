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
            <h1 class="clientname">{{$client->company_name}}</h1>
            <div class="offer">
            @foreach($offers as $offer)
                @if($client['client_id'] == $offer->client_id)
                    <table>
                        <tr>
                            <th>Project_id</th>
                            <th>Offer_id</th>
                            <th>Offer_status</th>
                            <th>Sales_percentage</th>
                            <th>Crediteurengegevens</th>
                            <th>Debiteurengegevens</th>
                            <th>Saldo</th>
                        </tr>
                        <tr>
                            <td>{{$offer['project_id']}}</td>
                            <td>{{$offer['offer_id']}}</td>
                            <td>@if($offer['offer_status'] == 1) Finished @elseif($offer['offer_status'] == 0) Ongoing @endif</td>
                            <td>{{$offer['sales_percentage']}}</td>
                            <td>{{$offer['crediteurgegevens']}}</td>
                            <td>{{$offer['debiteurgegevens']}}</td>
                            <td>{{$offer['saldo']}}</td>
                            <td class="offerButton">
                                <a href="{{ action('offersController@edit',$offer['offer_id']) }}"> Edit Offer</a>
                            </td>
                        </tr>
                    <br>
                    </table>
                @endif
            @endforeach
            </div>
        </div>
    </div>
@endsection