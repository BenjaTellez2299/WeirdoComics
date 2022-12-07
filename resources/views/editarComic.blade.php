@extends('plantilla')

    @section('titulo','Editar Comics')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/editComic.png') !!}" alt="Editar Comic" class="titulo__principal">
    </div>

    <div class="contenedor__forms">
        <form class="form" action="{{route('comic.update', $consultaIdCom->idProducto')}}" method="POST">
            @csrf

            {!!method_field('PUT')!!}
            
                <div class="form__row">
                    <label class="form__label">Nombre</label>
                    <input type="text" class="form__input" name="txtNombre" value="{{$consultaIdCom->nombre_tipo}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtNombre')}}</p>
                <div class="form__row">
                    <label class="form__label">Edición</label>
                    <input type="number" class="form__input" name="txtEdicion" value="{{$consultaIdCom->edicion_marca}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtEdicion')}}</p>
                <div class="form__row">
                    <label class="form__label">Compañía</label>
                    <input type="text" class="form__input" name="txtCompany" value="{{$consultaIdCom->company_descripcion}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtCompany')}}</p>
                <div class="form__row">
                    <label class="form__label">Cantidad</label>
                    <input type="number" class="form__input" name="txtCantidad" value="{{$consultaIdCom->cantidad}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtCantidad')}}</p>
                <div class="form__row">
                    <label class="form__label">Precio Compra</label>
                    <input type="double" class="form__input" name="txtPreCompra" value="{{$consultaIdCom->precioCompra}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtPreCompra')}}</p>
                <div class="form__row">
                    <label class="form__label">Proovedor</label>
                    <select class="form__input"  name="txtProveedor"  value="{{old('txtProveedor')}}">
                        <option selected disabled = "disabled" value="">Selecciona al Proveedor</option>
                        @foreach ($conProvs as $proveedores)
                        <option value="{{$proveedores->idProveedor}}"
                            @if ($proveedores->idProveedor == $consultaIdCom->proveedor_id) 
                            selected  
                            @endif>
                            {{$proveedores->empresa}}</option>    
                        @endforeach
                    </select>
                </div>
                <p class="form__warning">{{ $errors->first('txtProveedor')}}</p>
            <div class="form__foot">
                <div class="btn__form">
                    <a href="{{route('comic.index')}}"><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><a href="{{route('comic.index')}}" class="btn__form-salir">Salir</a></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/comics.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <img src="{!! asset('img/editar.png') !!}" alt="Editar" class="btn__form-img"><button type="submit" class="btn__form-editar">Editar</button>
                </div>
            </div>
        </form>
    </div>

    @endsection