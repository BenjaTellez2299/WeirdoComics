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
                <th>Cantidad</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Fecha Ingreso</th>
                <th>Proveedor</th>
                <th>Realizar Pedido</th>
            </thead>
            <tbody>
                <tr>
                    <td>Gorra Batman: Caballero de la noche</td>
                    <td>3</td>
                    <td>180</td>
                    <td>400</td>
                    <td>25-05-2022</td>
                    <td>New Era</td>
                    <td><a href=""><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Nausicaä - Hayao Miyazaki</td>
                    <td>11</td>
                    <td>40</td>
                    <td>80</td>
                    <td>15-04-2022</td>
                    <td>Mangas Shipping</td>
                    <td><a href=""><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Llavero Funko Keychain The Batman</td>
                    <td>15</td>
                    <td>90</td>
                    <td>200</td>
                    <td>08-10-2022</td>
                    <td>Funko Store</td>
                    <td><a href=""><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                </tr>
            </tbody>
        </table>
    </div>

    @endsection