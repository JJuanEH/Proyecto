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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            
            $table->string('foto',200);
            $table->string('nombre_jugador',60);
            $table->string('edad',5);
            $table->string('numero',10);
            $table->string('ciudad',60);
            $table->string('nickname',60);
            $table->string('estatura',10);
            $table->string('equipo',60);

            $table->unsignedBigInteger('id_posicion');
            $table->foreign('id_posicion')->references('id')->on('posiciones')->onDelete('cascade')->onUpdate("cascade");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
};
