<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function create(){
        return view('aboutus', ['title' => 'About Us']);
    }
}
