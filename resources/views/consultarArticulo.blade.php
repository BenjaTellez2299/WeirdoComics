@extends('plantilla')

    @section('titulo','Consultar Articulo')

    @section('contenido')

    <div class="titulo__img">
        <img src="{!! asset('img/consultarArticulo.png') !!}" alt="Consultar Articulo" class="titulo__pic">
    </div>

    <div class="table__contenedor">
        <table class="table__consultar">
            <thead>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Descripción</th>
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
                    <td>Gorra Batman: Caballero de la noche</td>
                    <td>DADIVIT</td>
                    <td>Edición Especial</td>
                    <td>3</td>
                    <td>180</td>
                    <td>400</td>
                    <td>25-05-2022</td>
                    <td>New Era</td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Figura de Acción Aquaman</td>
                    <td>Mattel</td>
                    <td>Masters of the Universe</td>
                    <td>4</td>
                    <td>280</td>
                    <td>500</td>
                    <td>21-05-2022</td>
                    <td>Juguetron</td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Llavero Funko Keychain The Batman</td>
                    <td>Funko</td>
                    <td>The Batman</td>
                    <td>15</td>
                    <td>90</td>
                    <td>200</td>
                    <td>08-10-2022</td>
                    <td>Funko Store</td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    

    @endsection