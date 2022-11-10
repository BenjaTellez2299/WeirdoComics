@extends('plantilla')

    @section('titulo','Editar Usuario')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/editUsuario.png') !!}" alt="Editar Usuario" class="titulo__principal">
    </div>

    <div class="contenedor__forms">
        <form class="form" action="{{route('editUse')}}" method="post">
            @csrf 
                <div class="form__row">
                    <label class="form__label">Nombre</label>
                    <input type="text" class="form__input" name="txtNomb"  value="{{old('txtNomb')}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtNomb')}}</p>
                <div class="form__row">
                    <label class="form__label">No.Empleado</label>
                    <input type="text" class="form__input" name="txtNoEmpleado"  value="{{old('txtNoEmpleado')}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtNoEmpleado')}}</p>
                <div class="form__row">
                    <label class="form__label">Contraseña</label>
                    <input type="password" class="form__input" name="txtContra"  value="{{old('txtContra')}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtContra')}}</p>
                <div class="form__row">
                    <label class="form__label">Turno</label>
                    <input type="text" class="form__input" name="txtTurno"  value="{{old('txtTurno')}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtTurno')}}</p>
                <div class="form__row">
                    <label class="form__label">Rol</label>
                    <input type="text" class="form__input" name="txtRol"  value="{{old('txtRol')}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtRol')}}</p>
                <div class="form__row">
                    <label class="form__label">Fecha de Nacimiento</label>
                    <input type="date" class="form__input" name="txtFechaNaci"  value="{{old('txtFechaNaci')}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtFechaNaci')}}</p>
           
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