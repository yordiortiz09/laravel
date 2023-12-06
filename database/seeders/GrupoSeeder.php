<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrupoModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GrupoModel::create([
            'grado' => rand(1,6),
            'seccion' => 'A',
        ]);
    }
}
