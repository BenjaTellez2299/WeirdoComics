@extends('plantilla')

    @section('titulo','Ventas')

    @section('contenido')

    @if (session()->has('venta'))
    <?php $venta = session()->get('venta')?>
      {!!"<script> Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Venta registrada con exito; {$venta}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    <div class="titulo">
        <div class="opcion"><a href="{{route('report')}}" class="opcion__a"><img src="{!! asset('img/reporte.png') !!}" alt="Reporte Ventas" class="titulo__opcionVen"></a></div>
        <img src="{!! asset('img/ventas.png') !!}" alt="Inventario" class="titulo__principalVen">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible"> 
    </div>

    <div class="contenedor__search">

        <form class="form__search" action="">
            <div class="form__row">
                <input type="text" class="form__input" placeholder="BUSCAR PRODUCTO"> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>

        <form class="form__search__img" action="">
            <div class="ventas__img">
                <img src="{!! asset('img/carrito.png') !!}" alt="Inventario" class="titulo__principal">
            </div>
        </form>

    </div>

    <div class="contenedor__ventas">
        <div class="contenedor__ventas__left">
            <div class="table__ventas">
                <table class="table__ventas__prod">
                    <thead>
                        <th>Nombre</th>
                        <th>Precio Venta</th>
                        <th>Agregar</th>
                    </thead>
                    <tbody>
                        @foreach ($conProducts as $product)
                            <tr>
                                <td>{{$product->nombre_tipo}}</td>
                                <td>{{$product->precioVenta}}</td>
                                <td><a type="button" data-bs-toggle="modal" data-bs-target="#agregarProducto{{ $product->idProducto }}"><img src="{!! asset('img/agregar.png') !!}" alt="Editar" class="table__img"></a></td>
                                @include('agregarCarrito') 
                            </tr>     
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>    

        <div class="contenedor__ventas__right">
            <div class="table__ventas">
                <table class="table__ventas__ventas">
                    <thead>
                        <th>Nombre</th>
                        <th>Precio Venta</th>
                        <th>Cantidad</th>
                    </thead>
                    <tbody>
                        @foreach ($conCar as $carrito)
                            <tr>
                                <td>{{$carrito->pro->nombre_tipo}}</td>
                                <td>{{$carrito->pro->precioVenta}}</td>
                                <td>{{$carrito->cantidad}}</td>
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
    </div>

    <div class="contenedor__ventas">
        <div class="contenedor__ventas__left">

        </div>

        <div class="contenedor__ventas__right">
            <div class="btn__vender">
                <a><img src="{!! asset('img/exportar.png') !!}" class="btn__vender-img"><a href="{{route('venta')}}" class="btn__vender-compra">Comprar</a></a>
            </div>
        </div>
    </div>


    @endsection