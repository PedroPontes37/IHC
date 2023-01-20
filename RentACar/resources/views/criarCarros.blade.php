@extends('layouts.layout')

@section('content')
    <div class="createCars">
        @if (isset($carro))
            <h1>Editar Carro</h1>
        @else
            <h1>Adicionar Carro</h1>
        @endif

        <div class="detalhes">
            <p class="message">{{ session('mssg') }}</p>
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>


            <div class="inputs">
                <form method="POST" enctype="multipart/form-data"
                    @if (isset($carro)) action="{{ route('carros.update', $carro->id) }}"
            @else
                action="{{ route('carros.store') }}" @endif>

                    @csrf
                    @if (isset($carro))
                        @method('PUT')
                    @endif


                    <div class="inputs">

                        <input class="inputCarros" type="text" id="matricula" name="matricula" placeholder="Matricula"
                            @if (isset($carro)) value="{{ $carro->matricula }}" @endif>
                        <br>


                        <input class="inputCarros" type="text" id="marca" name="marca" placeholder="Marca"
                            @if (isset($carro)) value="{{ $carro->marca }}" @endif>
                        <br>

                        <input class="inputCarros" type="text" id="combustivel" name="combustivel"
                            placeholder="Combustivel"
                            @if (isset($carro)) value="{{ $carro->combustivel }}" @endif>
                        <br>

                        <input class="inputCarros" type="text" id="lugares" name="lugares" placeholder="Lugares"
                            @if (isset($carro)) value="{{ $carro->lugares }}" @endif>
                        <br>

                        <input class="inputCarros" type="text" id="portas" name="portas" placeholder="Portas"
                            @if (isset($carro)) value="{{ $carro->portas }}" @endif>
                        <br>
                        <input class="inputCarros" type="text" id="preco" name="preco" placeholder="Preço"
                            @if (isset($carro)) value="{{ $carro->preco }}" @endif>
                        <br>
                        <input type="hidden" id="changed" name="changed" value="false">
                        <label for="url">URL: </label>
                        <input type="file" id="url" name="url"
                            onchange="document.getElementById('changed').value='true';">
                        @if (isset($carro))
                            (nao alterar)
                        @endif
                        <br>
                        <div class="buttonsTontes">
                            <button id="ChangeCarButton" type="submit">
                                @if (isset($carro))
                                    Editar Carro
                                @else
                                    Adicionar Carro
                                @endif
                            </button>

                            <button id="VoltarCarros"><a id="textVoltar" href="/carros">Voltar aos carros</a></button>
                        </div>





                    </div>

                </form>


            </div>

        </div>

    </div>
@endsection
