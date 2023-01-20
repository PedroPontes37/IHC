@extends('layouts.layout')

@section('content')
    <div class="ContenteDetalhes">
        <div class="detalhesCarros">
            @if (isset($carro))
                <div class="carrodetalhes">
                    {{-- <a href="/carros/{{ $carro->id }}"></a> --}}
                    <img id="imgCarrosdetalhes" src="{{ $carro->url }}" alt="img/carro">
                    <h2>Matricula: {{ $carro->matricula }}</h2>

                </div>
            @else
                <h1>O carro nao existe</h1>
            @endif

            <div class="buttonsdetalhes">
                @auth
                    <form action="{{ route('carros.destroy', $carro->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="buttonCarros">Eliminar Carro</button>

                    </form>

                    <form action="{{ route('carros.edit', $carro->id) }}" method="GET">
                        @csrf
                        <button class="buttonCarros">Editar Carro</button>
                    </form>
                @endauth
            </div>

            <a href="/carros">Voltar aos carros</a>
        </div>
    </div>
@endsection
