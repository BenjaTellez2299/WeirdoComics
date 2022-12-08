@extends('plantilla')

    @section('titulo','Inventario')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/inventarios.png') !!}" alt="Consultar Usuarios" class="titulo__principal">
    </div>

    <div class="contenedor__buscar">
        <form class="form__buscar" action="{{route('inventa.search')}}">
            <div class="form__row">
                <input type="text" class="form__input" name="txtBuscarNombre" required> <button type="submit"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></button>
            </div>
        </form>
    </div>

    <div class="table__contenedor">
        <table class="table__consultar">
            <thead>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Cantidad</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Fecha Ingreso</th>
                <th>Proveedor</th>
                <th>Realizar Pedido</th>
            </thead>
            <tbody>
                @foreach ($conProduct as $product)
                            <tr class="table__cero">
                                <td>{{$product->nombre_tipo}}</td>
                                <td>{{$product->cantidad}}</td>
                                <td>{{$product->precioCompra}}</td>
                                <td>{{$product->precioVenta}}</td>
                                <td>{{$product->fecha}}</td>
                                <td>{{$product->pro->empresa}}</td>
                                <td><a type="button" data-bs-toggle="modal" data-bs-target="#agregarPedido{{ $product->idProducto }}"><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                                @include('pedido')
                            </tr>     
                @endforeach
                @foreach ($conProducts as $product)
                            <tr>
                                <td>{{$product->nombre_tipo}}</td>
                                <td>{{$product->cantidad}}</td>
                                <td>{{$product->precioCompra}}</td>
                                <td>{{$product->precioVenta}}</td>
                                <td>{{$product->fecha}}</td>
                                <td>{{$product->pro->empresa}}</td>
                                <td><a type="button" data-bs-toggle="modal" data-bs-target="#agregarPedido{{ $product->idProducto }}"><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                                @include('pedido')
                            </tr>     
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection