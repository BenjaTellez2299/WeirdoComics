@extends('plantilla')

    @section('titulo','Consultar Usuario')

    @section('contenido')

    <div class="titulo__img">
        <img src="{!! asset('img/consultarUsuario.png') !!}" alt="Consultar Usuario" class="titulo__pic">
    </div>

    <div class="table__contenedor">
        <table class="table__consultar">
            <thead>
                <th>Nombre</th>
                <th>No. Empleado</th>
                <th>Contraseña</th>
                <th>Turno</th>
                <th>Rol</th>
                <th>Fecha Nacimiento</th>
                <th>Editar</th>
                <th>Borrar</th>
            </thead>
            <tbody>
                <tr>
                    <td>Alfredo Madrigal Tercero</td>
                    <td>121059641</td>
                    <td>************</td>
                    <td>Matutino</td>
                    <td>Vendedor</td>
                    <td>25-08-2001</td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Gabriel Galván Niño</td>
                    <td>154756632</td>
                    <td>************</td>
                    <td>Vespertino</td>
                    <td>Encargado</td>
                    <td>23-09-2002</td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
                <tr>
                    <td>Benjamín Enríquez Téllez</td>
                    <td>121040060</td>
                    <td>************</td>
                    <td>Vespertino</td>
                    <td>Administrador</td>
                    <td>29-11-2000</td>
                    <td><a href=""><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href=""><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    

    @endsection