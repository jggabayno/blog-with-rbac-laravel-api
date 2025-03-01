<?php

namespace App\Http\Controllers;

class UserAccessController extends Controller
{
    public function index()
    {
        return auth()->user()->with('accesses')->get();
    }
}
