@extends('plantilla')

    @section('titulo','Consultar Comics')

    @section('contenido')

    @if (session()->has('confirm'))
    <?php $comic = session()->get('txtNombre')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Se ha agregado un nuevo comic; {$comic}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    @if (session()->has('edit'))
    <?php $comic = session()->get('txtNombre')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'info',
        title: 'Se ha editado el comic; {$comic}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    @if (session()->has('delete'))
    <?php $comic = session()->get('txtNombre')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'Se ha eliminado el comic',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    <div class="titulo">
        <div class="opcion"><a href="{{route('comic.create')}}" class="opcion__a"><img src="{!! asset('img/addComic.png') !!}" alt="Añadir Comics" class="titulo__opcion"></a></div>
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
              @foreach ($conComics as $consulta)
                  <tr>
                    <td>{{$consulta->nombre_tipo}}</td>
                    <td>{{$consulta->edicion_marca}}</td>
                    <td>{{$consulta->company_descripcion}}</td>
                    <td>{{$consulta->cantidad}}</td>
                    <td>{{$consulta->precioCompra}}</td>
                    <td>{{$consulta->precioVenta}}</td>
                    <td>{{$consulta->fecha}}</td>
                    <td>{{$consulta->provs->empresa}}</td>
                    <td><a href="{{route('comic.edit', $consulta->idProducto)}}"><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a type="button" data-bs-toggle="modal" data-bs-target="#eliminarComic{{ $consulta->idProducto }}"><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                    @include('eliminarComic')
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    

    @endsection