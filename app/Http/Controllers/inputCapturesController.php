<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capture;

class inputCapturesController extends Controller
{
    public function create(){
        $captures = Capture::all();
        return view('backend.input_captures', ['title' => 'Backend'])->with('captures', $captures);
    }

    public function show($id){
        $captures = Capture::find($id);
        return view('backend.input_captures', ['title' => 'Backend'])->with('captures', $captures);
    }

    public function store(Request $request){
        $path = null;

        $request->validate([
            'id_barang' => 'required',
            'image' => 'mimes:jpeg,bmp,png'
        ]);

        if($request->hasFile('file')){
            $path = $request->file('file')->store('images/captures', 'my_files');
        }
        else{
            $path = null;
        }

        Capture::create([
            'id_barang' => (int)$request['id_barang'],
            'file_path' => $path
        ]);

        return back()->with('message', 'Submit Berhasil');
    }

    public function update(Request $request, $id){
        $path = null;

        $filepath = Capture::find($id)->file_path;
        
        if($filepath != null){
            unlink(public_path($filepath));
        }

        $request->validate([
            'id_barang' => 'required',
            'image' => 'mimes: jpeg, bmp, png'
        ]);

        if($request->hasFile('file')){
            $path = $request->file('file')->store('images/captures', 'my_files');
        }
        else{
            $path = null;
        }

        Capture::whereId($id)->update([
            'id_barang' => (int)$request['id_barang'],
            'file_path' => $path
        ]);

        return back()->with('message', 'Update berhasil');
    }

    public function delete($id){
        $captures = Capture::find($id);
        $filepath = Capture::find($id)->file_path;

        if($filepath != null){
            unlink(public_path($filepath));
        }

        $captures->delete();

        return view('backend.input_captures', ['title' => 'Backend']);
    }
}