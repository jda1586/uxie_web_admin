<?php

namespace App\Http\Controllers\WEB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;

class ShopsController extends Controller
{

    /**
     * Vista general de comercios para administrador
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('shops.index');
    }

    /**
     * Formulario para nuevo comercio
     * @param $email
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($email)
    {
        $validator = Validator::make(['email' => $email], [
            'email' => 'required|email|exists:users,email'
        ]);
        if ($validator->fails())
            return redirect()->back();

        return view('shops.create');
    }

    public function store()
    {
        $validator = Validator::make(Input::all(), [
            'name' => 'required|',
            'category' => 'required|',
        ]);
        if ($validator->fails())
            return redirect()->route('shops.create')->withErrors($validator);


    }
}
