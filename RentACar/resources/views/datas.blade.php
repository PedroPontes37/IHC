@extends('layouts.layout')

@section('content')
    <div class="pgDatas">
        <div class="localizacao">
            <p>Funchal, Monte</p>
        </div>
        <div class="dataTimes">


            <div class="inputsData">
                <div class="inputsDate2">
                    Data e Hora de Recolha<br><input type="datetime-local" name="datetime"><br>
                </div>
                <div class="inputsDate2">
                    Data e Hora de Devolução<br><input type="datetime-local" name="datetime"><br>
                </div>

            </div>
            <button class="button"><a href="{{ route('carros.index') }}" class="button">Mostrar Ofertas</a></button>



        </div>
    </div>
@endsection
