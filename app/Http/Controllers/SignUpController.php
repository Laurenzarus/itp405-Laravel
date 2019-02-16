<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class SignUpController extends Controller
{
    public function index() {
        return view('signup');
    }

    public function signup() {
        $user = new User();
        $user->email = request('email');
        // bcrypt
        $user->password = Hash::make(request('password'));
        $user->save();

        Auth::login($user);
        return redirect('/profile');

        // return redirect('/login');
    }
}
