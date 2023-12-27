@extends('auth.layouts.auth')

@section('titulo')
    Register
@endsection

@section('contenido')
    <section class="formulario" id="formulario">
        <div class="posicion">
            <ul class="contenedor_posicion">
                <li class="step active_step">Paso 1</li>
                <li class="step ">paso 2</li>
                <li class="step ">paso 3</li>
            </ul>
        </div>
        <div class="contenedor_formulario ">
            <div class="head_formulario">
                <i class="fa-solid fa-user-graduate"></i>
                <h1>Registrate en Uchinik </h1>
            </div>
            <form action="{{ route('register.store') }}" method="POST" class="form_register">
                @csrf
                <div class="formulario_step" id="step-1">
                    <label for="nombre">Nombres completos</label>
                    <input type="text" name="nombre" id="nombre"placeholder="Ingrese su nombre"
                        value="{{ old('nombre') }}">
                    @error('nombre')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="apellido">Apellidos Completos</label>
                    <input type="text" name="apellido"  id="apellido" placeholder="Ingrese su apellido"
                        value="{{ old('apellido') }}">
                    @error('apellido')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="phone">Telefono</label>
                    <input type="tel" name="phone" id="phone" placeholder="+593 00 000 0000"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Ingrese su email institucional"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <div class="contenedor_botones">
                        <button type="button" data-step="1" data-to_step="2" class="boton_step boton_step_siguiente">
                            Sigiente <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="formulario_step " id="step-2">


                    <div class="contenedor-avatars">
                        <label for="avatar1" class="visible"> <img src="{{ asset('img/layouts/avatar1.png') }}" alt=""></label>
                        <input type="radio" name="avatar" id="avatar1" class=" avatars" value="avatar1">

                        <label for="avatar2" class="visible"><img src="{{ asset('img/layouts/avatar2.png') }}" alt=""></label>
                        <input type="radio" name="avatar" id="avatar2" class=" avatars" value="avatar2">

                        <label for="avatar3" class="visible"> <img src="{{ asset('img/layouts/avatar3.png') }}" alt=""></label>
                        <input type="radio" name="avatar" id="avatar3" class=" avatars" value="avatar3">

                        <label for="avatar4" class="visible"><img src="{{ asset('img/layouts/avatar4.png') }}" alt=""></label>
                        <input type="radio" name="avatar" id="avatar4" class=" avatars" value="avatar4">

                        <label for="avatar5" class="visible"> <img src="{{ asset('img/layouts/avatar5.png') }}" alt=""></label>
                        <input type="radio" name="avatar" id="avatar5" class=" avatars" value="avatar5">
                        
                        <label for="avatar6" class="visible"><img src="{{ asset('img/layouts/avatar6.png') }}" alt=""></label>
                        <input type="radio" name="avatar" id="avatar6" class=" avatars" value="avatar6">
                        
                    </div>

                    
                    <div class="contenedor_botones">
                        <button type="button" class="boton_step boton_step_anterior" data-to_step="1" data-step="2"><i
                                class="fa-solid fa-arrow-left"></i> Anterior</button>
                        <button type="button" class="boton_step boton_step_siguiente" data-step="2" data-to_step="3">
                            Sigiente <i class="fa-solid fa-arrow-right"></i></button>
                    </div>

                </div>

                <div class="formulario_step " id="step-3">

                    <h2>Crea un usuario</h2>
                    <p><i class="fa-solid fa-triangle-exclamation"></i>Estos seran tus datos de autenticacion, guardalos bien para que no se te olviden :)</p>

                    <label for="username">Usuario</label>
                    <input type="text" name="username" id="username" placeholder="Ingrese un nombre de usuario"
                        value="{{ old('username') }}">
                    @error('username')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="Ingrese una contraseña">
                    @error('password')
                        <p class="error">{{ $message }}</p>
                    @enderror


                    <label for="password_confirmation">Repita la contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Ingrese nuevamente la contraseña">
                    @error('password_confirmation')
                        <p class="error">{{ $message }}</p>
                    @enderror


                    <div class="contenedor_botones">
                        <button type="button" class="boton_step boton_step_anterior" data-step="3" data-to_step="2"><i
                                class="fa-solid fa-arrow-left"></i> Anterior</button>
                        <button type="submit" class="boton_step"> enviar <i class="fa-solid fa-check"></i></button>
                    </div>

                </div>

            </form>
        </div>


    </section>
    
@endsection
