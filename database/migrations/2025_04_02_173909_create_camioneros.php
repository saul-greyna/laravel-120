<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('camioneros', function (Blueprint $table) {
            $table->id('id_camionero');
            $table->string('nombre', 50);
            $table->string('apellidos', 100);
            $table->string('direccion', 255)->nullable();
            $table->decimal('salario', 10, 2)->nullable();
            $table->string('licencia', 50)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('camioneros');
    }
};
