@extends('plantilla')

    @section('titulo','Añadir Comics')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible">
        <img src="{!! asset('img/addComic.png') !!}" alt="Añadir Comic" class="titulo__principal">
        <a href="{{route('consComic')}}" class="opcion"><img src="{!! asset('img/consultarComic.png') !!}" alt="Consultar Comics" class="titulo__opcion"></a>
    </div>

    <div class="contenedor__forms">
        <form class="form" action="">
            <div class="form__row">
                <label class="form__label">Nombre</label>
                <input type="text" class="form__input" name="txtNombre">
            </div>
            <div class="form__row">
                <label class="form__label">Edición</label>
                <input type="text" class="form__input" name="txtEdición">
            </div>
            <div class="form__row">
                <label class="form__label">Compañía</label>
                <input type="text" class="form__input" name="txtCompany">
            </div>
            <div class="form__row">
                <label class="form__label">Cantidad</label>
                <input type="text" class="form__input" name="txtCantidad">
            </div>
            <div class="form__row">
                <label class="form__label">Precio Compra</label>
                <input type="text" class="form__input" name="txtPreCompra">
            </div>
            <div class="form__row">
                <label class="form__label">Fecha de Ingreso</label>
                <input type="text" class="form__input" name="txtPreVenta">
            </div>
            <div class="form__row">
                <label class="form__label">Proovedor</label>
                <input type="text" class="form__input" name="txtProovedor">
            </div>
            <div class="form__foot">
                <div class="btn__form">
                    <a href="{{route('consComic')}}"><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><button class="btn__form-salir">Salir</button></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/comics.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <a href=""><img src="{!! asset('img/continuar.png') !!}" alt="Continuar" class="btn__form-img"><button type="submit" class="btn__form-añadir">Añadir</button></a>
                </div>
            </div>
        </form>
    </div>

    @endsection