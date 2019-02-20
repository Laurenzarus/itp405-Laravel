@extends('layouts.layout'){{--Gives the file knowledge of the layout.blade.php file. Don't need the extension--}}

@section('title', 'Maintenance'){{--Gives the value of 'home' to the section title--}}

@section('main')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Undergoing Maintenance</h1>
            <h3>
                We're sorry, but the site is currently undergoing maintenance.
                While we fix things up, please visit the below operable pages.
            </h3>
        </div>
        <div class="list-group">
            <a href="/" class="list-group-item list-group-item-action">Home</a>
            <a href="/login" class="list-group-item list-group-item-action">Login</a>
        </div>
    </div>
@endsection