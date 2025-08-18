@extends('template')

@section('content')
<link rel="stylesheet" href="{{ asset('css/sobre.css') }}">

@if(session('success'))
<div style="background-color: #28a745; color: white; text-align: center; padding: 15px;">
    {{ session('success') }}
</div>
@endif
<div class="main-container">
    <div class="content">
        <h1 class="titulo">QUEM SOMOS?</h1>
        <div class="team-cards">
            @forelse ($membros as $membro)
            <div class="member-card">
                <img src="{{ asset('img/' . $membro->imagem) }}" alt="{{ $membro->nome }}" class="member-image">
                <div class="member-card-inner">
                    <div class="member-name">{{ $membro->nome }}</div>
                    <div class="member-social">{{ $membro->usuario_instagram }}</div>

                    <div class="admin-actions">

                        <a href="{{ route('membros.edit', $membro->id) }}" class="btn-edit">
                            Editar
                        </a>

                        <form action="{{ route('membros.destroy', $membro->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este membro?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">
                                Excluir
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <p style="font-size: 1.2rem;">Nenhum membro da equipe foi adicionado ainda.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection