<?php

namespace App\Http\Controllers\WEB;

use App\Category;
use App\Shop;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Validator;

class ShopsController extends Controller
{

    /**
     * Vista general de comercios para administrador
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $chartActive = DB::table('shops')
            ->select(DB::raw("date_format(shops.created_at, '%Y-%m-%d') as date, sum(1) as count"))
            ->where('status', 'active')
            ->groupBy(DB::raw("date_format(shops.created_at, '%Y-%m-%d')"))->orderBy('date', 'asc')->get();
        return view('shops.index', [
            'active' => Shop::whereStatus('active')->count(),
            'chartActive' => $chartActive->implode('count', ','),
            'shopsActive' => Shop::orderBy('created_at', 'DESC')->limit(10)->get(),
        ]);
    }

    /**
     * Formulario para nuevo comercio
     * @param $email
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($email = '')
    {
        $validator = Validator::make(['email' => $email], [
            'email' => 'required|email|exists:users,email'
        ]);
        if ($validator->fails())
            return redirect()->back();

        return view('shops.create', [
            'email' => $email,
            'categories' => Category::where('status', 'active')->pluck('name', 'id'),

        ]);
    }

    /**
     * Graba un nuevo comercio
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), [
            'name' => 'required|',
            'category' => 'required|',
            'owner' => 'required|email|exists:users,email',
            'street' => 'required',
            'outside_number' => 'required',
            'inside_number' => 'required',
            'postal_code' => 'required',
            'phone' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            //'image' => 'required|mimes:jpeg,png|size:2048',
        ]);
        if ($validator->fails())
            return redirect()->route('shops.create')->withErrors($validator);

        $shop = Shop::create([
            'user_id' => auth()->user()->id,
            'owner_id' => User::whereEmail(Input::get('owner'))->first()->id,
            'name' => Input::get('name'),
            'category_id' => Input::get('category'),
            'street' => Input::get('street'),
            'outside_number' => Input::get('outside_number'),
            'inside_number' => Input::get('inside_number'),
            'postal_code' => Input::get('postal_code'),
            'phone' => Input::get('phone'),
            'country_id' => 0, 'state_id' => 0, 'city_id' => 0,  //TODO: implementar ciudades
            'latitude' => Input::get('latitude'),
            'longitude' => Input::get('longitude'),
            'status' => 'active'
        ]);
        //TODO: agregar rutina pera cargar imagen
        if ($shop) {
            return redirect()->route('shops.index');
        } else {
            return redirect()->back()->withInput(Input::all())->with('error', 'No fue posible guardar el comercio');
        }
    }
}
