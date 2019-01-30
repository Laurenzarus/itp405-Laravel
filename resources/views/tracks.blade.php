@extends('layout'){{--Gives the file knowledge of the layout.blade.php file. Don't need the extension--}}

@section('title', 'Tracks'){{--Gives the value of 'genres' to the section title--}}

@section('main')
    <button onclick="location.href = '/genres'" class="btn btn-primary">Return to Genres</button>
    <div class="jumbotron text-center">
    <h1>Track List ({{$genre}})</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Track Name</th>
                <th scope="col">Album</th>
                <th scope="col">Artist</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        @forelse ($tracks as $track)
            <tr>
                <th scope="row">{{$track->TrackName}}</th>
                <td>{{$track->Album}}</td>
                <td>{{$track->Artist}}</td>
                <td>{{$track->Price}}</td>
            </tr>
         @empty {{--If there are no results from $genres variable--}}
            <tr>
                No Tracks Found
            </tr>
        @endforelse
    </table>
@endsection