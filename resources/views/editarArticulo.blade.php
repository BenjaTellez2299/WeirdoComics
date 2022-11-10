@extends('plantilla')

    @section('titulo','Editar Articulo')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/editArticulo.png') !!}" alt="Añadir Articulo" class="titulo__principal">
    </div>

    <div class="contenedor__forms">
        <form class="form" action="{{route('editArtics')}}" method="post">
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
                    <label class="form__label">Precio Venta</label>
                    <input type="text" class="form__input" name="txtPreVenta" value="{{old('txtPreVenta')}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtPreVenta')}}</p>
                <div class="form__row">
                    <label class="form__label">Fecha de Ingreso</label>
                    <input type="date" class="form__input"  name="txtFechaIngre" value="{{old('txtFechaIngre')}}">
                </div>
                <p class="form__warning">{{ $errors->first('txtFechaIngre')}}</p>
                <div class="form__row">
                    <label class="form__label">Proovedor</label>
                    <input type="text" class="form__input"  name="txtProveedor" value="{{old('txtProveedor')}}">   
                </div>
                <p class="form__warning">{{ $errors->first('txtProveedor')}}</p>
            <div class="form__foot">
                <div class="btn__form">
                    <a href=""><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><button class="btn__form-salir">Salir</button></a>
                </div>
                <div class="form__img">
                    <img src="{!! asset('img/articulos.png') !!}" alt="Comics" class="form__img-pic">
                </div>
                <div class="btn__form">
                    <a href=""><img src="{!! asset('img/editar.png') !!}" alt="Editar" class="btn__form-img"><button type="submit" class="btn__form-editar">Editar</button></a>
                </div>
            </div>
        </form>
    </div>

    @endsection