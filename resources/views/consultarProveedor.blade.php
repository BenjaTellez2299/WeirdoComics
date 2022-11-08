@extends('plantilla')

    @section('titulo','Consultar Proveedor')

    @section('contenido')

    <div class="titulo__img">
        <img src="{!! asset('img/consultarProve.png') !!}" alt="Consultar Proveedor" class="titulo__pic">
    </div>

    <div class="table__contenedor">
        <table class="table__consultar">
            <thead>
                <th>Empresa</th>
                <th>Dirección</th>
                <th>País</th>
                <th>Contacto</th>
                <th>No. Fijo</th>
                <th>No. Celular</th>
                <th>Correo</th>
                <th>Pedir</th>
                <th>Editar</th>
                <th>Borrar</th>
            </thead>
            <tbody>
                <tr>
                    <td>Juguetron</td>
                    <td>Quéretaro Centro</td>
                    <td>México</td>
                    <td>Juan Perez Arlón</td>
                    <td>596-1248 ext.25</td>
                    <td>442-693-2148</td>
                    <td>juanito@juguetron.com</td>
                    <td><a href=""><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Funko Store</td>
                    <td>San Juan del Rio</td>
                    <td>México</td>
                    <td>Jorge Martinez</td>
                    <td>015-2656 ext.5</td>
                    <td>442-693-8752</td>
                    <td>jorg@funkit.com</td>
                    <td><a href=""><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Mangas Shipping</td>
                    <td>Ciudad de México</td>
                    <td>México</td>
                    <td>Onikoro Suturo</td>
                    <td>000-0069 ext.0</td>
                    <td>55-692-60542</td>
                    <td>onichan@manguito.com</td>
                    <td><a href=""><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    

    @endsection