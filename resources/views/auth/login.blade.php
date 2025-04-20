@extends('components.layout')

@section('content')
<main class="container">
    <section class="form-box login">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="email" id="username" placeholder="Username" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="forgot-link">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button type="submit" class="btn">
                {{ __('Login') }}
            </button>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            <p>or login with social platform</p>
            <div class="social-icons">
                <a href="#"><i class="bx bxl-google"></i></a>
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-github"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
        </form>
    </section>
    <section class="toggle-box">
        <div class="toggle-panel toggle-left">
            <h1> Hello, Welcome!</h1>
            <p>Don't have an account?</p>
            <a class="btn-auth" href="{{ route('register') }}">{{ __('Register') }}</a>
       </div>
    </section>
</main>
@endsection
