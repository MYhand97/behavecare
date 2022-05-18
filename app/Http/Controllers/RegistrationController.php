<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('auth.register', ['title' => 'Registration']);
    }

    public function store(){
        $this -> validate(request(),[
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request([
            'name',
            'email',
            'password'
        ]));
        auth() -> login($user);

        return redirect() -> to('/');
    }
}
