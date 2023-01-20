@extends('layouts.layout')

@section('content')
    <div class="ContentAlugeres">
        <h2>Os seus alugueres</h2>
        <div class="aluguer">
            @foreach ($carro as $carro)
                <img class="imgCarros" src="{{ $carro->url }}" alt="img/carro">
                <div class="detalhesCarro">
                    <p>Marca: {{ $carro->marca }}</p>
                    <p>Combustivel: {{ $carro->combustivel }}</p>
                    <p>Lugares: {{ $carro->lugares }}</p>
                    <p>Portas: {{ $carro->portas }}</p>
                    <p>Total a pagar: 125€</p>
                </div>
            @endforeach
        </div>
        <div class="datasAlugueres">
            <div>
                <h3>Data e Hora de Recolha</h3>
                <p>27-12-2022 9H</p>
            </div>
            <div>
                <h3>Data e Hora de Devolução</h3>
                <p>05-01-2023 18H</p>
            </div>
        </div>
    </div>
@endsection
