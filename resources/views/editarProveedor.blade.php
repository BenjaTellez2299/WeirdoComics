@extends('plantilla')

    @section('titulo','Editar Proveedor')

    @section('contenido')


    <div class="titulo">
        <img src="{!! asset('img/editProve.png') !!}" alt="Editar Proveedor" class="titulo__principal">
    </div>

    <div class="contenedor__forms">
        <form class="form" action="{{route('editProvee')}}" method="post">
        @csrf 
            <div class="form__row">
                <label class="form__label">Empresa</label>
                <input type="text" class="form__input" name="txtEmpresa" value="{{old('txtEmpresa')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtEmpresa')}}</p>
            <div class="form__row">
                <label class="form__label">Dirrección</label>
                <input type="text" class="form__input" name="txtDirreccion" value="{{old('txtDirreccion')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtDirreccion')}}</p>
            <div class="form__row">
                <label class="form__label">País</label>
                <input type="text" class="form__input" name="txtPais" value="{{old('txtPais')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtPais')}}</p>
            <div class="form__row">
                <label class="form__label">Contacto</label>
                <input type="text" class="form__input" name="txtContacto" value="{{old('txtContacto')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtContacto')}}</p>
            <div class="form__row">
                <label class="form__label">Número Fijo</label>
                <input type="text" class="form__input"  name="txtNumFijo" value="{{old('txtNumFijo')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtNumFijo')}}</p>
            <div class="form__row">
                <label class="form__label">Número Celular</label>
                <input type="text" class="form__input" name="txtNumCelu" value="{{old('txtNumCelu')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtNumCelu')}}</p>
            <div class="form__row">
                <label class="form__label">Correo</label>
                <input type="text" class="form__input" name="txtCorreo" value="{{old('txtCorreo')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtCorreo')}}</p>
            <div class="form__foot">
                <div class="btn__form">
                    <a href="{{route('prov.index')}}"><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><a href="{{route('prov.index')}}" class="btn__form-salir">Salir</a></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/proveedores.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                <img src="{!! asset('img/editar.png') !!}" alt="Editar" class="btn__form-img"><button type="submit" class="btn__form-editar">Editar</button>
                </div>
            </div>
        </form>
    </div>

    @endsection