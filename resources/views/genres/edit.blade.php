@extends('layouts.layout'){{--Gives the file knowledge of the layout.blade.php file. Don't need the extension--}}

@section('title', 'Edit A Genre'){{--Gives the value of 'genres' to the section title--}}

@section('main')
    <div class="jumbotron text-center">
        <h1>Edit a Genre: {{$genre->Name}}</h1>
    </div>
    <form action="/genres" method="POST">
        @csrf
        <div class="form-group">
          <label for="genre">Genre</label>
          <input type="text" name="genre" id="genre" class="form-control" value="{{$genre->Name}}">
          <small class="text-danger">{{$errors->first('genre')}}</small>
        </div>
        <input type="hidden" name="id" value="{{$id}}">
        <button class='btn btn-primary' type="submit">Save</button>
    </form>
@endsection