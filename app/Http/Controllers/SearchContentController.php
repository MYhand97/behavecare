<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use Illuminate\Support\Facades\DB;

class SearchContentController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'query'=>'required'
        ]);
        $query = $request->input('query');
        $places = Place::where('nama', 'LIKE', "%".$query."%")->get();
        return view('layouts.searchresult', ['title' => 'Search'])->with('places', $places);
    }
}
