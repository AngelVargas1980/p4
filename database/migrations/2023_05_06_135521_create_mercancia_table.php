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
        Schema::create('mercancias', function (Blueprint $table) {

            $table->id();
            $table->string('codigo');
            $table->string('nombre', 45);
            $table->unsignedBigInteger('id_tipo_mercancia')->nullable();

//            $table->foreign('id_tipo_mercancia')->references('id')->on('tipo_mercancias')->onDelete('no action');

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('mercancia');
    }
};
