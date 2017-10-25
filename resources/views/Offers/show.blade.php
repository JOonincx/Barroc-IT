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
                @if($client['id'] == $offer->client_id)
                    <table>
                        <tr>
                            <th>Offerte_id</th>
                            <th>Offerte_status</th>
                            <th>Prospect</th>
                            <th>Sales_percentage</th>
                            <th>Creditworthy</th>
                            <th>Crediteurengegevens</th>
                            <th>Debiteurengegevens</th>
                            <th>Saldo</th>
                        </tr>
                        <tr>
                            <td>{{$offer['offerte_id']}}</td>
                            <td>@if($offer['offerte_status'] == 1) Finished @elseif($offer['offerte_status'] == 0) Ongoing @endif</td>
                            <td>{{$offer['prospect']}}</td>
                            <td>{{$offer['sales_percentage']}}</td>
                            <td>@if($offer['creditworthy'] == 1) Yes @elseif($offer['creditworthy'] == 0) No @endif</td>
                            <td>{{$offer['crediteurengegevens']}}</td>
                            <td>{{$offer['debiteurengegevens']}}</td>
                            <td>{{$offer['saldo']}}</td>
                            <td class="offerButton">
                                <a href="{{ action('offersController@edit',$offer['offerte_id']) }}"> Edit Offer</a>
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