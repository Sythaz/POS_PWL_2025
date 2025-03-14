<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::where('level_id', 2)->count(); // Menghitung jumlah user dengan level_id = 2
        // Mirip seperti break yang menghentikan kode dibawahnya, namun ini juga bisa digunakan untuk debugging
        // Seperti paduan print dan break
        dd($user); 

        return view('user', ['data' => $user]);
    }

    public function showUser($id = 22, $name = 'Syafiq')
    {
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
