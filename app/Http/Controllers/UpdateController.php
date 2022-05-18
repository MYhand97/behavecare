<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function create(){
        return view('auth.update', ['title' => 'Update'])->with(auth()->user()->all);
    }

    public function store(Request $request){
        $id = Auth::user()->id;
        $filepath = User::find($id)->file_path;
        
        if($filepath != null){
            unlink(public_path($filepath));
        }

        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        if($request->hasFile('file')){
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png'
            ]);

            $path = $request->file->store('images/users', ['disk' => 'my_files']);

            User::whereId($id)->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'file_path' => $path
            ]);

        }
        
        return back()->with('message','Profile Updated');
    }
}
