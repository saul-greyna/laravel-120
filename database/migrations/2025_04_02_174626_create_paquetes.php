<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id('id_paq');
            $table->text('descripcion')->nullable();
            $table->string('remitente', 100);
            $table->unsignedBigInteger('id_camionero')->nullable();
            $table->unsignedBigInteger('id_lugar_destino')->nullable();
            $table->foreign('id_camionero')->references('id_camionero')->on('camioneros')->onDelete('set null');
            $table->foreign('id_lugar_destino')->references('id_lugar')->on('lugares')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paquetes');
    }
};
