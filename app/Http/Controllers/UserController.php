<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $user = UserModel::find();
        // $user = UserModel::where('level_id', 1)->first(); 
        $user = UserModel::firstWhere('level_id', 1);       // Memiliki fungsi yang sama dengan dua fungsi diatas
        return view('user', ['data' => $user]);
    }

    public function showUser($id = 22, $name = 'Syafiq')
    {
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
