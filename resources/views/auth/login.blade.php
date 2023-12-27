@extends('auth.layouts.auth')

@section('titulo')
    Login
@endsection

@section('contenido')
    <section class="formulario" id="formulario">

        <div class="contenedor_formulario ">
            <div class="head_formulario">
                <i class="fa-solid fa-user-graduate"></i>
                <h1>Empieza tu aventura </h1>
            </div>
            <form action="{{ route('login.store') }}" method="POST" class="form_register">
                @csrf

                
                <div class="formulario_step " id="step-1">
                    <p>
                        {{ session('mensaje') }}
                    </p>

                    <label for="username">username</label>
                    <input type="text" name="username" id="username" placeholder="Ingrese su nombre de username"
                        value="{{ old('username') }}">
                    @error('username')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                    @error('password')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <div class="contenedor_botones">
                        <button type="submit" class="boton_step"> Entrar <i class="fa-solid fa-check"></i></button>
                    </div>

                </div>

            </form>
        </div>


    </section>
@endsection
