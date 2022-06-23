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
            'nama' => 'Ayam User',
            'email' => 'ayam@gmail.com',
            'password' => Hash::make('admin1234'),
            'nama_perusahaan' => 'PT. Tiga Roda',
            'nama_direktur' => 'Pak Jon',
            'alamat_perusahaan' => 'Jln. Sis',
            'lokasi_permohonan' => 'Jln. Sis',
            'role' => 'user',
            'token' => '0',
        ]);
        User::create([
            'nama' => 'Kucing Admin',
            'email' => 'kucing@gmail.com',
            'password' => Hash::make('admin1234'),
            'nama_perusahaan' => 'PT. Tiga Roda',
            'nama_direktur' => 'Pak Doe',
            'alamat_perusahaan' => 'Jln. Sis',
            'lokasi_permohonan' => 'Jln. Sis',
            'role' => 'admin',
            'token' => '0',
        ]);
    }
}
