<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MateriaGrupoModel;

class MateriaGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MateriaGrupoModel::create([
            'fk_materia' => 1,
            'fk_grupo' => 1
        ]);
    }
}
