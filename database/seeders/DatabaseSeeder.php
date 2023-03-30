<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Area::insert([[
            'name' => 'admin',
            'display_name' => 'Aministrador',
            'description' => 'Puede administrar a los usuarios registrados'
        ], [
            'name' => 'tech',
            'display_name' => 'Técnico',
            'description' => 'Puede únicamente ver la lista de los usuarios registrados'
        ]]);

        User::insert([[
            'name' => 'Alexis Olán',
            'email' => 'alexoonizq@gmail.com',
            'area_id' => 2,
            // 'role' => 1,
            'password' => Hash::make('password')
        ], [
            'name' => 'Julio Vásquez',
            'email' => 'jvasquez@outlook.com',
            'area_id' => 1,
            // 'role' => 0,
            'password' => Hash::make('password')

        ]]);
    }
}
