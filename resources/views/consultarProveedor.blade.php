@extends('plantilla')

    @section('titulo','Consultar Proveedor')

    @section('contenido')

    @if (session()->has('proveeagregado'))
      <?php $empresa = session()->get('txtEmpresa')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Se ha agregado una nueva empresa; {$empresa}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    @if (session()->has('proveedoreditado'))
    <?php $proveedor = session()->get('txtEmpresa')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'info',
        title: 'Se ha editado el proveedor; {$proveedor}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    @if (session()->has('delete'))
    <?php $proveedor = session()->get('proveedor')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'Se ha eliminado el proveedor',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    <div class="titulo">
        <div class="opcion"><a href="{{route('prove.create')}}" class="opcion__a"><img src="{!! asset('img/addProve.png') !!}" alt="Añadir Proveedor" class="titulo__opcion"></a></div>
        <img src="{!! asset('img/consultarProve.png') !!}" alt="Consultar Proveedor" class="titulo__principal">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible"> 
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
              @foreach ($consulProvs as $prov)
                <tr>
                  <td>{{$prov->empresa}}</td>
                  <td>{{$prov->dirección}}</td>
                  <td>{{$prov->pais}}</td>
                  <td>{{$prov->contacto}}</td>
                  <td>{{$prov->noFijo}}</td>
                  <td>{{$prov->noCelu}}</td>
                  <td>{{$prov->correo}}</td>
                  <td><a href="{{route('realip')}}"><img src="{!! asset('img/hacerPedido.png') !!}" alt="Pedido" class="table__img"></a></td>
                  <td><a href="{{route('prove.edit', $prov->idProveedor)}}"><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                  <td><a type="button" data-bs-toggle="modal" data-bs-target="#eliminarProveedor{{ $prov->idProveedor }}"><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                  @include('eliminarProveedor')
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    

    @endsection