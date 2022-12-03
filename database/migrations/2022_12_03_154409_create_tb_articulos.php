<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_articulos', function (Blueprint $table) {
            
            //PK
            $table->id('idArticulo');
            //FK
            $table->unsignedBigInteger('idproveedor');
            //DATOS
            $table->string('tipo');
            $table->string('marca');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->double('precioCompra');
            $table->double('precioVenta');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('idproveedor')->references('idProveedor')->on('tb_proveedores')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_articulos');
    }
};
