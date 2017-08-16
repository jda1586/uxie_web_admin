<?php

namespace App\Http\Controllers\API\v1;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;

class ShopsController extends Controller
{
    public function index()
    {
        $validator = Validator::make(Input::all(), [
            'category' => 'required|string',
            'location' => 'required|array'
        ]);
        if ($validator->fails())
            return response()->json([
                'ok' => false,
                'error' => $validator->errors()->toArray(),
            ]);

        //orderBy('score', 'ASC')
        $shops = Category::whereCode(Input::get('category'))->first()->shops()->where('status', 'active')->get();
        $resp = $shops->map(function ($shop, $key) {
            //$image = $shop->images->first();
            return [
                'id' => $shop->id,
                'name' => $shop->name,
                'image' => '', //$image->path . $image->file,
                'score' => 0, //$shop->score,
                'description' => $shop->description,
                'cost' => 0, //$shop->cost,
                'location' => [$shop->latitude, $shop->longitude]
            ];
        });
        return response()->json([
            'ok' => true,
            'page' => [1, 1],
            'count' => $resp->count(),
            'shops' => $resp,
        ]);
    }

    public function show($id)
    {
        $shop = Shop::find($id);
        if (!$shop)
            return response()->json([
                'ok' => false,
                'error' => 'id shop invalid',
            ]);

    }
}
