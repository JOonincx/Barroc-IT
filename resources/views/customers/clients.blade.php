@extends('master')

@section('title')
    Clients
@endsection

@section('content')
    <div class="jumbo">
        <div class="wrapper">
            <div class="client-list">
                <div class="title">
                    <h2>Client list</h2>
                </div>
                <div class="clientpageheader">
                    <div class="customername">
                        <p>Customer name</p>
                    </div>
                    <div id="companyName">
                        <p>Company name</p>
                    </div>
                    <script src="{{ URL::asset('js/searchFilters.js') }}"></script>
                    <input type="text" id="clientSearch" onkeyup="clientSearch()" placeholder="Search for client..">
                    <div class="clientbutton">
                        @if(Auth::name() == "Sales")
                        <a href="{{ action('clientsController@create') }}">Add client</a>
                        @endif
                    </div>
                </div>

                <ul id="clientlist">
                    @foreach($clients as $client)
                    <li class="clientbox">
                        <div class="customername">
                            <p>{{ $client['customerName'] }}</p>
                        </div>
                        <div class="companyName">
                            <p>{{ $client['companyName'] }}</p>
                        </div>
                        <div class="clientbutton">
                            <a href="{{ action('clientsController@show', $client['id']) }}"> Show details</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

@endsection