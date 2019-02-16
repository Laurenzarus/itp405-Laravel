<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    //ignore timestamps
    public $timestamps = false;

    //reconfigure primary key here
    protected $primaryKey = 'InvoiceId';//looks for ArtistId instead of just id, which is the default

    public function items() {
        return $this->hasMany('App\InvoiceItem', 'InvoiceLineId');
    }
}
