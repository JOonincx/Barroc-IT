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
                    <!-- Sales -->
                        @if(\Illuminate\Support\Facades\Auth::user()['username'] == 'Sales' || \Illuminate\Support\Facades\Auth::user()['username'] == 'Finance')
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
        <h1 id="ptitle">Add Client</h1>
    </div>
    <div class="wrapper">
        <div class="addclientbox">
            @if ( session('success') )
                <p> {{session('success')}} </p>
            @endif
            <form action="{{ action('clientsController@store') }}" id="addClient" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="companyNames">Company name</label>
                    <input type="text" name="companyNames" id="companyNames" required>
                </div>
                <div class="form-group">
                    <label for="adress">Adress</label>
                    <input type="text" name="address" id="adress" required>
                </div>
                <div class="form-group">
                    <label for="zipcode">Zipcode</label>
                    <input type="text" name="zipcode" id="zipcode" required>
                </div>
                <div class="form-group">
                    <label for="residence">Residence</label>
                    <input type="text" name="residence" id="residence" required>
                </div>
                <div class="form-group">
                    <label for="contactperson">Contact person</label>
                    <input type="text" name="contactperson" id="contactperson" required>
                </div>
                <div class="form-group">
                    <label for="telephonenumber">Telephone number</label>
                    <input type="text" name="telephonenumber" id="telephonenumber" required>
                </div>
                <div class="form-group">
                    <label for="faxnumber">Fax number</label>
                    <input type="text" name="faxnumber" id="faxnumber">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
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