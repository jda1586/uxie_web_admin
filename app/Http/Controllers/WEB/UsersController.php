<?php

namespace App\Http\Controllers\WEB;

use App\User;
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
            return redirect()->route('users.create')->withErrors($validator);

        User::create([
            'email' => Input::get('email'),

        ]);
    }
}
