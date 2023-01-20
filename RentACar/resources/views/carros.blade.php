@extends('layouts.layout')

@section('content')
    <div class="filtros">
        <form action="{{ route('carros.by.filtros') }}" method="GET">
            <div class="formfiltros">
                <div>
                    <label for="marca">Marca:</label>
                    <select name="marca" id="marca ">
                        <option value="Renault">Renault</option>
                        <option value="Smart">Smart</option>
                        <option value="Fiat">Fiat</option>
                    </select>
                </div>
                <div>
                    <label for="combustivel">Combustivel:</label>
                    <select name="combustivel" id="combustivel">
                        <option value="Gasoleo">Gasoleo</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Eletrico">Eletrico</option>
                    </select>
                </div>
                <div>
                    <label for="lugares">Lugares:</label>
                    <select name="lugares" id="lugares">
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div>
                    <label for="portas">Portas:</label>
                    <select name="portas" id="portas">
                        <option value="3">3</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="buttonCarros"> Filtrar</button>
            <button class="button"><a href="{{ route('carros.index') }}" class="button">Limpar Filtros</a></button>


        </form>
    </div>
    <div class="carros">
        @foreach ($carros as $carro)
            <div class="carro">
                <img class="imgCarros" src="{{ $carro->url }}" alt="img/carro">
                <div class="detalhesCarro">
                    <p>Marca: {{ $carro->marca }}</p>
                    <p>Combustivel: {{ $carro->combustivel }}</p>
                    <p>Lugares: {{ $carro->lugares }}</p>
                    <p>Portas: {{ $carro->portas }}</p>
                    <p>Preço por dia: {{ $carro->preco }}€</p>
                </div>
                <div class="butoesCarros">
                    <button class="buttonCarros"><a class="aCarros" href="/pagamento">Selecionar</a></button>
                    @if (auth()->user()->IsAdmin)
                        <button class="buttonCarros"> <a class="aCarros" href="{{ route('carros.show', $carro->id) }}">Ver
                                detalhes</a></button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
