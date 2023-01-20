@extends('layouts.layout')

@section('content')
    <div class="pgCarrinho">
        <div class="ptPagamento">
            <h4>Insira os Dados do seu Cartão</h4>
            <div>
                <input class="inputCarros" type="text" placeholder="Nome do Cartão">
            </div>
            <div> <input class="inputCarros" type="text" placeholder="Numero do Cartão">
            </div>
            <div class="dataAndCVC">
                <div> <input class="inputPagamento" type="text" placeholder="Data">
                </div>
                <div> <input class="inputPagamento" type="text" placeholder="CVC">
                </div>
            </div>


        </div>
        <div class="ptCarrinho">
            <h2>Detalhes da Reserva</h2>
            <h5>DATA LEVANTAMENTO: 27-12-2022 9H</h5>
            <h5>DATA ENTREGA: 05-01-2023 18H</h5>
            <H5>CARRO ESCOLHIDO: RENAULT CLIO</H5>
            <H5>TOTAL: 105€</H5>
            <button class="button"><a href={{ route('carros.alugueres') }} class="button">Pagamento</a></button>


        </div>
    </div>
@endsection
