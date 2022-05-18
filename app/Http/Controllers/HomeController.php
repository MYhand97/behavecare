<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
        $places = Place::all()->random(4);
        return view('home', ['title' => 'Home'])->with('places', $places);
    }
}
