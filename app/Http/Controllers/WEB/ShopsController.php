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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
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

        n
    }
}
