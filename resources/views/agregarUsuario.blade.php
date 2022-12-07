@extends('plantilla')

    @section('titulo','Añadir Usuario')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible">
        <img src="{!! asset('img/addUsuario.png') !!}" alt="Añadir Usuario" class="titulo__principal">
        <a href="{{route('usuario.index')}}" class="opcion"><img src="{!! asset('img/consultarUsuario.png') !!}" alt="Consultar Usuarios" class="titulo__opcion"></a>
    </div>

    <div class="contenedor__forms">
        <form class="form" action="{{route('usuario.store')}}" method="post">
        @csrf 
            <div class="form__row">
                <label class="form__label">Nombre</label>
                <input type="text" class="form__input" name="txtNomb"  value="{{old('txtNomb')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtNomb')}}</p>
            <div class="form__row">
                <label class="form__label">No.Empleado</label>
                <input type="number" class="form__input" name="txtNoEmpleado"  value="{{old('txtNoEmpleado')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtNoEmpleado')}}</p>
            <div class="form__row">
                <label class="form__label">Contraseña</label>
                <input type="password" class="form__input" name="txtContra"  value="{{old('txtContra')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtContra')}}</p>
            <div class="form__row">
                <label class="form__label">Turno</label>
                <select class="form__input"  name="txtTurno"  value="{{old('txtTurno')}}">
                    <option selected>Selecciona una opción...</option>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                </select>
            </div>
            <p class="form__warning">{{ $errors->first('txtTurno')}}</p>
            
            <div class="form__row">
                <label class="form__label">Rol</label>
                <select class="form__input" name="txtRol"  value="{{old('txtRol')}}">
                    <option selected>Selecciona una opción...</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Vendedor">Vendedor</option>
                </select>
            </div>
            <p class="form__warning">{{ $errors->first('txtRol')}}</p>
            <div class="form__row">
                <label class="form__label">Fecha de Nacimiento</label>
                <input type="date" class="form__input" name="txtFechaNaci"  value="{{old('txtFechaNaci')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtFechaNaci')}}</p>
           
            <div class="form__foot">
                <div class="btn__form">
                 <a href="{{route('usuario.index')}}"><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><a href="{{route('usuario.index')}}" class="btn__form-salir">Salir</a></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/usuarios.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <img src="{!! asset('img/continuar.png') !!}" alt="Continuar" class="btn__form-img"><button type="submit" class="btn__form-añadir">Añadir</button>
                </div>
            </div>
        </form>
    </div>

    @endsection