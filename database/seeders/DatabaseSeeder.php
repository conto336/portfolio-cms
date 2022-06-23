<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Carlos Jerónimo',
            'lastname' => 'López Conto',
            'email' => 'carlos.conto.336@gmail.com',
            'password' => Hash::make('conto336'),
            'job' => 'Backend Developer',
            'age' => '24',
            'location' => 'Nicaragua',
            'about' => '¡Hola!👋 mi nombre es Carlos Conto, soy Ingeniero en Electrónica y Desarrollador Web. Soy una persona entusiasta, perseverante y siempre con ganas de aprender muchas cosas nuevas y en constante aprendizaje para mejorar mis habilidades.',
            'git' => 'https://github.com/conto336',
            'link' => 'https://linkedin.com/in/carlos-j-conto336',
            'twitter' => '@Carlos_J_Conto',
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);
    }
}
