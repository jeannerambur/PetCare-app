@extends('layout')

@section('content')
<div class="container-login">
    <div class="login">
        <div class="col-md-8">
            <div class="login-title">{{ __('Se connecter') }}</div>
            <div class="login-subtitle">Connecte toi pour continuer</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form">
                        <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->
                        <div class="form-email">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form">
                        <div class="form-email">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           <!--  @if (Route::has('password.request'))
                                <a class="reset-password" href="{{ route('password.request') }}">
                                    {{ __('FORGOT') }}
                                </a>
                            @endif -->
                        </div>
                    </div>
                    <div class="button-login">
                        <div class="button-submit">
                            <button type="submit" class="submit">
                                {{ __('Se connecter') }}
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class='no-account'>
    <div>Tu n'as pas de compte ?  <a href="{{ route('register') }}">S'inscrire</a></div>
</div>
@endsection
