<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nombre");
            $table->string('apellidos', 50)->default(null)->nullable();
            $table->integer('edad');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('c_i');
            $table->string('correo');
            $table->string('profesion');
            $table->date('fecha_nac');
            $table->string('genero');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
