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
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Development')
                            <li><a href="{{ action('projectsController@index') }}">Project list</a></li>
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
        @if ( session('success') )
            <h1> {{session('success')}} </h1>
        @endif
    </div>
    <div class="wrapper">
        <div class="addclientbox">
            <form action="{{ action('projectsController@store') }}" id="addClient" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="companyNames">Company name</label>
                    <input type="text" id="companyNames" required>
                </div>
                <div class="form-group">
                    <label for="address">Adress</label>
                    <input type="text" id="adress" required>
                </div>
                <div class="form-group">
                    <label for="zipcode">Zipcode</label>
                    <input type="text" id="zipcode" required>
                </div>
                <div class="form-group">
                    <label for="residence">Residence</label>
                    <input type="text" id="residence" required>
                </div>
                <div class="form-group">
                    <label for="contactperson">Contact person</label>
                    <input type="text" id="contactperson" required>
                </div>
                <div class="form-group">
                    <label for="telephonenumber">Telephone number</label>
                    <input type="text" id="telephonenumber" required>
                </div>
                <div class="form-group">
                    <label for="faxnumber">Fax number</label>
                    <input type="text" id="faxnumber">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="">Prospect</label>
                    <select name="prospect" id="prospect" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <input type="submit" id="submit" value="Add client">
            </form>
        </div>
    </div>
@endsection