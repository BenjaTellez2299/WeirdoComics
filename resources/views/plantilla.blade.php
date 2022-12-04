<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
</head>
<body>

    {{--  Navbar  --}}

    <header class="barra">
        <div class="barra__logo">
            <a href="{{route('menu')}}"><img src="{!! asset('img/logob.png') !!}" alt="Logo Weirdo Comics" class="barra__img"></a>
        </div>
        <nav>
            <ul class="barra__links">
                <li class="barra__link {{request()->routeIs('consComic','addComic', 'editComic')?'barra__link-active':'active'}}"><a href="{{route('consComic')}}">Comics</a></li>
                <li class="barra__link {{request()->routeIs('articulo.index', 'articulo.create', 'articulo.edit')?'barra__link-active':'active'}}"><a href="{{route('articulo.index')}}">Articulos</a></li>
                <li class="barra__link {{request()->routeIs('usuario.index', 'usuario.create', 'usuario.edit')?'barra__link-active':'active'}}"><a href="{{route('usuario.index')}}">Usuarios</a></li>
                <li class="barra__link {{request()->routeIs('invent','realip')?'barra__link-active':'active'}}"><a href="{{route('invent')}}">Inventario</a></li>
                <li class="barra__link {{request()->routeIs('prov.index', 'addProve', 'editProve')?'barra__link-active':'active'}}"><a href="{{route('prov.index')}}">Proveedores</a></li>
                <li class="barra__link {{request()->routeIs('vent', 'report')?'barra__link-active':'active'}}"><a href="{{route('vent')}}">Ventas</a></li>
            </ul>
        </nav>
        <a href="{{route('login')}}" class="barra__btn">Cerrar Sesion</a>
    </header>
    
    {{--  Cotenido  --}}

    @yield('contenido')

    {{--  Footer  --}}
    
    <footer class="foot">
        <div class="foot__copy">
            <small>&copy; 2022 <b>Weirdo Comics</b> - Todos los derechos Reservados</small>
        </div>
    </footer>


</body>
</html>