<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        DB::insert(
            'INSERT INTO m_level(kategori_kode, kategori_nama, created_at) VALUES (?, ?, ?)', ['CUS', 'Customer', now()]
        );
        return 'Insert data baru berhasil';
    }
}
