@extends('layouts.layout'){{--Gives the file knowledge of the layout.blade.php file. Don't need the extension--}}

@section('title', 'Connected Document'){{--Gives the value of 'home' to the section title--}}

@section('main')
    <div class="jumbotron text-center text-danger">
        <h1>Welcome to the Connected Document Page! Think of it as budget Google Docs...</h1>
    </div>
    
    <div contenteditable="true" id="content" class="bg-secondary" style='height: 300px; overflow: scroll;'>
    </div>
    
    <script src="{{secure_asset('js/main.js')}}"></script>
@endsection