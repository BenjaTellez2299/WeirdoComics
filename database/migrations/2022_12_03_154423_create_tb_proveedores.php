<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_proveedores', function (Blueprint $table) {

            //PK
            $table->id('idProveedor');
            //DATOS
            $table->string('empresa');
            $table->string('dirección');
            $table->string('pais');
            $table->string('contacto');
            $table->integer('noFijo');
            $table->integer('noCelu');
            $table->string('correo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_proveedores');
    }
};
