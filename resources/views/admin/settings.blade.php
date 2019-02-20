@extends('layouts.layout')

@section('title', 'Settings')

@section('main')
    <div class="jumbotron text-center">
        <h1>Settings</h1>
    </div>
    <form action="/settings" method="post">
        @csrf
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="maintenance" name="maintenance" value="on">
            <label class="form-check-label" for="maintenance">Maintenance Mode</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection