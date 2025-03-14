<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Mencari data dengan 'id' = 1, jika ada maka mengembalikan data username dan nama
        $user = UserModel::findOr(1, ['username', 'nama'], function () {
            // jika data tidak ditemukan maka akan mengembalikan nilai 404
            abort(404);
        });
        return view('user', ['data' => $user]);
    }

    public function showUser($id = 22, $name = 'Syafiq')
    {
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
