<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelukis>
 */
class PelukisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pelukis' => fake()->name(),
            'telp_pelukis' => fake()->numerify('##########'),
            'biografi_pelukis' => fake()->text(),
        ];
    }
}
