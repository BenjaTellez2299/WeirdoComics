@extends('plantilla')

    @section('titulo','Editar Usuario')

    @section('contenido')

    <div class="titulo__img">
        <img src="{!! asset('img/editUsuario.png') !!}" alt="Editar Usuario" class="titulo__pic">
    </div>

    <div class="contenedor__forms">
        <form class="form" action="">
            <div class="form__row">
                <label class="form__label">Nombre</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">No.Empleado</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Contraseña</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Turno</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Rol</label>
                <input type="text" class="form__input">
            </div>
            <div class="form__row">
                <label class="form__label">Fecha de Nacimiento</label>
                <input type="text" class="form__input">
            </div>
           
            <div class="form__foot">
                <div class="btn__form">
                    <a href=""><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><button class="btn__form-salir">Salir</button></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/usuarios.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <a href=""><img src="{!! asset('img/editar.png') !!}" alt="Editar" class="btn__form-img"><button type="submit" class="btn__form-editar">Editar</button></a>
                </div>
            </div>
        </form>
    </div>

    @endsection