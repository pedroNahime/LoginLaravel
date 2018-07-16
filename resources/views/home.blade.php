@extends('layouts.app')

@section('content')
    <logado msg="Logado com sucesso">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <img class="card-img-top" src="img/{{Auth::user()->picture}}" alt="{{Auth::user()->name}}">

    </logado>
@endsection
