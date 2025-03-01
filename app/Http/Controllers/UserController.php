<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{

    public function update(User $user,UserUpdateRequest $request)
    {
        $request->user()->where('id',$user->id)->update(
            $request->only('name','email')
        );

        return response()->json($selectedUser->first(), 200);
    }

    public function destroy(User $user)
    {
        if (auth()->user()->findOrFail($user->id)) {
            $user->delete();
            return response()->json($user->id,200);
        }
    }
}
