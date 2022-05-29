<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '1234567890123001',
            'nama' => 'Ayam User',
            'email' => 'ayam@gmail.com',
            'password' => Hash::make('admin1234'),
            'jk' => 'Laki-laki',
            'perusahaan' => 'PT. Tiga Roda',
            'alamat_perorang' => 'Jln. Bro',
            'alamat_perusahaan' => 'Jln. Sis',
            'role' => 'user',
        ]);
        User::create([
            'nik' => '1234567890123002',
            'nama' => 'Kucing Admin',
            'email' => 'kucing@gmail.com',
            'password' => Hash::make('admin1234'),
            'jk' => 'Perempuan',
            'perusahaan' => 'PT. Tiga Roda',
            'alamat_perorang' => 'Jln. Bro',
            'alamat_perusahaan' => 'Jln. Sis',
            'role' => 'admin',
        ]);
    }
}
