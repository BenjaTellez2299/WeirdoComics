@extends('plantilla')

    @section('titulo','Añadir Comics')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible">
        <img src="{!! asset('img/addComic.png') !!}" alt="Añadir Comic" class="titulo__principal">
        <a href="{{route('comic.index')}}" class="opcion"><img src="{!! asset('img/consultarComic.png') !!}" alt="Consultar Comics" class="titulo__opcion"></a>
    </div>

    <div class="contenedor__forms">
        <form class="form" action="{{route('comic.store')}}" method="POST">
            @csrf
            <div class="form__row">
                <label class="form__label">Nombre</label>
                <input type="text" class="form__input" name="txtNombre" value="{{old('txtNombre')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtNombre')}}</p>
            <div class="form__row">
                <label class="form__label">Edición</label>
                <input type="number" class="form__input" name="txtEdicion" value="{{old('txtEdicion')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtEdicion')}}</p>
            <div class="form__row">
                <label class="form__label">Compañía</label>
                <input type="text" class="form__input" name="txtCompany" value="{{old('txtCompany')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtCompany')}}</p>
            <div class="form__row">
                <label class="form__label">Cantidad</label>
                <input type="number" class="form__input" name="txtCantidad" value="{{old('txtCantidad')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtCantidad')}}</p>
            <div class="form__row">
                <label class="form__label">Precio Compra</label>
                <input type="double" class="form__input" name="txtPreCompra" value="{{old('txtPreCompra')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtPreCompra')}}</p>
            <div class="form__row">
                <label class="form__label">Proveedor</label>
                <select class="form__input"  name="txtProveedor"  value="{{old('txtProveedor')}}">
                    <option selected>Selecciona una opción...</option>
                    @foreach($consultaProve as $consulta)
                        <option value="{{$consulta->idProveedor}}">{{$consulta->empresa}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form__foot">
                <div class="btn__form">
                    <a href="{{route('comic.index')}}"><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><a href="{{route('comic.index')}}" class="btn__form-salir">Salir</a></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/comics.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <img src="{!! asset('img/continuar.png') !!}" alt="Continuar" class="btn__form-img"><button type="submit" class="btn__form-añadir">Añadir</button>
                </div>
            </div>
        </form>
    </div>

    @endsection