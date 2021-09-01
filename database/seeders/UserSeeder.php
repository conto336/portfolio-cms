<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = DB::table('users')->insert([
            'name' => strtoupper('Carlos Jeronimo'),
            'surname' => strtoupper('lopez Conto'),
            'initials' => strtoupper('CC'),
            'carrer' => strtoupper('electronica'),
            'carnet' => 15047113,
            'email' => 'admin@admin',
            'password' =>Hash::make('12345678'),
        ]);

        $user = DB::table('users')->insert([
            'name' => strtoupper('Carlos Jeronimo'),
            'surname' => strtoupper('Lopez Conto'),
            'initials' => strtoupper('CJ'),
            'carrer' => strtoupper('electronica'),
            'carnet' => 15047114,
            'email' => 'carlos.conto.336@gmail.com',
            'password' =>Hash::make('12345678'),
        ]);
    }
}
