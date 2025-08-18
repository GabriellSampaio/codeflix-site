@extends('template')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <div class="auth-page-container">
        <div class="auth-form-box">

            <div class="auth-title-container">
                <img src="{{ asset('img/luz.png') }}" alt="luz de cinema" class="spotlight-img">
                <h1 class="auth-title">Faça Login</h1>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                    @error('email') <p class="error-message">{{ $message }}</p> @enderror
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="password" required>
                    @error('password') <p class="error-message">{{ $message }}</p> @enderror
                </div>

                <button type="submit" class="auth-button">
                    <span>Entrar</span>
                     <img src="{{ asset('img/fita.png') }}" alt="Ícone de fita">
                </button>

                <p class="auth-link">
                    Não tem login? - <a href="{{ route('register') }}">Cadastre-se</a>
                </p>
            </form>
        </div>
    </div>
@endsection
