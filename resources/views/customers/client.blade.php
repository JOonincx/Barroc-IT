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
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Development')
                            <li><a href="{{ action('projectsController@index') }}">Project list</a></li>
                        @endif
                    <!-- Sales -->
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Sales' || \Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
                            <li><a href="{{ action('clientsController@index') }}">Client list</a></li>
                            <li><a href="{{ action('projectsController@create') }}">Add Project</a></li>
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

                <a href="{{URL::to('projects/create/'.$client['id'])}}">Add Project</a>
            </div>
            <div class="field">
                <p>Customername:</p>
                <p>{{ $client['company_name'] }}</p>
            </div>
            <div class="field">
                <p>Adress:</p>
                <p>{{ $client['Address1'] }}</p>
            </div>
            <div class="field">
                <p>Postcode (Zipcode):</p>
                <p>{{ $client['Postcode1'] }}</p>
            </div>
            <div class="field">
                <p>Residence:</p>
                <p>{{ $client['Residence1'] }}</p>
            </div>
            <div class="field">
                <p>Contact person:</p>
                <p>{{ $client['contact_person'] }}</p>
            </div>
            <div class="field">
                <p>Telephone number:</p>
                <p>{{ $client['telephone_number1'] }}</p>
            </div>
            <div class="field">
                <p>Faxnumber:</p>
                <p>{{ $client['Fax_number'] }}</p>
            </div>
            <div class="field">
                <p>E-mail:</p>
                <p>{{ $client['e-mail'] }}</p>
            </div>
            <div class="field">
                <p>Prospect:</p>
                <p>{{ $client['prospect'] }}</p>
            </div>
            @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
            <div class="field">
                <p>Creditworthy:</p>
            </div>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
            <div class="field">
                <p>Limit:</p>
                <p>{{ $client['limiet'] }}</p>
            </div>
            @endif
        </div>
    </div>



@endsection