<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Grupo_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfesorModel::create([
            'fk_grupo' => 1,
            'fk_users' => 1
        ],[
            'fk_grupo' => 1,
            'fk_users' => 2
        ]);
    }
}
