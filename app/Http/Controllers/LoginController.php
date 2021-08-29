<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required',
            'password' => 'required|min:9'
        ]);


        if(Auth::attempt($attributes)){
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'email' => 'email atau password salah'
        ]);

    }
}
