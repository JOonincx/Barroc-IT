@extends('master')

@section('title')
    projectpage
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
        <h1 class="ptitle">project {{ $projects['project_name'] }}</h1>
    </div>
    <div class="wrapper">
        <div class="projectdetailpage">
            <div class="customername">
                <p>Project id:{{ $projects['project_id'] }}</p>
            </div>
            <div class="customername">
                <p>Project name:{{ $projects['project_name'] }}</p>
            </div>
            <div class="customername">
                <p>Client id:{{ $projects['client_id'] }}</p>
            </div>
            <div class="customername"">
                <p>Status:{{ $projects['offerte status'] }}</p>
            </div>
        </div>



@endsection