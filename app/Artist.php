<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model //creates a class
{
    //ignore timestamps
    public $timestamps = false;

    //reconfigure primary key here
    protected $primaryKey = 'ArtistId';//looks for ArtistId instead of just id, which is the default

}
