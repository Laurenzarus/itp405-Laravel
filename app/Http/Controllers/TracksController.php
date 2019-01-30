<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

        return view('tracks', [
            'tracks' => $tracks,
            'genre' => $request->query('genre')
        ]);
    }
}
