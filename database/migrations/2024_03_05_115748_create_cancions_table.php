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
        Schema::create('cancions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('artista', 255);
            $table->string('discografia', 255);
            $table->string('genero', 255);
            $table->date('fecha_lanzamiento');
            $table->float('precio', 10, 2);
            $table->float('puntuacion', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancions');
    }
};
