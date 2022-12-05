@extends('plantilla')

    @section('titulo','Editar Usuario')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/editUsuario.png') !!}" alt="Editar Usuario" class="titulo__principal">
    </div>

    <div class="contenedor__forms">
        <form class="form" action="{{route('usuario.update', $consultaIdUsu->idUsuario)}}" method="post">
            @csrf 

            {!!method_field('PUT')!!}

                <div class="form__row">
                    <label class="form__label">Nombre</label>
                    <input type="text" class="form__input" name="txtNomb"  value="{{$consultaIdUsu->nombre}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtNomb')}}</p>
                <div class="form__row">
                    <label class="form__label">No.Empleado</label>
                    <input type="text" class="form__input" name="txtNoEmpleado"  value="{{$consultaIdUsu->noEmpleado}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtNoEmpleado')}}</p>
                <div class="form__row">
                    <label class="form__label">Contraseña</label>
                    <input type="password" class="form__input" name="txtContra"  value="{{$consultaIdUsu->contra}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtContra')}}</p>
                <div class="form__row">
                    <label class="form__label">Turno</label>
                    <select class="form__input"  name="txtTurno"  value="{{$consultaIdUsu->turno}}">
                        <option selected>{{$consultaIdUsu->turno}}</option>
                        <option value="Matutino">Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                    </select>
                </div>
                <p class="form__warning">{{ $errors->first('txtTurno')}}</p>
                <div class="form__row">
                    <label class="form__label">Rol</label>
                    <select class="form__input" name="txtRol"  value="{{old('txtRol')}}">
                        <option selected disabled = "disabled" value="">Selecciona una opción...</option>
                        <option value="{{$consultaIdUsu->rol}}" selected>
                            @if ($consultaIdUsu->rol == 1)
                            Administrador
                            @else
                            Vendedor
                            @endif 
                        </option>
                        <option value="1">Administrador</option>
                        <option value="2">Vendedor</option>
                    </select>
                </div>
                <p class="form__warning">{{ $errors->first('txtRol')}}</p>
                <div class="form__row">
                    <label class="form__label">Fecha de Nacimiento</label>
                    <input type="date" class="form__input" name="txtFechaNaci"  value="{{$consultaIdUsu->fehcaNac}}">
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
                    <img src="{!! asset('img/editar.png') !!}" alt="Editar" class="btn__form-img"><button type="submit" class="btn__form-editar">Editar</button>
                </div>
            </div>
        </form>
    </div>

    @endsection