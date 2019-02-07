<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model //creates a class
{
    //ignore timestamps
    public $timestamps = false;

    //reconfigure primary key here
    protected $primaryKey = 'GenreId';//looks for ArtistId instead of just id, which is the default

    public function tracks() {
        return $this->hasMany('App\Track', 'GenreId');//second argument to allow for different field than 'id'
    }
}
