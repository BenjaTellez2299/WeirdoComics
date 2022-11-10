@extends('plantilla')

    @section('titulo','Añadir Usuario')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible">
        <img src="{!! asset('img/addUsuario.png') !!}" alt="Añadir Usuario" class="titulo__principal">
        <a href="{{route('consUsu')}}" class="opcion"><img src="{!! asset('img/consultarUsuario.png') !!}" alt="Consultar Usuarios" class="titulo__opcion"></a>
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
                    <a href=""><img src="{!! asset('img/continuar.png') !!}" alt="Continuar" class="btn__form-img"><button type="submit" class="btn__form-añadir">Añadir</button></a>
                </div>
            </div>
        </form>
    </div>

    @endsection