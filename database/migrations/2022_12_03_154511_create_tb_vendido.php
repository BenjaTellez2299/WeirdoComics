<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_vendido', function (Blueprint $table) {
            
            //PK
            $table->id('idProducto');
            //FK
            $table->unsignedBigInteger('idproveedor');
            $table->unsignedBigInteger('idventa');
            //DATOS
            $table->string('nombre');
            $table->integer('cantidad');
            $table->double('precioCompra');
            $table->double('precioVenta');
            $table->timestamps();

            $table->foreign('idproveedor')->references('idProveedor')->on('tb_proveedores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idventa')->references('idVenta')->on('tb_ventas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_vendido');
    }
};