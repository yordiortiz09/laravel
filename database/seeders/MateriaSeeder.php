<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MateriaModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MateriaModel::create([
            'nombre' => 'Algebra',
        ]);
    }
}
