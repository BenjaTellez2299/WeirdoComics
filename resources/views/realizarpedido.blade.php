@extends('plantilla')

    @section('titulo','Realizar Pedido')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/realizarpedido.png') !!}" alt="Realizar Pedido" class="titulo__principal">
    </div>

    <div class="contenedor__buscar">
        <form class="form__buscar" action="">
            <div class="form__row">
                <select class="form__input">
                    <option>Comics</option>
                    <option>Artículos</option>
                </select> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>
    </div>

    <div class="contenedor__buscar">
        <form class="form__buscar" action="">
            <div class="form__row">
                <select class="form__input">
                    <option>Juguetron</option>
                    <option>Funko Store</option>
                </select> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>
    </div>

    <div class="table__contenedor">
        <table class="table__consultar">
            <thead>
                <th>Seleccionar</th>
                <th>Nombre</th>
                <th>Precio Compra</th>
                <th></th>
                <th>Cantidad</th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td> <input type="checkbox"> </td>
                    <td>Gorra Batman: Caballero de la noche</td>
                    <td>180</td>
                    <td><a href=""><img src="{!! asset('img/quitar.png') !!}" alt="Pedido" class="table__img"></a></td>
                    <td>6</td>
                    <td><a href=""><img src="{!! asset('img/agregar.png') !!}" alt="Pedido" class="table__img"></a></td>
                </tr>
                <tr>
                    <td> <input type="checkbox"> </td>
                    <td>Nausicaä - Hayao Miyazaki</td>
                    <td>40</td>
                    <td><a href=""><img src="{!! asset('img/quitar.png') !!}" alt="Pedido" class="table__img"></a></td>
                    <td>6</td>
                    <td><a href=""><img src="{!! asset('img/agregar.png') !!}" alt="Pedido" class="table__img"></a></td>
                </tr>
                <tr>
                    <td> <input type="checkbox"> </td>
                    <td>Llavero Funko Keychain The Batman</td>
                    <td>90</td>
                    <td><a href=""><img src="{!! asset('img/quitar.png') !!}" alt="Pedido" class="table__img"></a></td>
                    <td>6</td>
                    <td><a href=""><img src="{!! asset('img/agregar.png') !!}" alt="Pedido" class="table__img"></a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="form__foot">
        <div class="btn__form">
            <a href="{{route('users.pdf')}}" target="blank"><img src="{!! asset('img/pedido.png') !!}" alt="Comics" class="form__img-pic"></a>
        </div>
    </div>

    @endsection