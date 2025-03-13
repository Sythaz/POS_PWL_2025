<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = UserModel::all();               // Mengambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
    }

    public function showUser($id = 22, $name = 'Syafiq'){
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
