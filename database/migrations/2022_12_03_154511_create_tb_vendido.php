<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_carrito', function (Blueprint $table) {
            
            //PK
            $table->id('idCarrito');
            //FK
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('venta_id');
            //DATOS
            $table->integer('status');
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('producto_id')->references('idProducto')->on('tb_productos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('venta_id')->references('idVenta')->on('tb_ventas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_vendido');
    }
};
