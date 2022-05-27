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

        return Response()->json(["data" => $users], 200);
    }

    public function update(User $user, Request $request)
    {
        // Update user
        $isUpdated = $user->update([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
        ]);

        // Check that user was updated successfully
        if ($isUpdated)
            return Response()->json(["data" => "user updated"], 200);
        else
            return Response()->json(["data" => "Failed to update user"], 500);
    }

    public function destroy(User $user)
    {
        // Check that user was deleted successfully
        if ($user->delete())
            return Response()->json(["data" => "User delete"], 200);
        else
            return Response()->json(["data" => "Failed to delete user"], 500);
    }

    public function show(User $user)
    {
        return Response()->json(["user" => $user], 200);
    }
}
