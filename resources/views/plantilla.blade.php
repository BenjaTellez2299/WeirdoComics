<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
</head>
<body>

    {{--  Navbar  --}}

    <header class="nav">
        <div class="nav__logo">
            <a href="{{route('menu')}}"><img src="{!! asset('img/logob.png') !!}" alt="Logo Weirdo Comics" class="nav__img"></a>
        </div>
        <nav>
            <ul class="nav__links">
                <li class="nav__link {{request()->routeIs('consComic','addComic', 'editComic')?'nav__link-active':'active'}}"><a href="{{route('consComic')}}">Comics</a></li>
                <li class="nav__link {{request()->routeIs('consArtic', 'addArtic', 'editArtic')?'nav__link-active':'active'}}"><a href="{{route('consArtic')}}">Articulos</a></li>
                <li class="nav__link {{request()->routeIs('consUsu', 'addUsu', 'editUsu')?'nav__link-active':'active'}}"><a href="{{route('consUsu')}}">Usuarios</a></li>
                <li class="nav__link {{request()->routeIs('invent','realip')?'nav__link-active':'active'}}"><a href="{{route('invent')}}">Inventario</a></li>
                <li class="nav__link {{request()->routeIs('consProve', 'addProve', 'editProve')?'nav__link-active':'active'}}"><a href="{{route('consProve')}}">Proveedores</a></li>
                <li class="nav__link {{request()->routeIs('vent', 'report')?'nav__link-active':'active'}}"><a href="{{route('vent')}}">Ventas</a></li>
            </ul>
        </nav>
        <a href="{{route('login')}}" class="nav__btn">Cerrar Sesion</a>
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