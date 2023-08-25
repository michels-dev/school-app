<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            'nama' => 'Michel Sinambela',
            'jeniskelamin' => 'Laki-Laki',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'Alamat' => 'Banjar Nahor',
            'nomorhp' => '082169700239',
        ]);
    }
}
