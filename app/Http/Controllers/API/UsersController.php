<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;

class UsersController extends Controller
{
    public function exists()
    {
        $validator = Validator::make(Input::all(), [
            'email' => 'required|email|exists:users,email'
        ]);
        if ($validator->fails())
            return response()->json([
                'ok' => false,
                'error' => $validator->errors()->toArray(),
            ]);

        return response()->json([
            'ok' => true,
        ]);
    }
}
