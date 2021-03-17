<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = [
            [
                'nip' => '1019009988',
                'nama' => 'Yuli Dianah',
                'jk' => 'P',
                'alamat' => 'Bogor',
                'password' => Hash::make('buyuli123'),
            ],
            [
                'nip' => '1019009977',
                'nama' => 'Ridwan Achmadi',
                'jk' => 'L',
                'alamat' => 'Bogor',
                'password' => Hash::make('paridwan123'),
            ],
        ];

        foreach ($guru as $key => $value) {
            Guru::insert($value);
        }
    }
}
