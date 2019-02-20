@extends('layouts.layout'){{--Gives the file knowledge of the layout.blade.php file. Don't need the extension--}}

@section('title', 'Home'){{--Gives the value of 'home' to the section title--}}

@section('main')
    <div class="jumbotron text-center text-danger">
        <h1>Welcome to the Home Page! I hope you enjoy your stay!</h1>
    </div>
@endsection