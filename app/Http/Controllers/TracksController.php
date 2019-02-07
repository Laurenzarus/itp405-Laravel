<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class TracksController extends Controller
{
    public function index(Request $request) {

        $query = DB::table('tracks')
            ->select('tracks.Name as TrackName', 'albums.Title as Album', 'artists.Name as Artist', 'tracks.UnitPrice as Price')
            ->join('genres', 'tracks.GenreId', '=', 'genres.GenreId')
            ->join('albums', 'tracks.AlbumId', '=', 'albums.AlbumId')
            ->join('artists', 'albums.ArtistId', '=', 'artists.ArtistId')
            ->orderBy('TrackName', 'asc');

        if ($request->query('genre')) {
            $query->where('genres.Name', '=', $request->query('genre'));
        }

        $tracks = $query->get();

        return view('tracks.tracks', [
            'tracks' => $tracks,
            'genre' => $request->query('genre')
        ]);
    }

    public function create() {
        $query = DB::table('genres');

        $genres = $query->get();

        $query = DB::table('media_types');

        $mediaTypes = $query->get();

        $query = DB::table('albums');

        $albums = $query->get();

        return view('tracks.create', [
            'genres' => $genres,
            'mediaTypes' => $mediaTypes,
            'albums' => $albums
        ]);
    }

    public function store(Request $request) {

        $input = $request->all();

        //validate
        $validation = Validator::make($input, [
            'name' => 'required',
            'album' => 'required',
            'media' => 'required',
            'genre' => 'required',
            'composer' => 'required',
            'milliseconds' => 'required|numeric',
            'bytes' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        if ($validation->fails()) {
            return redirect('/tracks/new')
            ->withInput()
            ->withErrors($validation);//return with errors if failed
        }

        //if passed, data is ok so insert into DB

        DB::table('tracks')->insert([
            'Name' => $request->name,
            'AlbumId' => $request->album,
            'MediaTypeId' => $request->media,
            'GenreId' => $request->genre,
            'Composer' => $request->composer,
            'Milliseconds' => $request->milliseconds,
            'Bytes' => $request->bytes,
            'UnitPrice' => $request->price
        ]);

        return redirect('/tracks');
    }
}
