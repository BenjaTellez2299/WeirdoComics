<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_ventas', function (Blueprint $table) {
            
            //PK
            $table->id('idVenta');
            //FK
            $table->unsignedBigInteger('usuario_id');
            //DATOS
            $table->date('fecha');
            $table->integer('noProductos');
            $table->double('total');
            $table->timestamps();

            $table->foreign('usuario_id')->references('idUsuario')->on('tb_usuarios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_ventas');
    }
};
