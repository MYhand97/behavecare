<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Review;
use App\Models\Capture;
use App\Models\Metode;
use Illuminate\Support\Facades\Route;

class ContentController extends Controller
{
    public function create(){
        $places = Place::all();
        return view('layouts.content', ['title' => 'Content'])->with('places', $places);
    }

    public function show($id){
        $places = Place::find($id);
        $captures = Capture::all();
        $reviews = Review::all();
        return view('layouts.fullcontent', ['title' => 'Content'])
        ->with('places', $places)
        ->with('captures', $captures)
        ->with('reviews', $reviews);
    }

    public function booking(Request $request, $id){
        $places = Place::find($id);
        $metodes = Metode::all();
        return view('layouts.buycontent', ['title' => 'Booking'])
        ->with('places', $places)
        ->with('metodes', $metodes);
    }

    public function errorGuest(){
        return back()->withErrors(['message' => 'You not Login yet. Login to begin booking']);
    }
}
