<?php

use Illuminate\Database\Seeder;
use App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = [
            [
                'nama' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'nama' => 'Multimedia',
            ],
            [
                'nama' => 'Teknik Pemesinan',
            ],
            [
                'nama' => 'Desain Pembangunan dan Informasi Bangunan',
            ],
        ];

        foreach ($jurusan as $key => $value) {
            Jurusan::create($value);
        }
    }
}
