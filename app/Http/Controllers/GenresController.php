<?php
namespace App\Http\Controllers;//DB is NOT in this namespace

use Illuminate\Http\Request;
use DB;//this line added to allow the use of DB

class GenresController extends Controller
{
    public function index(Request $request) {//the function that is called, must return a view (and maybe other variables)
        
        $query = DB::table('genres');

        $genres = $query->get();

        return view('genres', [
            'genres' => $genres
        ]);
    }

    public function edit() {
        
    }
}