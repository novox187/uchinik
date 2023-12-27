<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'avatar' => 'required',
            'username' => 'required|max:10',
            'password' => 'required|min:6|confirmed'
        ]);


        User::create([

            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password) 

        ]);

        auth()->attempt([
            'username' => $request->username,
            'password' => $request->password,
            'avatar' => $request->avatar
        ]);



        return redirect()->route('home');
    }
}
