<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index(RegisterRequest $request)
    {
        User::create($request->only('access_id','name','email','password'));
    }
}
