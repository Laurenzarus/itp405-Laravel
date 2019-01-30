<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TracksController extends Controller
{
    public function index(Request $request) {

        

        return view('tracks', [

        ]);
    }
}
