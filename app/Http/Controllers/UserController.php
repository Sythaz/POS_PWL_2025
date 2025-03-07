<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser($id = 22, $name = 'Syafiq'){
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
