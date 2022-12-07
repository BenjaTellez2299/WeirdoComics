@extends('plantilla')

    @section('titulo','Editar Articulo')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/editArticulo.png') !!}" alt="Añadir Articulo" class="titulo__principal">
    </div>

    <div class="contenedor__forms">
        <form class="form" action="{{route('articulo.update', $consultaIdArt->idProducto)}}" method="post">
            @csrf 

            {!!method_field('PUT')!!}
            
                <div class="form__row">
                    <label class="form__label">Tipo</label>
                    <input type="text" class="form__input"  name="txtTipo" value="{{$consultaIdArt->nombre_tipo}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtTipo')}}</p>
                <div class="form__row">
                    <label class="form__label">Marca</label>
                    <input type="text" class="form__input "  name="txtMarca" value="{{$consultaIdArt->edicion_marca}}">  
                </div>
                <p class="form__warning">{{ $errors->first('txtMarca')}}</p>
                <div class="form__row">
                    <label class="form__label">Descripcion</label>
                    <input type="text" class="form__input"  name="txtDescripcion" value="{{$consultaIdArt->company_descripcion}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtDescripcion')}}</p>
                <div class="form__row">
                    <label class="form__label">Cantidad</label>
                    <input type="text" class="form__input"  name="txtCantidad" value="{{$consultaIdArt->cantidad}}">  
                </div>
                <p class="form__warning">{{ $errors->first('txtCantidad')}}</p>
                <div class="form__row">
                    <label class="form__label">Precio Compra</label>
                    <input type="text" class="form__input"  name="txtPrecioCom" value="{{$consultaIdArt->precioCompra}}"> 
                </div>
                <p class="form__warning">{{ $errors->first('txtPrecioCom')}}</p>
                <div class="form__row">
                    <label class="form__label">Proovedor</label>
                    <select class="form__input"  name="txtProveedor"  value="{{old('txtProveedor')}}">
                        <option selected disabled = "disabled" value="">Selecciona al Proveedor</option>
                        @foreach ($conProvs as $proveedores)
                        <option value="{{$proveedores->idProveedor}}"
                            @if ($proveedores->idProveedor == $consultaIdArt->proveedor_id) 
                            selected  
                            @endif>
                            {{$proveedores->empresa}}</option>    
                        @endforeach
                    </select>
                </div>
                <p class="form__warning">{{ $errors->first('txtProveedor')}}</p>
            <div class="form__foot">
                <div class="btn__form">
                    <a href="{{route('articulo.index')}}"><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><a href="{{route('articulo.index')}}" class="btn__form-salir">Salir</a></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/articulos.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <img src="{!! asset('img/editar.png') !!}" alt="Editar" class="btn__form-img"><button type="submit" class="btn__form-editar">Editar</button>
                </div>
            </div>
        </form>
    </div>

    @endsection