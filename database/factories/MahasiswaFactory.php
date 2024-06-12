<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nim' => fake()->unique()->regexify('[A-E]{1}[0-9]{9}'),
            'nama' => fake()->name(),
            'no_hp' => fake()->PhoneNumber(),
            'alamat' => fake()->address(),
            'foto' => fake()->regexify('[A-E]{1}[0-9]{9}') . '.jpg',
            'password' => Hash::make('password'),
            'prodi_id' => mt_rand(1,12)

        ];
    }
}
