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
        Schema::create('camions', function (Blueprint $table) {
            $table->id();
            $table->string('placa_camion', 6);
            $table->string('marca', 25);
            $table->string('color', 25);
            $table->year('modelo');
            $table->integer('capacidad_toneladas');
            $table->unsignedBigInteger('transporte_codigo')->nullable();
            //$table->foreign('transporte_codigo')->references('id')->on('transportes')->onDelete('no action');
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
