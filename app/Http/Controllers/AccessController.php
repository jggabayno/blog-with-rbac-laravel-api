<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\AccessRequest;
use App\Models\Access;

class AccessController extends Controller
{


    public function index()
    {
        return Access::whereNull('deleted_at')->latest()->get();
    }

    public function store(AccessRequest $request)
    {
        $query = Access::create($request->validated());

        if ($query) return response()->json($query);
    }

    public function update(Access $access, AccessRequest $request)
    {
        $query = $access->update($request->only('name', 'description', 'access'));
        return response()->json($query, 200);
    }

    public function destroy(Access $access)
    {
        if ($access) {
            $access->delete();
            return response()->json($access->id,200);
        }
    }

}
