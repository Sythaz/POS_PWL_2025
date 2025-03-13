<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['level_id' => 1, 'kategori_kode' => 'ADM', 'kategori_nama' => 'Administrator'],
            ['level_id' => 2, 'katogori_kode' => 'MNG', 'kategori_nama' => 'Manager'],
            ['level_id' => 3, 'kategori_kode' => 'STF', 'kategori_nama' => 'Staff/Kasir'],
        ];
        
        DB::table('m_level')->insert($data);
    }
}
