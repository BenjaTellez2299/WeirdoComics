@extends('plantilla')

    @section('titulo','Añadir Articulo')

    @section('contenido')

    <div class="titulo__img">
        <img src="{!! asset('img/addArticulo.png') !!}" alt="Añadir Articulo" class="titulo__pic">
    </div>

    <div class="contenedor__forms">
        <form class="form" action="">
            <div class="form__row">
                <label class="form__label">Tipo</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Marca</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Descripcion</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Cantidad</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Precio Compra</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Fecha de Ingreso</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Proovedor</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__foot">
                <div class="btn__form">
                    <a href=""><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><button class="btn__form-salir">Salir</button></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/articulos.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <a href=""><img src="{!! asset('img/continuar.png') !!}" alt="Continuar" class="btn__form-img"><button type="submit" class="btn__form-añadir">Añadir</button></a>
                </div>
            </div>
        </form>
    </div>

    @endsection