<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Integer;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => Str::random(6),
            'apellidoPaterno' => Str::random(10),
            'apellidoMaterno' => Str::random(10),
            'edad' => rand(25, 60),
            'email' => 'pacoAl@gmail.com',
            'rol_id' => 1,
            'cedula' => '6192430847',
            'password' => Hash::make('12345678')
        ],[
            'nombre' => Str::random(6),
            'apellidoPaterno' => Str::random(10),
            'apellidoMaterno' => Str::random(10),
            'edad' => rand(25, 60),
            'email' => 'marcoAl@gmail.com',
            'rol_id' => 2,
            'password' => Hash::make('12345678')
        ]);
    }
}
