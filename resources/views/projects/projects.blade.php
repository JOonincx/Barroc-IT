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
                        @if(isset(\Illuminate\Support\Facades\Auth::user()['username']))
                            <li><p>{{\Illuminate\Support\Facades\Auth::user()['username']}}</p></li>
                        @endif
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
                    <input type="text" id="projectSearch" onkeyup="projectSearch()" placeholder="Search for project..">
                    <div class="projectbutton">
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == "Sales")
                        <a href="{{ action('projectsController@create') }}">Add project</a>
                        @endif
                    </div>
                </div>

                <ul id="projectlist">
                    @foreach($projects as $project)
                    <li class="projectbox">
                        <div class="projectname">
                            <h3>Project name:</h3>
                            <p>{{ $project['project_name'] }}</p>
                        </div>
                        <div class="projectname">
                            <h3>Project id:</h3>
                            <p>{{ $project['project_id'] }}</p>
                        </div>
                        <div class="projectname">
                            <h3>Client id:</h3>
                            <p>{{ $project['client_id'] }}</p>
                        </div>
                        <div class="projectname">
                            <h3>Operating system:</h3>
                            <p>{{ $project['operating system'] }}</p>
                        </div>
                        @if($project['shouldWork'])
                            <div class="projectstatusGood">
                                <h3>Work status: </h3>
                                <p>Keep on working</p>
                            </div>
                        @else
                            <div class="projectstatusBad">
                                <h3>Work status: </h3>
                                <p>Stop working</p>
                            </div>
                        @endif
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