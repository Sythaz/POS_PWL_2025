<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                // Jika mencari data namun menambahkan hash, akan membuat data tidak lengkap
                // Hanya mengembalikan data yang dicari dan ada seperti 'username', 'nama' dan 'level_id'
                // Bisa dihapus atau menghilangkan password dari $fillable
                'password' => Hash::make('12345'), 
                'level_id' => 2
            ],
        );

        return view('user', ['data' => $user]);
    }

    public function showUser($id = 22, $name = 'Syafiq')
    {
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
