<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //ignore timestamps
    public $timestamps = false;

    //reconfigure primary key here
    protected $primaryKey = 'CustomerId';
}
