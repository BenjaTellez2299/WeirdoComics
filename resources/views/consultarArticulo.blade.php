@extends('plantilla')

    @section('titulo','Consultar Articulo')

    @section('contenido')

    @if (session()->has('articuloagregado'))
    <?php $articulo = session()->get('txtTipo')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Se ha agregado un nuevo articulo; {$articulo}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif
    
    @if (session()->has('articuloeditado'))
    <?php $articulo = session()->get('txtTipo')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'info',
        title: 'Se ha editado el articulo; {$articulo}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    @if (session()->has('delete'))
    <?php $articulo = session()->get('articulo')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'Se ha eliminado el articulo',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    <div class="titulo">
        <div class="opcion"><a href="{{route('articulo.create')}}" class="opcion__a"><img src="{!! asset('img/addArticulo.png') !!}" alt="Añadir Articulo" class="titulo__opcion"></a></div>
        <img src="{!! asset('img/consultarArticulo.png') !!}" alt="Consultar Articulo" class="titulo__principal">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible">
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
                <th>Proveedor</th>
                <th>Editar</th>
                <th>Borrar</th>
            </thead>
            <tbody>
              @foreach($consultaArticulos as $consulta)
                <tr>
                    <td>{{$consulta->nombre_tipo}}</td>
                    <td>{{$consulta->edicion_marca}}</td>
                    <td>{{$consulta->company_descripcion}}</td>
                    <td>{{$consulta->cantidad}}</td>
                    <td>{{$consulta->precioCompra}}</td>
                    <td>{{$consulta->precioVenta}}</td>
                    <td>{{$consulta->empresa}}</td>
                    <td><a href="{{route('articulo.edit', $consulta->idProducto)}}"><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a type="button" data-bs-toggle="modal" data-bs-target="#eliminarArticulo{{ $consulta->idProducto }}"><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                    @include('eliminarArticulo')
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    

    @endsection