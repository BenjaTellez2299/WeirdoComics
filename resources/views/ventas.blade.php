@extends('plantilla')

    @section('titulo','Ventas')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/ventas.png') !!}" alt="Inventario" class="titulo__principal">
    </div>

    <div class="contenedor__search">

        <form class="form__search" action="">
            <div class="form__row">
                <input type="text" class="form__input" placeholder="BUSCAR PRODUCTO"> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>

        <form class="form__search__img" action="">
            <div class="ventas__img">
                <img src="{!! asset('img/carrito.png') !!}" alt="Inventario" class="titulo__principal">
            </div>
        </form>

    </div>

    <div class="contenedor__ventas">
        <div class="contenedor__ventas__left">
            <div class="table__ventas">
                <table class="table__ventas__prod">
                    <thead>
                        <th>Nombre</th>
                        <th>Precio Venta</th>
                        <th>Agregar</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gorra Batman: Caballero de la noche</td>
                            <td>400</td>
                            <td><a href=""><img src="{!! asset('img/agregar.png') !!}" alt="Editar" class="table__img"></a></td>
                        </tr>
                        <tr>
                            <td>Figura de Acción Aquaman</td>
                            <td>500</td>
                            <td><a href=""><img src="{!! asset('img/agregar.png') !!}" alt="Editar" class="table__img"></a></td>
                        </tr>
                        <tr>
                            <td>Llavero Funko Keychain The Batman</td>
                            <td>200</td>
                            <td><a href=""><img src="{!! asset('img/agregar.png') !!}" alt="Editar" class="table__img"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>    

        <div class="contenedor__ventas__right">
            <div class="table__ventas">
                <table class="table__ventas__ventas">
                    <thead>
                        <th>Nombre</th>
                        <th>Precio Venta</th>
                        <th>Cantidad</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gorra Batman: Caballero de la noche</td>
                            <td>400</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Figura de Acción Aquaman</td>
                            <td>500</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Llavero Funko Keychain The Batman</td>
                            <td>200</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>  
    </div>

    <div class="contenedor__ventas">
        <div class="contenedor__ventas__left">

        </div>

        <div class="contenedor__ventas__right">
            <div class="btn__vender">
                <a href=""><img src="{!! asset('img/exportar.png') !!}" class="btn__vender-img"><button type="submit" class="btn__vender-compra">COMPRAR</button></a>
            </div>
        </div>
    </div>


    @endsection