<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    public function index()
    {
        // Find all users
        $users = User::all();

        return Response()->json(["users" => $users], 200);
    }

    public function update(User $user, Request $request)
    {
    }

    public function destroy(User $user)
    {
        if ($user->delete())
            return Response()->json("User delete", 200);
        else
            return Response()->json("Failed to delete user", 500);
    }

    public function show(User $user)
    {
        return Response()->json(["user" => $user], 200);
    }
}
