@extends('layouts.app')

@section('content')
<wrapper nome="{{ __('Login') }}">
    <formulario rota="{{ route('login') }}">
        @csrf
        <campo tipo="email" campo="email" classes="{{ $errors->has('email') ? ' is-invalid' : '' }}" nome="E-mail" valor="{{ old('email') }}" name="email">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </campo>
        <campo tipo="password" campo="password" classes="{{ $errors->has('password') ? ' is-invalid' : '' }}" nome="Senha" valor="" name="password">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </campo>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Lembre-me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Esqueceu sua senha?
                </a>
            </div>
        </div>
    </formulario>
    @if ($errors->has('email'))
    <hr>
    <desbloqueio></desbloqueio>
    @endif
</wrapper>

@endsection
