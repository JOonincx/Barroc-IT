@extends('master')

@section('title')
    Clients
@endsection

@section('header')
    <header>
        <div class="jumbo">
            <div class="wrapper">
                <nav>
                    <ul>
                        <li><a href="{{ redirect('/logout') }}">Logout</a></li>
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Development')
                        <li><a href="#">Project list</a></li>
                        @endif
                        <!-- Sales -->
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Sales' || \Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
                        <li><a href="#">Client list</a></li>
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
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == "Sales")
                        <a href="{{ action('clientsController@create') }}">Add client</a>
                        @endif
                    </div>
                </div>

                <ul id="clientlist">
                    @foreach($clients as $client)
                    <li class="clientbox">
                        <div class="customername">
                            <p>{{ $client['contact_person'] }}</p>
                        </div>
                        <div class="companyName">
                            <p>{{ $client['company_name'] }}</p>
                        </div>
                        <div class="clientbutton">
                            <a href="{{ action('clientsController@show', $client['id']) }}"> Show details</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <link rel="javascript" href="{{URL::asset('js/searchFilters')}}">
    </div>
@endsection