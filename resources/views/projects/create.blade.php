@extends('master')

@section('title')
    Create project
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
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Sales')
                            <li><a href="{{ action('clientsController@index') }}">Client list</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="title">
        <h1 id="ptitle">Add Project</h1>
    </div>
    <div class="wrapper">
        <div class="addclientbox">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ( session('success') )
                <h1> {{session('success')}} </h1>
            @endif
            <form action="{{ action('projectsController@store') }}" id="addClient" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="client_id" value="{{$client_id}}">
                <div class="form-group">
                    <label for="project_name">Project name</label>
                    <input type="text" name="project_name" required>
                </div>
                <div class="form-group">
                    <label for="maintance">Mantainence contract</label>
                    <select name="maintance" id="maintance" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <input type="submit" id="submit" value="Add project">
            </form>
        </div>
    </div>
@endsection