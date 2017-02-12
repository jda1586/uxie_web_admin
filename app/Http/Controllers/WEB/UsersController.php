<?php

namespace App\Http\Controllers\WEB;

use App\User;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $validator = Validator::make(Input::all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        if ($validator->fails())
            return redirect()->route('users.create')->withErrors($validator)->withInput(Input::all());

        $user = User::create([
            'email' => Input::get('email'),
            'first_name' => Input::get('first_name'),
            'last_name' => Input::get('last_name'),
            'password' => Hash::make(Input::get('password')),
        ]);
        if ($user) {
            return redirect()->route('shops.create', ['email' => $user->email]);
        } else {
            return redirect()->back()->withInput(Input::all())->with('error', 'El usuario no pudo ser creado');
        }
    }
}
