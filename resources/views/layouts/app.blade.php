<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/layouts/app.css') }}">
    {{-- CSS externos --}}
    @stack('style')
    {{-- ANIMATE CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- FONTAWESON --}}
    <script src="https://kit.fontawesome.com/6092d0a250.js" crossorigin="anonymous"></script>
    {{-- Quicksand --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <title>Uchinik @yield('titulo')</title>
</head>

<body>
    <header>
        <nav class="navegacion">
            <ul class="contenedor_nav">
                <ul class="logo">
                    <li>
                        <a href="/"><img class="logo_img" src="{{ asset('img/layouts/logo3.png') }}"
                                alt="Logo Mashina"></a>
                    </li>
                    <li>
                        <h1><a href="/">Uchinik</a></h1>
                    </li>
                </ul>

                <ul class="eslogan">
                    <li>
                        <h2>Aprende Ruso de una manera facil</h2>
                    </li>
                </ul>

                <ul class="nav_usuario" id="navUsuario" onclick="mostrar()">
                    <li><img src="{{ asset('img/layouts/' . auth()->user()->avatar) . '.png' }}" alt="foto del usuario">
                    </li>
                    <li>
                        <p>{{ auth()->user()->username }}<i class="fa-solid fa-angle-down"></i></p>
                    </li>
                    <li class="opciones_usuario" id="opciones">
                        <ul>
                            <li><a  class="boton-nav_usuario " href="">configuraciones <i class="fa-solid fa-gear"></i></a></li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li><button class="boton-nav_usuario boton_logout" type="submit">cerrar sesion <br> <i class="fa-solid fa-arrow-right-from-bracket"></i></button></li>
                            </form>
                        </ul>
                    </li>
                </ul>
        </nav>
    </header>

    <main>
        <div class="loader" id="loader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="mensaje">
                <p>Aprende de manera sencilla con Uchinik<i class="fa-regular fa-thumbs-up"></i></p>
            </div>
        </div>
        @yield('contenido')
    </main>
</body>
<script src="{{ asset('js/layouts/app.js') }}"></script>
@stack('script')
<script>
    function desplegar() {
        var desplegable = document.querySelectorAll(".desplegable");
        var contenedor_desplegable = document.getElementById("desplegable_contenedor")
        for (var i = 0; i < desplegable.length; i++) {
            desplegable[i].classList.toggle("desplegable_activo");
        }
        contenedor_desplegable.classList.toggle("desplegable_contenedor");
    }
</script>

</html>
