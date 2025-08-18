@extends('template')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <div class="dashboard-container">
        <div class="dashboard-content">
            <h1>Bem-vindo, {{ Auth::user()->name }}!</h1>
            <p>Aproveite o seu acesso exclusivo ao Codeflix.</p>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-button">Sair</button>
            </form>
        </div>
    </div>
@endsection
