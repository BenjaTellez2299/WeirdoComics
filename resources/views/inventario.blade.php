@extends('plantilla')

    @section('titulo','Añadir Comics')

    @section('contenido')

    <div class="titulo__img">
        <img src="{!! asset('img/inventarios.png') !!}" alt="Inventario" class="titulo__pic">
    </div>

    <div class="contenedor__buscar">
        <form class="form__buscar" action="">
            <div class="form__row">
                <input type="text" class="form__input"> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>
    </div>

    <div class="contenedor__forms">
        <form class="form" action="">
            <div class="form__row">
                <label class="form__label">Nombre</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Edición</label>
                <input type="text" class="form__input">
            </div>

            <div class="form__foot">
                <div class="form__img">
                    <img src="{!! asset('img/inventario.png') !!}" alt="Inventario" class="form__img-inv">
                </div>
            </div>
        </form>
    </div>

    @endsection