<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_productos', function (Blueprint $table) {
            
            //PK
            $table->id('idProducto');
            //FK
            $table->unsignedBigInteger('proveedor_id');
            //DATOS
            $table->string('nombre_tipo');
            $table->string('edicion_marca');
            $table->string('company_descripcion');
            $table->string('categoria');
            $table->integer('cantidad');
            $table->double('precioCompra');
            $table->double('precioVenta');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('proveedor_id')->references('idProveedor')->on('tb_proveedores')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_articulos');
    }
};
