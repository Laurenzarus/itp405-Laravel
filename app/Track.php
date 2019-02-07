<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model //creates a class
{
    //ignore timestamps
    public $timestamps = false;

    //reconfigure primary key here
    protected $primaryKey = 'TrackId';//looks for ArtistId instead of just id, which is the default

    public function genre() {
        return $this->belongsTo('App\Genre', 'GenreId');//same constraint needed since not genre_id
    }

    public function playlists() {
        return $this->belongsToMany('App\Playlist', 'playlist_track', 'TrackId', 'PlaylistId');//need the join table for the 2nd arg
    }
}

//FK tablename_id
//PK id
