<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap_user' => fake()->name(),
            'nama_panggilan_user' => fake()->name(),
            'id_instansi' => '1',
            'telp_user' => fake()->numerify('##########'),
            'email_user' => fake()->unique()->safeEmail(),
            'alamat_user' => 'Jalan Sumandang',
            'deskripsi_diri' => fake()->text(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'user',
        ];
    }
}
