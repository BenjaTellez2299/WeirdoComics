@extends('plantilla')

    @section('titulo','Reportes Ventas')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/reporte.png') !!}" alt="Reportes" class="titulo__principal">
    </div>

    <div class="contenedor__search">

        <form class="form__search" action="">
            <div class="form__row">
                <div class="btn__vender">
                    <a href=""><button type="submit" class="btn__vender-compra">GENERAR</button></a>
                </div>
            </div>
        </form>

        <form class="form__search" action="">
            <div class="form__row">
                <select class="form__input">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>

    </div>

    <div class="contenedor__search">

        <form class="form__search" action="">
            <div class="form__row">
                <div class="btn__vender">
                    <a href=""><button type="submit" class="btn__vender-compra">GENERAR</button></a>
                </div>
            </div>
        </form>

        <form class="form__search" action="">
            <div class="form__row">
                <select class="form__input">
                    <option>Enero</option>
                    <option>Febrero</option>
                    <option>Marzo</option>
                    <option>Abril</option>
                    <option>Mayo</option>
                    <option>Junio</option>
                    <option>Julio</option>
                </select> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>

    </div>

    <div class="contenedor__search">

        <form class="form__search" action="">
            <div class="form__row">
                <div class="btn__vender">
                    <a href=""><button type="submit" class="btn__vender-compra">GENERAR</button></a>
                </div>
            </div>
        </form>

        <form class="form__search" action="">
            <div class="form__row">
                <select class="form__input">
                    <option>Alfredo Madrigal Tercero</option>
                    <option>Gabriel Galván Niño</option>
                    <option>Benjamín Enríquez Téllez</option>
                </select> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>

    </div>

    <div class="form__foot">
        <div class="btn__form">
            <a href=""><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><button class="btn__form-salir">Salir</button></a>
        </div>
    </div>

    @endsection