<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lukisan>
 */
class LukisanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pelukis' => "1",
            'judul_lukisan' => fake()->name(),
            'deskripsi_lukisan' => fake()->text(),
            'foto_lukisan' => fake()->imageUrl(640, 480, 'animals', true),
            'harga_awal' => '3000000',
            'status_lukisan' => 'Aktif'
        ];
    }
}
