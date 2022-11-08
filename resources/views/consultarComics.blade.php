@extends('plantilla')

    @section('titulo','Consultar Comics')

    @section('contenido')

    <div class="titulo__img">
        <img src="{!! asset('img/consultarComic.png') !!}" alt="Añadir Comic" class="titulo__pic">
    </div>

    <div class="table__contenedor">
        <table class="table__consultar">
            <thead>
                <th>Nombre</th>
                <th>Edición</th>
                <th>Compañía</th>
                <th>Cantidad</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Fecha Ingreso</th>
                <th>Proveedor</th>
                <th>Editar</th>
                <th>Borrar</th>
            </thead>
            <tbody>
                <tr>
                    <td>Batman: El regreso del caballero oscuro</td>
                    <td>10ma</td>
                    <td>DC</td>
                    <td>5</td>
                    <td>50</td>
                    <td>100</td>
                    <td>08-09-2022</td>
                    <td>USA Comics</td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Spiderman: La última cacería de Kraven</td>
                    <td>9na</td>
                    <td>Marvel</td>
                    <td>8</td>
                    <td>55</td>
                    <td>95</td>
                    <td>30-07-2022</td>
                    <td>USA Comics</td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Nausicaä - Hayao Miyazaki</td>
                    <td>4ta</td>
                    <td>Ghibli</td>
                    <td>11</td>
                    <td>40</td>
                    <td>80</td>
                    <td>15-04-2022</td>
                    <td>Mangas Shipping</td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    

    @endsection