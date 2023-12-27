@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('titulo')
    Home
@endsection

@section('contenido')
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide bienvenida">
                <img src="{{ asset('img/layouts/bienvenido.png') }}" alt="">
                <p>Bienvenido a Uchinik. <br>
                    Estamos felices de tenerte aqui.!!
                </p>
            </div>
            <div class="swiper-slide menu">
                <div class="contenedor_opciones">
                    <h1>Disfruta del material <br> <i class="fa-solid fa-face-smile-beam" ></i></h1>
                    <div class="opcion">
                        <a href="">Alfabeto ruso <i class="fa-solid fa-a"></i></a>
                    </div>
                    <div class="opcion">
                        <a href="">Vocabulario supermercado  <i class="fa-solid fa-store"></i></i></a>
                    </div>
                    <div class="opcion">
                        <a href="">Vocabulario para un hospital <i class="fa-solid fa-hospital"></i></a>
                    </div>
                </div>
            </div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>


    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            autoplay:{
                delay: 5000,
                stopOnLastSlide: true,
            }


            // Navigation arrows
/*             navigation: {
                nextEl: '.swiper-button-next',
            }, */
            

        });
    </script>
@endpush
