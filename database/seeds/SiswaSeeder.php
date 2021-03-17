<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            [
                'nis' => '1018008428',
                'nama' => 'Cryan Fajri',
                'jk' => 'L',
                'alamat' => 'Bogor',
                'password' => Hash::make('cryan123'),
                'id_kelas' => '3',
            ],
        ];
        foreach ($siswa as $key => $value) {
            Siswa::insert($value);
        }
    }
}
