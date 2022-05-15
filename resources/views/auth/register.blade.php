@extends('layout')

@section('content')
<div class="container-register">
    <div class="register">
        <div class="form-register">

                <div class="register-title">{{ __('Créer un compte') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-name">
                           <div class="name">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nom" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-email">
                            <div class="email">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-password">
                            <div class="password">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-password">
                            <div class="password">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirmer le mot de passe" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="button-register">
                            <div class="button-submit">
                                <button type="submit" class="btn-submit">
                                    {{ __("S'inscrire") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
    <div class='has-account'>
        <div>Tu as déjà un compte ?  <a href="{{ route('login') }}">Se connecter</a>
    </div>
</div>

@endsection
