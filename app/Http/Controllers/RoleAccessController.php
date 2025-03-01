<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\RoleAccess;

class RoleAccessController extends Controller
{
    public function index()
    {
        try {

            $result = RoleAccess::all();

            return response()->json($result);

        } catch (Exception $e) {

            return response()->json($e);

        }
    }
}
