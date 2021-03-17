<?php

use App\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
                'nama' => 'X',
                'id_jurusan' => '1',
            ],
            [
                'nama' => 'XI',
                'id_jurusan' => '1',
            ],
            [
                'nama' => 'XII',
                'id_jurusan' => '1',
            ],
            [
                'nama' => 'XI',
                'id_jurusan' => '2',
            ],
        ];

        foreach ($kelas as $key => $value) {
            Kelas::create($value);
        }
    }
}
