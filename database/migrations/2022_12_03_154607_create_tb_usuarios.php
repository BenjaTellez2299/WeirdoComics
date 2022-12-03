<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            
            //PK
            $table->id('idUsuario');
            //DATOS
            $table->string('nombre');
            $table->integer('noEmpleado');
            $table->string('contra');
            $table->string('turno');
            $table->string('rol');
            $table->date('fehcaNac');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_usuarios');
    }
};
