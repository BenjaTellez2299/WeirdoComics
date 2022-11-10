@extends('plantilla')

    @section('titulo','Weirdo Comics')

    @section('contenido')

    @if (session()->has('confirm'))
    <?php $user = session()->get('user')?>
      {!!"<script> Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Bienvenido {$user}',
        showConfirmButton: false,
        timer: 3500
      })</script>"!!}
    @endif

    <h1 class="menu__titulo">¿Quienes somos?</h1>
    
    <section class="menu__contenedor-img">
        <div class="menu__item">
            <img src="{!! asset('img/image2.png') !!}" alt="comics" class="menu__img">
        </div>
        <div class="menu__item">
            <img src="{!! asset('img/image1.png') !!}" alt="comics" class="menu__img">
        </div>
        <div class="menu__item">
            <img src="{!! asset('img/image3.png') !!}" alt="comics" class="menu__img">
        </div>
    </section>
    
    <main class="menu__contenedor-txt animate__animated animate__fadeIn">
        <p>Somos una empresa 100% mexicana integrada por profesionales con una experiencia de más de 20 años en el medio editorial y especialistas en el ramo de los cómics, mangas e historietas.</p>
    </main>


    @endsection