<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class inputReviewsController extends Controller
{
    public function create(){
        $comments = Review::all();
        return view('backend.input_comments', ['title' => 'Backend'])->with('comments', $comments);
    }

    public function show($id){
        $comments = Review::find($id);
        return view('backend.input_comments', ['title' => 'Backend'])->with('comments', $comments);
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'id_barang' => 'required',
            'comment' => 'required'
        ]);

        Review::create([
            'nama' => $request['nama'],
            'id_barang' => (int)$request['id_barang'],
            'comment' => $request['comment']
        ]);
        
        return back()->with('message', 'Submit berhasil');
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required',
            'id_barang' => 'required',
            'comment' => 'required'
        ]);

        Review::whereId($id)->update([
            'nama' => $request['nama'],
            'id_barang' => (int)$request['id_barang'],
            'comment' => $request['comment']
        ]);

        return back()->with('message', 'Update berhasil');
    }

    public function delete($id){
        $comment = Review::find($id);
        $comment->delete();

        return back()->with('message', 'Delete berhasil');
    }
}
