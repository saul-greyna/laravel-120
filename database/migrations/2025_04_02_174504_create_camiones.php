<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('camiones', function (Blueprint $table) {
            $table->id('num_camion');
            $table->string('placas', 20)->unique();
            $table->string('tipo', 50);
            $table->unsignedBigInteger('id_camionero')->unique()->nullable();
            $table->foreign('id_camionero')->references('id_camionero')->on('camioneros')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('camiones');
    }
};
