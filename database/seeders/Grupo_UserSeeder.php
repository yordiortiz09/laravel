<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrupoUsersModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Grupo_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GrupoUsersModel::create([
            'fk_grupo' => 1,
            'fk_users' => 1
        ]);

        GrupoUsersModel::create([
            'fk_grupo' => 1,
            'fk_users' => 2
        ]);
    }
}
