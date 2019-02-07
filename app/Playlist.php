<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public function tracks() {
        return $this->belongsToMany('App\Track', 'playlist_track', 'PlaylistId', 'TrackId');//need the extra args because of nonstandard database
    }

    protected $primaryKey = 'PlaylistId';
    public $timestamps = false;

}
