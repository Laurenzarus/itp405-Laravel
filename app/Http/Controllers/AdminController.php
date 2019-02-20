<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AdminController extends Controller
{
    public function index() {
        return view('admin.profile', [
            'user' => Auth::user()//gives current loggedin user
        ]);
    }
    
    public function settings() {
        return view('admin.settings', [
            'user' => Auth::user()
        ]);
    }

    public function maintenance() {
        return view('maintenance');
    }

    public function changeSettings(Request $request) {
        if ($request->input('maintenance')) {
            $query = DB::table('configurations')
                ->where('name', '=', 'maintenance')
                ->update(['value' => 'on']);
        }
        else {
            $query = DB::table('configurations')
                ->where('name', '=', 'maintenance')
                ->update(['value' => 'off']);
        }
        return redirect('/');
    }
}
