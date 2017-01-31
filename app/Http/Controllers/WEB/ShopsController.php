<?php

namespace App\Http\Controllers\WEB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopsController extends Controller
{
    public function index()
    {
        return view('shops.index');
    }

    public function create()
    {
        return view('shops.create');
    }
}
