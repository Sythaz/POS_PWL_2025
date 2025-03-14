<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];

        UserModel::create($data);               // Menambahkan data ke tabel m_user
        // ::create, template kode untuk menambahkan data ke tabel yang terhubung dengan model

        $user = UserModel::all();               // Mengambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
    }

    public function showUser($id = 22, $name = 'Syafiq'){
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
