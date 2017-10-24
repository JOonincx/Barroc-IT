@extends('master')

@section('title')
    Projects
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
                            <li><a href="{{ action('projectsController@index') }}">Client list</a></li>
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
                    <h2>Project list</h2>
                </div>
                <div class="projectpageheader">
                    <div class="projectname">
                        <p>Project name</p>
                    </div>
                    <script src="{{ URL::asset('js/searchFilters.js') }}"></script>
                    <input type="text" id="clientSearch" onkeyup="clientSearch()" placeholder="Search for client..">
                    <div class="projectbutton">
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == "Sales")
                        <a href="{{ action('projectsController@create') }}">Add project</a>
                        @endif
                    </div>
                </div>

                <ul id="projectlist">
                    @foreach($projects as $project)
                    <li class="projectbox">
                        <div class="customername">
                            <p>Project id:{{ $project['project_id'] }}</p>
                        </div>
                        <div class="companyName">
                            <p>Project name:{{ $project['project_name'] }}</p>
                        </div>
                        <div class="companyName">
                            <p>Client id:{{ $project['client_id'] }}</p>
                        </div>
                        <div class="companyName">
                            <p>Status:{{ $project['offerte status'] }}</p>
                        </div>
                        <div class="projectbutton">
                            <a href="{{ action('projectsController@show', $project['project_id']) }}"> Show details</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <link rel="javascript" href="{{URL::asset('js/searchFilters')}}">
    </div>
@endsection