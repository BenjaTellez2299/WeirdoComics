@extends('plantilla')

    @section('titulo','Reportes Ventas')

    @section('contenido')

    <div class="titulo">
        <img src="{!! asset('img/consultarComic.png') !!}" class="titulo__invisible">
        <img src="{!! asset('img/reporte.png') !!}" alt="Inventario" class="titulo__principalVen">
        <div class="opcion"><a href="{{route('vent')}}" class="opcion__a"><img src="{!! asset('img/ventas.png') !!}" alt="Reporte Ventas" class="titulo__opcionVen"></a></div>
    </div>

    <div class="contenedor__search">

        <h2>Buscar Por Día</h2>

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
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                </select> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>

    </div>

    <div class="contenedor__search">

        <h2>Buscar Por Mes</h2>

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
                    <option>Agosto</option>
                    <option>Septiembre</option>
                    <option>Octubre</option>
                    <option>Noviembre</option>
                    <option>Diciembre</option>
                </select> <a href="#"><img src="{!! asset('img/buscar.png') !!}" alt="Buscar" class="img__buscar"></a>
            </div>
        </form>

    </div>

    <div class="contenedor__search">

        <h2>Buscar Por Vendedor</h2>

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
            <a href="{{route('vent')}}"><img src="{!! asset('img/salir.png') !!}" alt="Salir" class="btn__form-img"><button class="btn__form-salir">Salir</button></a>
        </div>
    </div>

    @endsection