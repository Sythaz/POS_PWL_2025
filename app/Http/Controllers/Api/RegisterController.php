<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        // Set validation
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required|min:5|confirmed',
            'level_id' => 'required',
        ]);

        // If validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        // Create new user
        $user = UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
        ]);

        // If user created return response JSON
        if ($user) {
            return response()->json([
                'success' => true,
                'user' => $user
            ], 201);
        }

        // If user failed to create return response JSON
        return response()->json([
            'success' => false,
            'message' => 'User registration failed'
        ], 409);
    }
}
