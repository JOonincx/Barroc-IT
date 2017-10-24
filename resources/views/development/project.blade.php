@extends('master')

@section('title')
    project page
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
                            <li><a href="{{ action('projectsController@index') }}">project list</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="title">
        <h1 class="ptitle">project: {{ $projects['project_name'] }}</h1>
    </div>
    <div class="wrapper">
        <div class="clientdetailpage">
            <br>
            <br>
            <div class="field">
                <p>Operating sysem:</p>
                <p>{{ $projects['operating system'] }}</p>
            </div>
                <div class="field">
                    <p>Work status:</p>
                    @if(true)
                        <p>Keep on working</p>
                    @else
                        <p>Stop working</p>
                    @endif
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