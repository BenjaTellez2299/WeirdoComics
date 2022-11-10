@extends('plantilla')

    @section('titulo','Ventas')

    @section('contenido')

    <div class="titulo__img">
        <img src="{!! asset('img/ventas.png') !!}" alt="Inventario" class="titulo__pic">
    </div>

    <div class="contenedor__buscar">
        <form class="form__buscar" action="">
            <div class="form__row">
                <input type="text" class="form__input"> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>
    </div>

    <div class="table__contenedor">
        
    </div>

    @endsection