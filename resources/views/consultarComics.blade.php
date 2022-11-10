@extends('plantilla')

    @section('titulo','Consultar Comics')

    @section('contenido')

    @if (session()->has('confirm'))
    <?php $comic = session()->get('comic')?>
      {!!"<script> Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Se ha agregado un nuevo comic; {$comic}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    @if (session()->has('edita'))
    <?php $comic = session()->get('comic')?>
      {!!"<script> Swal.fire({
        position: 'top',
        icon: 'info',
        title: 'Se ha editado el comic; {$comic}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    @if (session()->has('elimina'))
    <?php $comic = session()->get('comic')?>
      {!!"<script> Swal.fire({
        position: 'top',
        icon: 'warning',
        title: 'Se ha eliminado el comic',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    <div class="titulo">
        <div class="opcion"><a href="{{route('addComic')}}" class="opcion__a"><img src="{!! asset('img/addComic.png') !!}" alt="Añadir Comics" class="titulo__opcion"></a></div>
        <img src="{!! asset('img/consultarComic.png') !!}" alt="Consultar Comics" class="titulo__principal">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible">
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
                    <td><a href="{{route('editComic')}}"><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href="{{route('delComic')}}"><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
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
                    <td><a href="{{route('editComic')}}"><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href="{{route('delComic')}}"><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
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
                    <td><a href="{{route('editComic')}}"><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a href="{{route('delComic')}}"><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    

    @endsection