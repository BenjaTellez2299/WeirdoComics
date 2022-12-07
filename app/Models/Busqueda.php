<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busqueda extends Model
{
    //use HasFactory;

    protected $table="tb_productos";
    protected $primaryKey="idProducto";
    protected $fillable = [
        'nombre_tipo','edicion_marca','company_descripcion','categoria','cantidad','precioCompra','precioVenta','fecha'
    ];
}
