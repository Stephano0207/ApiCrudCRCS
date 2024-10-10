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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
           $table->string( 'nombres',80);
           $table->string( 'apellidos',80);
           $table->string( 'direccion',80);
           $table->string( 'zona',20);
           $table->string( 'sexo',1);
           $table->unsignedBigInteger( 'edad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
