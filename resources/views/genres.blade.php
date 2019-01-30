@extends('layout'){{--Gives the file knowledge of the layout.blade.php file. Don't need the extension--}}

@section('title', 'Genres'){{--Gives the value of 'genres' to the section title--}}

@section('main')
    <div class="jumbotron text-center">
        <h1>Genres</h1>
    </div>
    <ul class="list-group">
        @forelse ($genres as $genre)
            <li class="list-group-item">
                <a href='/tracks?genre=<?php echo urlencode($genre->Name); ?>'>{{$genre->Name}}</a>
            </li>
         @empty {{--If there are no results from $genres variable--}}
            <li class="list-group-item">
                No Genres Found
            </li>
      @endforelse
    </ul>
@endsection