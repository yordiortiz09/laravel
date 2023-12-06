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
        Schema::create('materia_grupo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_materia')->constrained('materia');
            $table->foreignId('fk_grupo')->constrained('grupo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_grupo');
    }
};
