<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Instansi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Instansi::factory(5)->create();

        \App\Models\User::factory()->create([
            'nama_lengkap_user' => fake()->name(),
            'nama_panggilan_user' => fake()->name(),
            'id_instansi' => '1',
            'telp_user' => fake()->numerify('##########'),
            'email_user' => 'prihan@gmail.com',
            'alamat_user' => 'Jalan Sumandang',
            'deskripsi_diri' => fake()->text(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'admin',
        ]);

        \App\Models\User::factory()->create([
            'nama_lengkap_user' => fake()->name(),
            'nama_panggilan_user' => fake()->name(),
            'id_instansi' => '2',
            'telp_user' => fake()->numerify('##########'),
            'email_user' => 'mia@gmail.com',
            'alamat_user' => 'Jalan Sumandang',
            'deskripsi_diri' => fake()->text(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'=>'user',
        ]);

        // \App\Models\User::factory(10)->create();

        // $instansi = Instansi::factory(5)->create();

        // User::factory(10)->for($instansi)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
