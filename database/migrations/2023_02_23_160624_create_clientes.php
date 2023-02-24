<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
        Schema::create('clientes', function (Blueprint $table) {
        $table->id('codigo')->unique(); 
        $table->string('nombre',30);
        $table->string('password',30); //varchar de 255 caracteres
        $table->string('email'); //varchar que permite nulos
        $table->timestamp('fecha_creacion_cuenta'); //tipo fecha
        $table->integer('puntos')->default(0); //texto de más de 255 caracteres
            // dsds
       });}
       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
