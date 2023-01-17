@extends('layouts.layout')

@section('content')
    <h1>Carros</h1>
    <div class="carros">
        @foreach ($carros as $carro)
            <div class="carro">
                <img class="imgCarros" src="{{ $carro->url }}" alt="img/carro">
                <div class="detalhesCarro">
                    <p>Marca: {{ $carro->marca }}</p>
                    <p>Combustivel: {{ $carro->combustivel }}</p>
                    <p>Lugares: {{ $carro->lugares }}</p>
                    <p>Portas: {{ $carro->portas }}</p>
                </div>
                <div class="butoesCarros">
                    <button class="buttonCarros">Selecionar</button>
                    @if (auth()->user()->IsAdmin)
                        <button class="buttonCarros"> <a class="aCarros" href="{{ route('carros.show', $carro->id) }}">Ver
                                detalhes</a></button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
