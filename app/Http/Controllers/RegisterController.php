<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function create()
    {
        return view('auth.create');
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|min:4|max:100|unique:users',
            'email' => 'required|Email|unique:users',
            'password' => 'required|min:9|numeric'
        ]);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // membuat pesan setelah register

        session()->flash('sukses','Selamat anda berhasil register');

        return redirect('/');
    }


}
