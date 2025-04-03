<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('lugares', function (Blueprint $table) {
            $table->id('id_lugar');
            $table->string('nombre', 100);
            $table->string('direccion', 255);
            $table->string('cp', 10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lugares');
    }
};
