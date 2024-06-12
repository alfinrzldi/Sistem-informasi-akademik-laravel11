<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);

        prodi::factory(10)->create();


        Mahasiswa::create([
            'nim' => 'E020322086',
            'nama' => 'Oppenheimer',
            'no_hp' => '098764',
            'alamat' => 'asbdias',
            'foto' => 'oppen.jpg',
            'password' => '123',
            'prodi_id' => 1,
        ]);
        
        Mahasiswa::create([
            'nim' => '1prhbsjd',
            'nama' => 'ajsndjk',
            'no_hp' => '98128',
            'alamat' => 'adbhadsd',
            'foto' => 'girl.jpg',
            'password' => '123',
            'prodi_id' => 2,
        ]);

        Mahasiswa::factory(100)->create();
    }
}


