@extends('plantilla')

    @section('titulo','Inventario')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/inventarios.png') !!}" alt="Consultar Usuarios" class="titulo__principal">
    </div>

    <div class="contenedor__buscar">
        <form class="form__buscar" action="">
            <div class="form__row">
                <input type="text" class="form__input"> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
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
                @foreach($consultaInventario as $consulta)
                <tr>
                    <td>{{$consulta->nombre_tipo}}</td>
                    <td>{{$consulta->categoria}}</td>
                    <td>{{$consulta->cantidad}}</td>
                    <td>{{$consulta->precioCompra}}</td>
                    <td>{{$consulta->precioVenta}}</td>
                    <td>{{$consulta->fecha}}</td>
                    <td>{{$consulta->empresa}}</td>
                    <td><a href="{{route('realip')}}"><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection