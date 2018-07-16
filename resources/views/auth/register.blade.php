@extends('layouts.app')

@section('content')
    <wrapper nome="{{ __('Register') }}">
        <cadastro rota="{{route('register')}}">
            @csrf
            <campo tipo="text" campo="nome" classes="{{ $errors->has('name') ? ' is-invalid' : '' }}" nome="Nome"   valor="{{ old('name') }}" name="name">
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </campo>
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
            <campo tipo="password" campo="password-confirm" classes="" nome="Confirmar Senha" valor="" name="password_confirmation">
            </campo>
            <campo tipo="file" campo="img-perfil"  classes=""  nome="Imagem de Perfil"  name="picture">
                @if ($errors->has('picture'))                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                @endif
            </campo>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit"  class="btn btn-primary">
                        Registrar
                    </button>
                </div>
            </div>
        </cadastro>
    </wrapper>
@endsection
