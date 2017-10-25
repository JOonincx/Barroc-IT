@extends('master')

@section('title')
    Clientpage
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
                            <li><a href="{{URL::to('projects/create/'.$client['client_id'])}}">Add Project</a></li>
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
    <div class="title">
        <h1 class="ptitle">Client name</h1>
    </div>
    <div class="wrapper">
        <div class="clientdetailpage">
            <div class="field">
            </div>
            <div class="field">
                <p>Customername:</p>
                <p>{{ $client['company_name'] }}</p>
            </div>
            <div class="field">
                <p>Adress:</p>
                <p>{{ $client['adress'] }}</p>
            </div>
            <div class="field">
                <p>Postcode (Zipcode):</p>
                <p>{{ $client['postcode'] }}</p>
            </div>
            <div class="field">
                <p>Residence:</p>
                <p>{{ $client['residence'] }}</p>
            </div>
            <div class="field">
                <p>Contact person:</p>
                <p>{{ $client['contact_person'] }}</p>
            </div>
            <div class="field">
                <p>Telephone number:</p>
                <p>{{ $client['telephone_number'] }}</p>
            </div>
            <div class="field">
                <p>Faxnumber:</p>
                <p>{{ $client['faxnumber'] }}</p>
            </div>
            <div class="field">
                <p>E-mail:</p>
                <p>{{ $client['email'] }}</p>
            </div>
            <div class="field">
                <p>Prospect:</p>
                @if($client['prospect'] == "0")
                    <p>No</p>
                @else
                    <p>Yes</p>
                @endif
            </div>
            @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
            <div class="field">
                <p>Creditworthy:</p>
                @if($client['creditworthy'] == 0)
                    <p>No</p>
                @else
                    <p>Yes</p>
                @endif
            </div>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
            <div class="field">
                <p>Limit:</p>
                <p>{{ $client['limit'] }}</p>
            </div>
            @endif
        </div>
    </div>



@endsection