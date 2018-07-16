@extends('layouts.app')

@section('content')
    <logado msg="Logado com sucesso">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <p></p>
            <img src="" alt="">
            <img src="img/{{Auth::user()->picture}}" alt="{{Auth::user()->name}}" class="img-thumbnail">
    </logado>
@endsection
