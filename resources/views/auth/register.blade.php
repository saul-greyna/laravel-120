@extends('components.layout')

@section('content')
<main class="container">
    <section class="form-box register">
        <form action="" method="POST" action="{{ route('register') }}">
            @csrf

            <h1>Registro</h1>
            <div class="input-box">
                <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input id="email" type="email" placeholder="Correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="input-box">
                <input id="password-confirm" type="password" placeholder="Confirmar contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <button type="submit" class="btn btn-primary">
                {{ __('Registrar') }}
            </button>
            <p>o inicie sesión con la plataforma social</p>
            <div class="social-icons">
                <a href="#"><i class="bx bxl-google"></i></a>
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-github"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
        </form>        
    </section>
    <section class="toggle-box">
        <div class="toggle-panel toggle-right">
            <h1>¡Bienvenido de nuevo!</h1>
            <p>¿Ya tienes una cuenta?</p>
            <a class="btn-auth" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
        </div>
    </section>
</main>
@endsection
