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
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('Asunto');
            $table->string('Correo');
            $table->string('Telefono');
            $table->string('Fecha');
            $table->string('Dias');
            $table->string('fecha_proximo_seguimiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguimientos');
    }
};
