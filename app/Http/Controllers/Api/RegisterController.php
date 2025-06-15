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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // If validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Create new user
        $user = UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
            // menyimpan nama file yang diupload dengan nama yang unik
            'image' => $request->file('image')->hashName(),
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
