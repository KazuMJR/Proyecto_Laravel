<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id('id_camion');
            $table->string('placa', 8);
            $table->string('codigo_interno', 8);
<<<<<<< HEAD
            $table->unsignedBigInteger('id_transporte');
=======
            $table->unsignedBigInteger('id_tranporte');
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004
            $table->unsignedBigInteger('id_marca');
            $table->string('color', 35);
            $table->date('modelo');
            $table->string('capacidad_toneladas', 45);
<<<<<<< HEAD
            $table->foreign('id_transporte')->references('id_transporte')->on('transporte')->onDelete('cascade');
=======
            $table->foreign('id_tranporte')->references('id_transporte')->on('transporte')->onDelete('cascade');
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004
            $table->foreign('id_marca')->references('id_marca')->on('marca')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camion');
    }
};
