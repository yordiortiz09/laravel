<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calificacion_profesor_alumno', function (Blueprint $table) {
            $table->id();
            $table->double("fk_calificacion")->constrained('calificacion');
            $table->foreignId('fk_materia')->constrained('materia');
            $table->foreignId('fk_profesor')->constrained('users');
            $table->foreignId('fk_alumno')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificacion_profesor_alumno');
    }
};
