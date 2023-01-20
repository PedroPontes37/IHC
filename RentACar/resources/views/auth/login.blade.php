@extends('layouts.layout')

@section('content')
    <div class="container">


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="sistemalogin">
                <div class="col-md-6">
                    <input class="inputTypes" type="email" placeholder="Email"
                        class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                        required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="row mb-3">
                    {{-- <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                    <div class="col-md-6">
                        <input class="inputTypes" type="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button id="buttonAceder" type="submit" class="btn btn-primary">
                            {{ __('Aceder') }}
                        </button>

                    </div>

                    <div>
                        <a id="linkregisto"href="/registo">Nao tens conta?<br>Regista-te já!</a>
                    </div>
                </div>
        </form>


    </div>
    </div>
@endsection
