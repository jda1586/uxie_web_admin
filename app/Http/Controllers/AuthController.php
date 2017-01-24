<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        if ($validator->fails())
            return redirect()->route('auth.index')->withErrors($validator)->withInput(Input::all());

        if (auth()->attempt(['email' => Input::get('email'), 'password' => Input::get('password')], Input::get('remember')))
            return redirect()->route('home');
    }
}
