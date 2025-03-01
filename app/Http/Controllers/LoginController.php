<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{

    public function index(LoginRequest $request)
    {

        if (!auth()->attempt($request->only('email', 'password'))) {

            return response()->json(['message' => 'Invalid login credentials'], 401);

        } else {

            return response()->json([ 'user' =>
            auth()->user()->where('email', $request->email)->select(['id','access_id','name'])->first(),
            'token' => auth()->user()->createToken('authToken')->accessToken]);

        }




    //    return (User::where('access_id', $request->access_id)->doesntExist() || !auth()->attempt($request->only('email', 'password')))
    //     ? response()->json(['message' => 'Invalid login credentials'], 401)
    //     :
    //     response()->json([ 'user' =>
    //     auth()->user()->where('id',  $request->access_id)->select(['id','access_id','name'])->first(),
    //      'access_token' => auth()->user()->createToken('authToken')->accessToken]);

    }

}
