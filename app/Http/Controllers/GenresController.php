<?php
namespace App\Http\Controllers;//DB is NOT in this namespace

use Illuminate\Http\Request;
use DB;//this line added to allow the use of DB
use Validator;

class GenresController extends Controller
{
    public function index(Request $request) {//the function that is called, must return a view (and maybe other variables)
        
        $query = DB::table('genres');

        $genres = $query->get();

        return view('genres.genres', [
            'genres' => $genres
        ]);
    }

    public function show($id) {

        $query = DB::table('genres')
            ->where('GenreId', '=', $id);

        $selected = $query->first();

        return view('genres.edit', [
            'genre' => $selected,
            'id' => $id
        ]);
    }

    public function edit(Request $request) {

        $input = $request->all();

        $validation = Validator::make($input, [
            'genre' => 'required|min:3|unique:genres,Name'
        ]);

        if ($validation->fails()) {
            return redirect('/genres/' . $request->id . '/edit')
                ->withInput()
                ->withErrors($validation);
        }

        //otherwise continue and update record

        $query = DB::table('genres')
            ->where('GenreId', '=', $request->id)
            ->update(['Name' => $request->genre]);

        return redirect('/genres');
    }
}