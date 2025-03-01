<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserPostController extends Controller
{
    public function index(User $user) {

        return $user->posts()->with(['user','likes','comments'])->paginate(20);

    }

}
