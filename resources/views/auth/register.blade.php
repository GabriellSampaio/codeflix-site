@extends('template')

@section('content')
    {{-- É uma boa prática ter um ficheiro CSS separado para a autenticação --}}
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <div class="auth-page-container">
        <div class="auth-form-box">
            <h1 class="auth-title">Cadastre-se</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                    @error('name') <p class="error-message">{{ $message }}</p> @enderror
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                    @error('email') <p class="error-message">{{ $message }}</p> @enderror
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="password" required>
                    @error('password') <p class="error-message">{{ $message }}</p @enderror
                </div>
                
                <div class="form-group">
                    <label for="password_confirmation">Confirmar Senha</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required>
                </div>

                <button type="submit" class="auth-button">
                    <span>Cadastrar</span>
                    <img src="{{ asset('img/fita.png') }}" alt="Ícone de fita">
                </button>

                <p class="auth-link">
                    Já tem login? - <a href="{{ route('login') }}">Acesse</a>
                </p>
            </form>
        </div>
    </div>
@endsection
