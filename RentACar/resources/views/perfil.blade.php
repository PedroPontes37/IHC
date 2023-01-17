@extends('layouts.layout')


@section('content')
    <div class="ContentPerfil">
        <div class="perfil">
            <img id="imgLogin" src="/img/login.png" alt="">
            <h3> Olá, {{ Auth::user()->name }}</h3>
            <button class="buttonsPerfil"> <a href="/datas" class="aPerfil">Fazer Novo Aluguer</a></button>
            <button class="buttonsPerfil">Fazer Novo Aluguer</button>
            <button class="buttonsPerfil">Consultar Alugueres</button>
            @if (auth()->user()->IsAdmin)
                <button class="buttonsPerfil"><a id="Login" href="{{ route('carros.create') }}">
                        Adicionar Carro</a></button>
            @endif
            <button id="buttonLogout">
                <a id="aLogout"
                    href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Sair') }}
                </a>
            </button>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
@endsection
