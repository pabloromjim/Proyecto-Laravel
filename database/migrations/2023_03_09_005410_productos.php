<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->string("desarrollador");
            $table->text("descripcion");
            $table->date("fecha_lanzamiento");
            $table->string("plataforma");
            $table->string("genero");
            $table->integer("valoracion")->default(0);
            $table->string("clave");
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('productos');

    }
};
