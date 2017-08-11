<?php

namespace App\Http\Controllers\WEB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login()
    {
        $validator = Validator::make(Input::all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('auth.index')->withErrors($validator)->withInput(Input::all());
        }

        if (auth()->attempt(['email' => Input::get('email'), 'password' => Input::get('password')], Input::get('remember'))) {
            return redirect()->route('home');
        } else {
            return redirect()->route('auth.index')->with(['error' => 'Correo y/o contraseña incorrectos']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.index');
    }
}
