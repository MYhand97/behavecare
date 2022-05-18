<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class inputPlacesController extends Controller
{
    public function create(){
        $places = Place::all();
        return view('backend.input_places', ['title' => 'Backend'])->with('places',$places);
    }

    public function show($id){
        $places = Place::find($id);
        return view('backend.input_places', ['title' => 'Backend'])->with('places',$places);
    }

    public function store(Request $request){
        $path = null;
        $path2 = null;

        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'harga_paket' => 'required',
            'full_ket' => 'required',
            'short_ket' => 'required',
            'alamat' => 'required',
            'image' => 'mimes:jpeg,bmp,png'
        ]);

        if($request->hasFile('gmaps')){
            $path = $request->file('gmaps')->store('images/places', 'my_files');
            if($request->hasFile('file')){
                $path2 = $request->file('file')->store('images/places', 'my_files');
                Place::create([
                    'kategori' => $request['kategori'],
                    'nama' => $request['nama'],
                    'harga' => $request['harga'],
                    'harga_paket' => $request['harga_paket'],
                    'full_ket' => $request['full_ket'],
                    'short_ket' => $request['short_ket'],
                    'alamat' => $request['alamat'],
                    'gmaps' => $path,
                    'file_path' => $path2
                ]);
                
                return back()->with('message','Input Berhasil');
            }
            else{
                $path2=null;
            }
        }
        else{
            $path=null;
        }
        
        Place::create([
            'kategori' => $request['kategori'],
            'nama' => $request['nama'],
            'harga' => $request['harga'],
            'harga_paket' => $request['harga_paket'],
            'full_ket' => $request['full_ket'],
            'short_ket' => $request['short_ket'],
            'alamat' => $request['alamat'],
            'gmaps' => $path,
            'file_path' => $path2
        ]);
        
        return back()->with('message','Input Berhasil');
    }

    public function update(Request $request, $id){
        $path = null;
        $path2 = null;

        $filepath = Place::find($id)->file_path;
        $gmaps = Place::find($id)->gmaps;
        
        if($filepath != null && $gmaps != null){
            unlink(public_path($filepath));
            unlink(public_path($gmaps));
        }

        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'harga_paket' => 'required',
            'full_ket' => 'required',
            'short_ket' => 'required',
            'alamat' => 'required',
            'image' => 'mimes:jpeg,bmp,png'
        ]);

        if($request->hasFile('gmaps')){
            $path = $request->file('gmaps')->store('images/places', 'my_files');
            if($request->hasFile('file')){
                $path2 = $request->file('file')->store('images/places', 'my_files');
                Place::whereId($id)->update([
                    'kategori' => $request['kategori'],
                    'nama' => $request['nama'],
                    'harga' => $request['harga'],
                    'harga_paket' => $request['harga_paket'],
                    'full_ket' => $request['full_ket'],
                    'short_ket' => $request['short_ket'],
                    'alamat' => $request['alamat'],
                    'gmaps' => $path,
                    'file_path' => $path2
                ]);
                return back()->with('message','Input Berhasil');
            }
            else{
                $path2 = null;
            }
        }
        else{
            $path = null;
        }

        Place::whereId($id)->update([
            'kategori' => $request['kategori'],
            'nama' => $request['nama'],
            'harga' => $request['harga'],
            'harga_paket' => $request['harga_paket'],
            'full_ket' => $request['full_ket'],
            'short_ket' => $request['short_ket'],
            'alamat' => $request['alamat'],
            'gmaps' => $path,
            'file_path' => $path2
        ]);

        return view('backend.input_places', ['title' => 'Backend'])->with('message','Input Berhasil');
    }

    public function delete($id){
        $place = Place::find($id);
        $filepath = Place::find($id)->file_path;
        $gmaps = Place::find($id)->gmaps;
        if($filepath != null && $gmaps != null ){
            unlink(public_path($filepath));
            unlink(public_path($gmaps));
        }
        $place->delete();

        return view('backend.input_places', ['title' => 'Backend']);
    }
}
