@extends('layouts.layout')

@section('content')
    <div class="container">


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="sistemaRegisto">

                <div class="col-md-6">
                    <input class="inputTypes" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="row mb-3">


                    <div class="col-md-6">
                        <input class="inputTypes" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">


                    <div class="col-md-6">
                        <input class="inputTypes" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-6">
                        <input class="inputTypes" type="password" class="form-control" name="password_confirmation" required
                            autocomplete="new-password" placeholder="Confirmar Password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button id="buttonAceder" type="submit" class="btn btn-primary">
                            {{ __('Registo') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>




    </div>
@endsection
