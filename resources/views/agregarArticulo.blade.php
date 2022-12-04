@extends('plantilla')

    @section('titulo','Añadir Articulo')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible">
        <img src="{!! asset('img/addArticulo.png') !!}" alt="Añadir Articulo" class="titulo__principal">
        <a href="{{route('articulo.index')}}" class="opcion"><img src="{!! asset('img/consultarArticulo.png') !!}" alt="Consultar Articulo" class="titulo__opcion"></a>
    </div>

    <div class="contenedor__forms">
        <form class="form" action="{{route('articulo.store')}}" method="post">
        @csrf 
            <div class="form__row">
                <label class="form__label">Tipo</label>
                <input type="text" class="form__input"  name="txtTipo" value="{{old('txtTipo')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtTipo')}}</p>
            <div class="form__row">
                <label class="form__label">Marca</label>
                <input type="text" class="form__input "  name="txtMarca" value="{{old('txtMarca')}}">  
            </div>
            <p class="form__warning">{{ $errors->first('txtMarca')}}</p>
            <div class="form__row">
                <label class="form__label">Descripcion</label>
                <input type="text" class="form__input"  name="txtDescripcion" value="{{old('txtDescripcion')}}">
            </div>
            <p class="form__warning">{{ $errors->first('txtDescripcion')}}</p>
            <div class="form__row">
                <label class="form__label">Cantidad</label>
                <input type="text" class="form__input"  name="txtCantidad" value="{{old('txtCantidad')}}">  
            </div>
            <p class="form__warning">{{ $errors->first('txtCantidad')}}</p>
            <div class="form__row">
                <label class="form__label">Precio Compra</label>
                <input type="text" class="form__input"  name="txtPrecioCom" value="{{old('txtPrecioCom')}}"> 
            </div>
            <p class="form__warning">{{ $errors->first('txtPrecioCom')}}</p>
            <div class="form__row">
                <label class="form__label">Proveedor</label>
                <select class="form__input"  name="txtProveedor"  value="{{old('txtProveedor')}}">
                    <option selected>Selecciona una opción...</option>
                    @foreach($consultaProve as $consulta)
                        <option value="{{$consulta->idProveedor}}">{{$consulta->empresa}}</option>
                    @endforeach
                </select>
            </div>
            <p class="form__warning">{{ $errors->first('txtTurno')}}</p>

            <div class="form__foot">
                <div class="btn__form">
                <a href="{{route('articulo.index')}}"><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><a href="{{route('articulo.index')}}" class="btn__form-salir">Salir</a></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/articulos.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <img src="{!! asset('img/continuar.png') !!}" alt="Continuar" class="btn__form-img"><button type="submit" class="btn__form-añadir">Añadir</button>
                </div>
            </div>
        </form>
    </div>

    @endsection