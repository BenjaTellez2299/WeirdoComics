@extends('plantilla')

    @section('titulo','Consultar Usuario')

    @section('contenido')
    
    @if (session()->has('usuarioagregado'))
    <?php $nombre = session()->get('txtNomb')?>
    {!!"<script> Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Se ha agregado un nuevo usuario; {$nombre}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    @if (session()->has('usuarioeditado'))
    <?php $usuario = session()->get('txtNomb')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'info',
        title: 'Se ha editado al usuario; {$usuario}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    @if (session()->has('delete'))
    <?php $usuario = session()->get('usuario')?>
      {!!"<script> Swal.fire({
        position: 'center',
        icon: 'warning',
        title: 'Se ha eliminado al usuario',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    <div class="titulo">
        <div class="opcion"><a href="{{route('usuario.create')}}" class="opcion__a"><img src="{!! asset('img/addUsuario.png') !!}" alt="Añadir Usuario" class="titulo__opcion"></a></div>
        <img src="{!! asset('img/consultarUsuario.png') !!}" alt="Consultar Usuarios" class="titulo__principal">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible">
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
              @foreach($consultaUsuarios as $consulta)
                <tr>
                    <td>{{$consulta->nombre}}</td>
                    <td>{{$consulta->noEmpleado}}</td>
                    <td>{{$consulta->contra}}</td>
                    <td>{{$consulta->turno}}</td>
                    <td>{{$consulta->rol}}</td>
                    <td>{{$consulta->fehcaNac}}</td>
                    <td><a href="{{route('usuario.edit', $consulta->idUsuario)}}"><img src="{!! asset('img/actualizar.png') !!}" alt="Editar" class="table__img"></a></td>
                    <td><a type="button" data-bs-toggle="modal" data-bs-target="#eliminarUsuario{{ $consulta->idUsuario }}"><img src="{!! asset('img/borrar.png') !!}" alt="Borrar" class="table__img"></a></td>
                    @include('eliminarUsuario')  
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>

    @endsection