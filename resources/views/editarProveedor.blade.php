@extends('plantilla')

    @section('titulo','Editar Proveedor')

    @section('contenido')

    <div class="titulo__img">
        <img src="{!! asset('img/editProve.png') !!}" alt="Añadir Proveedor" class="titulo__pic">
    </div>

    <div class="contenedor__forms">
        <form class="form" action="">
            <div class="form__row">
                <label class="form__label">Empresa</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Dirrección</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">País</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Contacto</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Número Fijo</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Número Celular</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Correo</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__foot">
                <div class="btn__form">
                    <a href=""><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><button class="btn__form-salir">Salir</button></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/proveedores.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <a href=""><img src="{!! asset('img/editar.png') !!}" alt="Editar" class="btn__form-img"><button type="submit" class="btn__form-editar">Editar</button></a>
                </div>
            </div>
        </form>
    </div>

    @endsection