@extends('layouts.layout')

@section('title', 'Add a Track')

@section('main')
<div class="jumbotron text-center">
    <h2>Add a Track</h2>
</div>
<form action="/tracks" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Track Name" value="{{old('name')}}" name="name">
        <small class="text-danger">{{$errors->first('name')}}</small>
    </div>
    <div class="form-group">
        <label for="album">Album</label>
        <select class="form-control" id="album" name="album">
            <option value="{{old('album')}}" selected>Select an Album</option>
            @forelse ($albums as $album)
                <option value="{{$album->AlbumId}}" {{$album->AlbumId == old('album') ? "selected" : ""}}>{{$album->Title}}</option>
            @empty
                <option value="">No Albums!</option>
            @endforelse
        </select>
        <small class="text-danger">{{$errors->first('album')}}</small>
    </div>
    <div class="form-group">
        <label for="media">Media Type</label>
        <select class="form-control" id="media" name="media">
            <option value="{{old('media')}}" selected>Select a Media Type</option>
            @forelse ($mediaTypes as $mediaType)
                <option value="{{$mediaType->MediaTypeId}}" {{$mediaType->MediaTypeId == old('media') ? "selected" : ""}}>{{$mediaType->Name}}</option>
            @empty
                <option value="">No Media Types!</option>
            @endforelse
        </select>
        <small class="text-danger">{{$errors->first('media')}}</small>
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <select class="form-control" id="genre" name="genre">
            <option value="{{old('genre')}}" selected>Select a Genre</option>
            @forelse ($genres as $genre)
                <option value="{{$genre->GenreId}}" {{$genre->GenreId == old('genre') ? "selected" : ""}}>{{$genre->Name}}</option>
            @empty
                <option value="">No Genres!</option>
            @endforelse
        </select>
        <small class="text-danger">{{$errors->first('genre')}}</small>
    </div>
    <div class="form-group">
        <label for="composer">Composer</label>
        <input type="text" class="form-control" id="composer" placeholder="Composer" value="{{old('composer')}}" name="composer">
        <small class="text-danger">{{$errors->first('composer')}}</small>
    </div>
    <div class="form-group">
        <label for="milliseconds">Milliseconds</label>
        <input type="text" class="form-control" id="milliseconds" placeholder="Milliseconds" value="{{old('milliseconds')}}" name="milliseconds">
        <small class="text-danger">{{$errors->first('milliseconds')}}</small>
    </div>
    <div class="form-group">
        <label for="bytes">Bytes</label>
        <input type="text" class="form-control" id="bytes" placeholder="Bytes" name="bytes">
        <small class="text-danger">{{$errors->first('bytes')}}</small>
    </div>
    <div class="form-group">
        <label for="price">Unit Price</label>
        <input type="text" class="form-control" id="price" placeholder="Unit Price" value="{{old('price')}}" name="price">
        <small class="text-danger">{{$errors->first('price')}}</small>
    </div>
    <button class='btn btn-primary' type="submit">Save</button>
</form>
@endsection